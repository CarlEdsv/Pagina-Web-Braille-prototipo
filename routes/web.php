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

Route::get('old-login', function () {
    return view('old-login');
});

Route::get('main', function () {
    return view('main');
});

Route::get('/', function () {
    return view('home');
});

Route::get('roadmap', function () {
    return view('roadmap');
});
Route::get('leccion-1', function () {
    return view('lecciones');
});

Route::get('profile', function () {
    return view('profile');
});
