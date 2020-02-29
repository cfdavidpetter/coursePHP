<?php

namespace OrdersFood;

use OrdersFood\Http\{HttpRequest, HttpResponse};

class Application
{
    public static function run()
    {
        $request = new HttpRequest();
        $request = new HttpResponse();
        echo "OK"; 
    }
}
