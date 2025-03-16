<?php

namespace App\Facades;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route as SymfonyRoute;

class Route extends SymfonyRoute
{
    protected static RouteCollection $routes;

    protected static function init(): void
    {
        if (!isset(self::$routes)) {
            self::$routes = new RouteCollection();
        }
    }

    public static function getRoutes(): RouteCollection
    {
        self::init();
        return self::$routes;
    }

    protected static function addRoute(string $method, string $uri, $action, array $options = []): void
    {
        self::init();
        $defaults = array_merge(['_controller' => $action], $options);
        self::$routes->add($uri, new Route(
            $uri,
            $defaults,
            [],
            [],
            '',
            [],
            [$method]
        ));
    }

    public static function get(string $uri, $action, array $options = []): void
    {
        self::addRoute('GET', $uri, $action, $options);
    }

    public static function post(string $uri, $action, array $options = []): void
    {
        self::addRoute('POST', $uri, $action, $options);
    }

    public static function put(string $uri, $action, array $options = []): void
    {
        self::addRoute('PUT', $uri, $action, $options);
    }

    public static function delete(string $uri, $action, array $options = []): void
    {
        self::addRoute('DELETE', $uri, $action, $options);
    }
}