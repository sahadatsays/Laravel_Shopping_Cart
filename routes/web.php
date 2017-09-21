<?php

Route::get('/',[
	'uses' =>'ProductsController@getProducts',
	'as'   => 'shop.index'
	]);
Route::group(['prefix' => 'user'],function(){
	Route::group(['middleware' => 'guest'], function(){
		Route::get('/signup',[
			'uses' => "UserController@getSignup",
			'as' => 'users.signup'
			]);
		Route::post('/signup',[
			'uses' => "UserController@postSignup",
			'as'   => 'users.signup'
			]);
		Route::get('/signin',[
			'uses' => "UserController@getSignin",
			'as'   => 'users.signin'
			]);
		Route::post('/signin',[
			'uses' => "UserController@postSignin",
			'as'   => 'users.signin'
			]);
	});
		
	Route::group(['middleware' => 'auth'], function(){
		Route::get('/profile',[
			'uses' => 'UserController@getProfile',
			'as'   => 'users.profile'
			]);
		Route::get('/logout', [
			'uses' => 'UserController@getLogout',
			'as'   => 'users.logout'
			]);
	});
});
