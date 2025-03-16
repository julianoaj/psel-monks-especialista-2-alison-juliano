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

    protected static function addRoute(string $method, string $uri, $action): void
    {
        self::init();
        self::$routes->add($uri, new Route(
            $uri,
            ['_controller' => $action],
            [],
            [],
            '',
            [],
            [$method]
        ));
    }

    public static function get(string $uri, $action): void
    {
        self::addRoute('GET', $uri, $action);
    }

    public static function post(string $uri, $action): void
    {
        self::addRoute('POST', $uri, $action);
    }

    public static function put(string $uri, $action): void
    {
        self::addRoute('PUT', $uri, $action);
    }

    public static function delete(string $uri, $action): void
    {
        self::addRoute('DELETE', $uri, $action);
    }
}