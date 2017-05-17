<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::auth();

Route::get('/',function(){return view('welcome');});
Route::get('/partnership', 'PagesController@partnership');
Route::post('/partnership', 'PagesController@storepartner');

Route::get('/feedback', 'PagesController@feedback');
Route::post('/feedback', 'PagesController@storefeedback');
Auth::routes();

Route::get('/home', 'HomeController@index');
