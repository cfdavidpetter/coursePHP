<?php

namespace OrdersFood\Router;

use Symfony\Component\HttpFoundation\Response;

class RouterManager
{
    private $request;
    private $response;
    private $path;

    function __construct($request)
    {
        $this->request  = $request;
        $this->response = new Response();
        $this->path     = $this->request->getPathInfo();
        $this->run();
    }

    private function run()
    {
        $routes = include('Routes.php');

        foreach ($routes as $route) {
            if ($this->path == $route[1]) {

                $piecesList = explode('::', $route[2]);
                $controller = "OrdersFood\\Controller\\" . $piecesList[0];
                $controller = new $controller;

                if (sizeof($piecesList) == 1) {
                    $controller->index($this->request);
                } else {
                    $controller->$piecesList[1]($this->request); 
                }

                return;
            }
        }

        $this->response->setContent('Error 404 Not Found.');
        $this->response->send();
    }
    
}
