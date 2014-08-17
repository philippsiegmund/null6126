<?php

class SessionsController extends BaseController {
	

	public function create()
	{
		if ( Auth::check() ) return Redirect::to('users');
		
		return View::make('login');
	}
	
	
	public function store()
	{
		if( Auth::attempt( Input::only('email', 'password'))) {
				
			return View::make('main');
			// return Auth::user();
		}
		
		return Redirect::back()->withInput()->with('error','You shall not pass!');
	}
	
	public function destroy()
	{
		Auth::logout();
		
		return Redirect::to('login');
	}
	
	
	
	
}
