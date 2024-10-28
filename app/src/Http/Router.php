<?php

namespace App\Http;

use App\Http\Request;

class Router {
    public function route(Request $request): string {
        foreach(self::getConfig() as $route) {
            if(self::checkUri($request, $route) === false){
                continue;
            }
        
            if(self::checkMethod($request, $route) === false){
                continue;
            }
        
            return $route->controller;
        }

        return '';
    }

    private static function getConfig(): array {
        $config = json_decode(file_get_contents(__DIR__ . '/../../config/routes.json'));
        return $config;
    }

    private static function checkMethod(Request $request, object $route): bool {
        return in_array($request->getMethod(), $route->methods);
    }

    private static function checkUri(Request $request, object $route): bool {
        return $route->path === $request->getUri();
    }
}