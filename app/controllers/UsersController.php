<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$users = User::all();

		return View::make('users.index', array('users' => $users));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$validation = Validator::make(Input::all(), array(
			'email'     => 'required', 
			'password'  => 'required', 
			'username'  => 'required'
			)
		);

		if ($validation -> fails()) {
			return Redirect::back() -> withInput() -> withErrors($validation -> messages());
		}

		try {
			$values = array(
				'email'     => Input::get('email'),
				'username'  => Input::get('username'),
				'password'  => Input::get('password'),
				'activated' => true 
			);

			if (Input::get('first_name') != '') {
				$values['first_name'] = Input::get('first_name');
			}
			if (Input::get('last_name') != '') {
				$values['last_name'] = Input::get('last_name');
				
			}

			if (Input::hasFile('avatar')) {
				$file = Input::file('avatar');
				
				$img = Image::make($file);
				$img -> fit(200);

				$destinationPath = 'uploads';

				$extension = $file->getClientOriginalExtension();
				$path = public_path() . '/uploads/' . Input::get('username');
				$filename = sha1(time().time()).".{$extension}";

				$dir = File::makeDirectory($path, 0775, true, true);
				
				$upload_success = $img -> save($path ."/" . $filename);

				if( $upload_success ) {
					$values['avatar'] = $filename;
				} else {
					return Redirect::back() -> withInput();
				}
			}

			$user = Sentry::createUser($values);

			return Redirect::route('users.index');

		} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
			echo 'Login field is required.';
		} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
			echo 'Password field is required.';
		} catch (Cartalyst\Sentry\Users\UserExistsException $e) {
			echo 'User with this login already exists.';
		} catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
			echo 'Group was not found.';
		}

		return Redirect::route('users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		return $id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$user = User::findOrFail($id);
		return View::make('users.edit', compact('user', $user));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {

		try {
			// Find the user using the user id
			$user = Sentry::findUserById($id);
			
			$validation = Validator::make(Input::all(), array(
				'email'     => 'required', 
				'password'  => 'required', 
				'username'  => 'required'
				)
			);

			if ($validation -> fails()) {
				return Redirect::back() -> withInput() -> withErrors($validation -> messages());
			}
			
			$values = array(
				'email'     => Input::get('email'),
				'username'  => Input::get('username'),
				'password'  => Input::get('password'),
				'first_name'=> Input::get('first_name'),
				'last_name'=> Input::get('last_name') 
			);
			
			if (Input::hasFile('avatar')) {
				$img = Image::make(Input::file('avatar'));
				$img -> fit(200);

				$path = public_path() . '/uploads/' . Input::get('username');
				$dir = File::makeDirectory($path);

				$values['avatar'] = $path . '/avatar.jpg';
				$img -> save($values['avatar']);
			}
			

			if ($user -> save()) {
				return Redirect::route('users.index');
			} else {
				return Redirect::route('users.index');
			}
		} catch (Cartalyst\Sentry\Users\UserExistsException $e) {
			echo 'User with this login already exists.';
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			echo 'User was not found.';
		}
		
		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

}
