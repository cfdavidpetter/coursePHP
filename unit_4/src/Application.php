<?php

namespace OrdersFood;

use OrdersFood\DependencyInjection\Dependencies;
use OrdersFood\Router\RouterManager;

class Application
{
    private static $injector;
    private static $request;
    private static $response;
    private static $manager;

    public static function run()
    {
        self::$injector = Dependencies::run();

        self::$request  = self::$injector->get('Symfony\Component\HttpFoundation\Request');
        self::$response = self::$injector->get('Symfony\Component\HttpFoundation\Response');

        self::$manager = new RouterManager(self::$request::createFromGlobals(), self::$response);
    }
}
