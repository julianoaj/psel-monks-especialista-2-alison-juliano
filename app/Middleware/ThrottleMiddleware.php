<?php
namespace App\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ThrottleMiddleware {
    protected int $limit = 60;
    protected int $window = 60; // seconds

    public function handle(Request $request, callable $next): Response {
        $ip = $request->getClientIp();
        $cacheFile = sys_get_temp_dir() . "/throttle_{$ip}.json";

        if (file_exists($cacheFile)) {
            $data = json_decode(file_get_contents($cacheFile), true);
            $requestCount = $data['count'];
            $startTime = $data['start'];

            if (time() - $startTime < $this->window) {
                if ($requestCount >= $this->limit) {
                    return new Response('Too Many Requests', 429);
                } else {
                    $data['count']++;
                }
            } else {
                $data = ['count' => 1, 'start' => time()];
            }
        } else {
            $data = ['count' => 1, 'start' => time()];
        }

        file_put_contents($cacheFile, json_encode($data));

        $result = $next($request);
        if (!($result instanceof Response)) {
            $result = new Response($result, 200, ['Content-Type' => 'application/json']);
        }
        return $result;
    }
}