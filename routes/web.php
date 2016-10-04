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
Route::group(['middleware' => 'web'], function() {

	Route::get('/','LandingPageController@index');
	Route::post('/join','LandingPageController@createJoin');

	Route::get('/admin','AdminController@index');
	Route::post('/admin/login','AdminController@login');
	Route::get('/admin/logout','AdminController@logout');


	Route::get('/admin/join','JoinController@index');
	Route::get('/admin/join/detail/{id}','JoinController@show');
});
