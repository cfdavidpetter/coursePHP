<?php

namespace OrdersFood\Router;

class RouterManager
{
    private $request;
    private $response;
    private $path;

    function __construct($request, $response)
    {
        $this->request  = $request;
        $this->response = $response;
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
                    $controller->index($this->request, $this->response);
                } else {
                    $methodStr = $piecesList[1];
                    $controller->$methodStr($this->request, $this->response); 
                }

                return;
            }
        }

        $this->response->setContent('Error 404 Not Found.');
        $this->response->send();
    }
}
