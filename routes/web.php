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

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home', ['active' => 'home']);
Route::view('/about', 'pages.about', ['active' => 'about']);

Route::get('/recruitment', 'CarrersController@index');
Route::get('/recruitment/register', 'CarrersController@create');
Route::post('/recruitment/register', 'CarrersController@store');

Route::resource('products', 'ProductsController');
