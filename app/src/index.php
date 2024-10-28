<?php

use App\Http\Request;

require_once __DIR__ . '/../vendor/autoload.php';

$request = new Request();


$routes = json_decode(file_get_contents(__DIR__ . '/../config/routes.json'));

foreach($routes as $route) {
    if($route->path !== $request->getUri()){
        continue;
    }

    if(in_array($request->getMethod(), $route->methods) === false){
        continue;
    }

    echo $route->controller;
}