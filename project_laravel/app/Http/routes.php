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

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//Route::get('/', function () {
//	return	view('laravel_project.index');
//});
Route::group(['prefix'=>'admin'], function () {
	Route::get('/', function () {
		return	view('laravel_project.index');
	});
	Route::resource('category', 'CateController');
	Route::resource('product', 'ProductController');
	
});

