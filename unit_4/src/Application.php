<?php

namespace OrdersFood;

use Symfony\Component\HttpFoundation\Request;
use OrdersFood\Router\RouterManager;

class Application
{
    private static $request;
    private static $response;
    private static $routerManager;

    public static function run()
    {
        self::$request          = Request::createFromGlobals();
        self::$routerManager    = new RouterManager(self::$request);
    }
}
