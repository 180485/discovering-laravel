<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//exercise 2 blade view pages
route::get('/', 'App\Http\Controllers\PagesController@index');
route::get('/form', 'App\Http\Controllers\PagesController@form');
route::get('/index', 'App\Http\Controllers\PagesController@index');
route::get('/contact', 'App\Http\Controllers\PagesController@contact');
route::get('/contact', 'App\Http\Controllers\CreatePostController@index');
route::get('/index', 'App\Http\Controllers\PagesController@image');
route::get('/', 'App\Http\Controllers\PagesController@image');


//exercise 2 validation form
route::post('/form', 'App\Http\Controllers\PostController@store');
route::get('/post', 'App\Http\Controllers\PostController@create');


//exercise 3
