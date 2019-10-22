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

    Route::get('/', 'LoginController@login');
    Route::get('/home', 'HomeController@home');
    Route::get('/pertama', 'HomeController@pertama');
    Route::get('/kedua', 'HomeController@kedua');
    Route::get('/ketiga', 'HomeController@ketiga');

    Route::get('/login', 'LoginController@login');
    Route::get('/register', 'LoginController@register');

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
