<?php

namespace OrdersFood\Http;

class HttpRequest
{
    private $getParameters  = [];
    private $postParameters = [];

    function __construct($get, $post)
    {
        $this->getParameters  = $get;
        $this->postParameters = $post;
    }

    public function getQuery()
    {
        return $this->getParameters;
    }

    public function getData()
    {
        return $this->postParameters;
    }
}
