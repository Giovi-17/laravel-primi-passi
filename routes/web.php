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

Route::get('/', function () {

    $data = [

        "name" => "x",
        "lastname" => "y",
        "age" => "n"
    
    ];

    return view('home', $data);
})->name("homepage");

Route::get('/shop', function () {

    return view('shop');
})->name("shop");

Route::get('/info', function () {

    return view('info');
})->name("info");
