<?php
namespace App\Middleware;

class ThrottleMiddleware
{
    protected int $limit;
    protected int $timePeriod; // in seconds

    public function __construct(int $limit = 60, int $minutes = 1)
    {
        $this->limit = $limit;
        $this->timePeriod = $minutes * 60;
    }

    public function handle($request, callable $next)
    {
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $key = 'throttle_' . $ip;
        $data = apcu_fetch($key);

        if ($data === false) {
            $data = ['count' => 1, 'start' => time()];
            apcu_store($key, $data, $this->timePeriod);
        } else {
            if (time() - $data['start'] > $this->timePeriod) {
                $data = ['count' => 1, 'start' => time()];
                apcu_store($key, $data, $this->timePeriod);
            } else {
                if ($data['count'] >= $this->limit) {
                    header('HTTP/1.1 429 Too Many Requests');
                    exit('Too Many Requests');
                }
                $data['count']++;
                apcu_store($key, $data, $this->timePeriod);
            }
        }
        return $next($request);
    }
}