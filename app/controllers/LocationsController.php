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
		
		try
		{
    		$user = Sentry::getUser();
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
    		return 'Bollocks!';
		}

		$location = new Location;
		$location->name = Input::get('name');
		$location->street = Input::get('street');
		$location->num = Input::get('num');
		$location->zip = Input::get('zip');
		$location->city = Input::get('city');
		$location->country = Input::get('country');
		$location->lon = Input::get('lon');
		$location->lat = Input::get('lat');
		
		$location = $user->locations()->save($location);
		
		
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
		return View::make('locations.edit', compact('location', $location));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$location = Location::findOrFail($id);
		$location->name = Input::get('name');
		$location->long = Input::get('long');
		$location->lat = Input::get('lat');
		$location->save();
		
		return Redirect::to('locations');
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


	public function locate() {
		
		if ( Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
				'error' => 'Unauthorized attempt to create option'
			));
		}
		
		$search_string = Input::get( 'search' );
		
		
		$adapter = App::make('geocoder.adapter');
		$providers = array(
		    new \Geocoder\Provider\GoogleMapsProvider( $adapter, 'de', '', true )
		);
		
		Geocoder::registerProviders($providers);
		Geocoder::using('google_maps');
		
		try {
			
			$located = Geocoder::geocode($search_string);
		} catch (\Exception $e) {
			$msg = $e->getMessage();
			
			return Response::json( array(
				'error' => $msg 
			));
		}
		
		$response = array(
			'status'       => 'success',
			'msg'          => 'Option created successfully',
			'streetName'   => $located->getStreetName(),
			'streetNumber' => $located->getStreetNumber(),
			'city'         => $located->getCity(),
			'zipcode'      => $located->getZipcode(),
			'country'      => $located->getCountry(),
			'longitude'    => $located->getLongitude(),
			'latitude'     => $located->getLatitude(),
		);

		return Response::json( $response );

	}

}
