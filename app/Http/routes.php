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

Route::get('productindex', 'ProductController@index');
Route::get('productform', 'ProductController@form');
Route::post('save', 'ProductController@save');


Route::get('tes', 'OneController@index');  

Route::get('mimin', 'adminController@index');

