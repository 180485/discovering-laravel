<?php

namespace App\Http\Controllers;

use Illuminate\http\request;

class HelloController extends Controllers
{
    public function index()
    {
        return view ('aboutus');
    }
}