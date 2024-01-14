<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', 'MainController@home');

Route::get('/partners', 'MainController@partners');

Route::get('/experts', 'MainController@experts');

Route::get('/services', 'MainController@services');

Route::get('/edu', 'MainController@edu');
