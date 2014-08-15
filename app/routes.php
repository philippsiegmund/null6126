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

Route::get('/', 'HomeController@main');

Route::resource('sessions', 'SessionsController');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('users', 'UsersController@index');



Route::get('/dummy', function()
{
	$user = User::create([
		'username' => 'Philipp',
		'email' => 'philipp.siegmund@gmail.com',
		'password' => Hash::make('1234567')
	]);
	
	return 'Dummy';
});

Route::get('/admin', function(){
	return "Admin Page";	
})->before('auth');
