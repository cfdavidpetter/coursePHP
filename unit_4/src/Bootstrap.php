<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

use OrdersFood\Application;

error_reporting(E_ALL);

//PHP errors for cool kids
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

Application::run();