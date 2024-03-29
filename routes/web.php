<?php

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

Route::get('refresh', function () {
        Artisan::call("migrate:refresh");
});

Route::get('instalar', function () {
    Artisan::call("storage:link");
    Artisan::call("migrate");
});

Route::get('/', function () {
    return view('holamundo');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');