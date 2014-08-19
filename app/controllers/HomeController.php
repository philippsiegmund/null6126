<?php

class HomeController extends BaseController {
	
	public function index() {
		return View::make('login');
	}
	
	public function login() {

		$credentials = array(
			'email' => Input::get('email'), 
			'password' => Input::get('password')
			);
		
		try {
			$user = Sentry::authenticate($credentials, false);
			if (Sentry::check()) {
				return Redirect::route('users.index');
			}
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			return Redirect::to('/') -> withErrors(array('login' => 'You shall not pass!'));
		}
	}

	public function logout() {
		Sentry::logout();
		return Redirect::to('/');
	}

	public function destroy() {
		Sentry::logout();
		return Redirect::to('/');
	}
}
