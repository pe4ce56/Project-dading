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
Route::view('/', 'pages.home', ['active' => 'home']);
Route::view('/about', 'pages.about', ['active' => 'about']);

Route::get('/recruitment/register', 'CarrersController@create');
