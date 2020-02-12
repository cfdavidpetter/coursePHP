<?php

declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

//PHP errors for cool kids
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



throw new Exception("Error Processing Request", 1);