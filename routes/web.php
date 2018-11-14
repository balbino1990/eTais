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
Route::get('/details/{id}', 'ProductController@details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('seller', 'SellerController');

//Route::get('/seller/create', 'SellerController@create')->name('seller.create');
//Route::post('/seller/create', 'SellerController@store')->name('seller.store');
//Route::get('/seller/index', 'SellerController@index')->name('seller.index');
//Route::get('/seller/edit/{id}', 'SellerController@edit')->name('seller.edit');
//Route::patch('/seller/update/{id}', 'SellerController@update')->name('seller.update');
