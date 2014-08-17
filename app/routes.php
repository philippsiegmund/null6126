<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'login');

Route::get('login', array(
			'as' => 'login', 
			'uses' => 'SessionsController@create'));
Route::get('logout', array(
			'as' => 'logout', 
			'uses' => 'SessionsController@destroy'));	

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');


// Route::get('users', array(
			// 'as' => 'users', 
			// 'uses' => 'UsersController@index'))->before('auth');
// 
// Route::get('user', 'UsersController@index')->before('auth');

Route::get('upload', array(
			'as' => 'upload', 
			'uses' => 'ImagesController@create'))->before('auth');

Route::post('uploadimages', array(
			'as' => 'uploadimages', 
			'uses' => 'ImagesController@upload'))->before('auth');

Route::get('admin', 'AdminsController@index')->before('auth');