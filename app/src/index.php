<?php

use App\Http\Request;
use App\Http\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$request = new Request();

$router = new Router();
$controller = $router->route($request);

$controllerNamespace = "App\\Controllers\\" . $controller;

if(class_exists($controllerNamespace) === false){
    die;
} 

$controller = new $controllerNamespace();
