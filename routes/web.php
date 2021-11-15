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

// Home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// Menu
Route::get('/menu', function () {
    return view('menu', [
        "title" => "Menu"
    ]);
});

// Order Now
Route::get('/order', function () {
    return view('order', [
        "title" => "Order"
    ]);
});

// About Us
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

// Login
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});