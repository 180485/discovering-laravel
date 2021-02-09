<?php

namespace App\Http\Controllers;

use Illuminate\http\request;

class helloController extends Controllers
{
    public function index()
    {
        return view ('app');
    }
}