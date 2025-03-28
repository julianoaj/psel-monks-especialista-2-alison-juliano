<?php
namespace Illuminate\Router;

use ReflectionMethod;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use App\Http\Exceptions\ValidationException;
use App\Middleware\ThrottleMiddleware;

class Kernel
{
    public function __construct(protected $routes)
    {
        $this->routes = $routes;
    }

    public function handle(Request $request)
    {
        $context = new RequestContext();
        $context->fromRequest($request);
        $matcher = new UrlMatcher($this->routes, $context);

        try {
            $parameters = $matcher->match($request->getPathInfo());

            // Check for a middleware key and process throttle if needed.
            if (isset($parameters['middleware'])) {
                $middlewareOption = $parameters['middleware'];
                if (strpos($middlewareOption, 'throttle:') === 0) {
                    [, $params] = explode(':', $middlewareOption, 2);
                    [$limit, $minutes] = explode(',', $params);
                    $throttle = new ThrottleMiddleware((int)$limit, (int)$minutes);
                    // Handle throttle. Execution stops here if limit exceeded.
                    $throttle->handle($request, function ($request) {
                        return $request;
                    });
                }
                // Remove middleware key so it does not conflict.
                unset($parameters['middleware']);
            }

            list($controllerClass, $method) = explode('@', $parameters['_controller']);

            $controller = new $controllerClass();
            unset($parameters['_controller'], $parameters['_route']);

            $refMethod = new ReflectionMethod($controller, $method);
            $finalParameters = [];
            foreach ($refMethod->getParameters() as $param) {
                $paramType = $param->getType();
                $paramClass = $paramType?->getName();
                if ($paramClass && is_subclass_of($paramClass, 'App\Http\Requests\FormRequest')) {
                    $data = json_decode($request->getContent(), true);
                    $finalParameters[] = new $paramClass($data);
                } else {
                    $finalParameters[] = $parameters[$param->getName()] ?? null;
                }
            }

            return $refMethod->invokeArgs($controller, $finalParameters);
        } catch (ValidationException $e) {
            $response = new Response(
                json_encode(['errors' => $e->getErrors()]),
                $e->getCode(),
                ['Content-Type' => 'application/json']
            );
            return $response->send();
        } catch (\Exception $e) {
            $response = new Response(
                'Route not found or error: ' . $e->getMessage(),
                500,
                ['Content-Type' => 'text/plain']
            );
            return $response->send();
        }
    }
}