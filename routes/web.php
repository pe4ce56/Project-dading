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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/products', 'PagesController@products');
Route::get('/products/category/{category}', 'PagesController@products');
Route::get('/products/getProduct/{id}', 'PagesController@getProduct');
// login
Route::get('/admin/login', 'Auth\LoginController@index')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::get('/admin/change', 'Auth\UsersController@index');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');;

Route::get('/recruitment/carerr', 'CarrersController@index');
Route::get('/recruitment/register', 'CarrersController@create');
Route::post('/recruitment/register', 'CarrersController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/admin/products', 'ProductsController');
    Route::get('/admin/setting', 'Auth\UsersController@index');
    Route::put('/admin/setting/{user}', 'Auth\UsersController@update');
});

// Auth::routes();
