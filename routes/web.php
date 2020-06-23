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
    return view('index', ['active' => 'home']);
});

Route::get('/cats', function () {
    // ! cats comes first
    return view('cats', ['active' => 'cats']);
});

Route::get('/dogs', function () {
    return view('dogs', ['active' => 'dogs']);
});
