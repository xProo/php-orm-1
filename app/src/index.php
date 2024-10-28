<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Http\Request;
use App\Http\Router;

$request = new Request();
$router = new Router();

$response = $router->route($request);