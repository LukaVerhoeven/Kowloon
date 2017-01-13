<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dogs', function () {
    return view('dogs');
});


Route::get('/productview', function () {
    return view('productdetail');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/subscriber', 'Controller@addSubscriber');
