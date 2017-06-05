<?php

Route::get('/', function(){
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/partnership', 'PartnershipController@display');
Route::post('/partnership', 'PartnershipController@store');
Route::get('/partnership/forms', 'PartnershipController@showPartnershipForms');
Route::get('/partnership/download/{id}', 'PartnershipController@downloadDocument');

Route::get('/feedback', 'FeedbackController@display');
Route::post('/feedback', 'FeedbackController@store');
Route::get('/feedbacks', 'FeedbackController@showFeedbacks');

Route::get('/post', 'PostController@display');
Route::post('/post', 'PostController@store');

Route::get('/menu', 'PagesController@displayMenu');
Route::get('/contact', 'PagesController@displayContact');

Route::get('/newsfeed', 'PagesController@newsfeed');
