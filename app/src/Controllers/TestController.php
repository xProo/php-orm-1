<?php

namespace App\Controllers;

use App\Http\Request;
use App\Http\Response;

class TestController extends AbstractController {
    public function process(Request $request): Response {
        echo 'TrucController';
        return new Response();
    }
}