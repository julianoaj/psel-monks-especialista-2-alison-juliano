<?php

use Illuminate\Router\Kernel;
use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();
$routes = require __DIR__ . '/../routes/web.php';

$kernel = new Kernel($routes);
echo $kernel->handle($request);
