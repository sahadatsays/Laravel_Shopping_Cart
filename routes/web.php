<?php

Route::get('/',[
	'uses' =>'ProductsController@getProducts',
	'as'   => 'shop.index'
	]);
Route::get('/signup',[
	'uses' => "UserController@getSignup",
	'as' => 'users.signup'
	]);
Route::post('/signup',[
	'uses' => "UserController@postSignup",
	'as'   => 'users.signup'
	]);
