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


Auth::routes();
Route::get('index', 'DashboardController@index')->name('index');

//Route::get('add_device', 'DevicesController@index')->name('add_device');
//Route::get('add_fuel', 'FuelController@index')->name('add_fuel');
//Route::get('add_price', 'PriceController@index')->name('add_price');

Route::resource('product', 'ProductsController');

Route::resource('fuel', 'FuelController');

Route::resource('price', 'PriceController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
