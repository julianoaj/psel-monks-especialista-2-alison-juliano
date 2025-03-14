<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();
$routes = require __DIR__ . '/../routes/web.php';

$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes, $context);

try {
    $parameters = $matcher->match($request->getPathInfo());

    list($controllerClass, $method) = explode('@', $parameters['_controller']);

    $controller = new $controllerClass();

    unset($parameters['_controller'], $parameters['_route']);

    $response = call_user_func_array([$controller, $method], $parameters);
    echo $response;
} catch (\Exception $e) {
    echo 'Route not found or error: ' . $e->getMessage();
}