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

Route::get('/',array( 'uses' => 'HomeController@index'));
			
Route::get('logout', array(
			'as'   => 'home.logout', 
			'uses' => 'HomeController@destroy'));	

Route::post('login', array(
			'as'   => 'home.login', 
			'uses' => 'HomeController@login'));	

Route::get('login', array(
			'as'   => 'home.getLogin', 
			'uses' => 'HomeController@index'));	

Route::resource('users', 'UsersController');

Route::resource('locations', 'LocationsController');
Route::post('locations/locate', array(
			'as'   => 'locations.locate',
			'uses' => 'LocationsController@locate'));


Route::get('upload', array(
			'as' => 'upload', 
			'uses' => 'ImagesController@create'))->before('auth');

Route::post('uploadimages', array(
			'as' => 'uploadimages', 
			'uses' => 'ImagesController@upload'))->before('auth');