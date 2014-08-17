<?php

class LocationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations = Location::all();
		
		return View::make('locations.index', array('locations' => $locations));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('locations.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), array('name' => 'required'));		
	
		if ($validation->fails())
		{
				
			 return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		
		$location = new Location;
		$location->name = Input::get('name');
		$location->long = Input::get('long');
		$location->long = Input::get('lat');
		$location->save();
		
		return Redirect::to('locations');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "locations show";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$location = Location::findOrFail($id);
		return View::make('locations.edit', compact('location', $user));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		if (Input::get('password') != ''){ 
			$user->password = Hash::make(Input::get('password'));
		}
		$user->save();
		
		return Redirect::to('users');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
