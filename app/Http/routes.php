<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return 'home';
});

Route::get('products', 'ProductsController@index');
Route::get('products/{product}', 'ProductsController@show');

Route::get('manufacturers/{mnf}', 'ManufacturerController@show');

Route::get('categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('categories', 'CategoryController@store');