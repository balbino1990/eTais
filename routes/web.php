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

Route::get('/', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('seller', 'SellerController');

Route::get('/seller/create', 'SellerController@create')->name('seller.create');
Route::post('/seller/create', 'SellerController@store')->name('seller.store');
Route::get('/seller/index', 'SellerController@index')->name('seller.index');

