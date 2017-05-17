<?php

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/',function(){return view('welcome');});
Route::get('/partnership', 'PartnershipController@display');
Route::post('/partnership', 'PartnershipController@store');

Route::get('/feedback', 'FeedbackController@display');
Route::post('/feedback', 'FeedbackController@store');

Route::get('/post', 'PostController@display');
Route::post('/post', 'PostController@store');