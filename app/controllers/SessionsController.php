<?php

class SessionsController extends BaseController {
	

	public function create()
	{
		if ( Auth::check() ) return Redirect::to('/user');
		
		return View::make('main');
	}
	
	
	public function store()
	{
		if( Auth::attempt( Input::only('email', 'password'))) {
			return Auth::user();
		}
		
		return Redirect::back()->withInput();
	}
	
	public function destroy()
	{
		Auth::logout();
		
		return Redirect::to('/');
	}
	
}
