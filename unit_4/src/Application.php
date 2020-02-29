<?php

namespace OrdersFood;

use Symfony\Component\HttpFoundation\{Request, Response};

class Application
{
    public static function run()
    {
        $request    = Request::createFromGlobals();
        $response   = new Response();

        $query = $request->getPathInfo();
        var_dump($query);

        switch ($query) {
            case '/teste':
                $response->setContent('Dois');
            break;
            
            default:
                $response->setContent('Um');
                break;
        }

        $response->send();
    }
}
