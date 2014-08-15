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

Route::any('/', 'login');

Route::resource('sessions', 'SessionsController');

Route::get('login', [
			'as' => 'login', 
			'uses' => 'SessionsController@create']);
Route::get('logout', [
			'as' => 'logout', 
			'uses' => 'SessionsController@destroy']);

Route::get('users', 'UsersController@index')->before('auth');
Route::get('user', 'UsersController@index')->before('auth');

Route::get('upload', [
			'as' => 'upload', 
			'uses' => 'ImagesController@create'])->before('auth');



Route::get('admin', 'AdminsController@index')->before('auth');

