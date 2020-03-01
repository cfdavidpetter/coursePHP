<?php

namespace OrdersFood\Controller;

class HomeController
{
    public function index($request, $response)
    {
        $response->setContent('HomeController');
        $response->send();
    }

    public function about($request, $response)
    {
        $response->setContent('HomeController::about');
        $response->send();
    }
}
