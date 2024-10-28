<?php

namespace App\Controllers;

use App\Http\Request;

abstract class AbstractController{
    abstract public function process(Request $request);
}