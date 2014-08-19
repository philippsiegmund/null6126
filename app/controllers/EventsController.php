	<?php

class EventsController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::all();
		
		return View::make('events.index', array('events' => $events));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('events.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), array('name' => 'required'));		
		$user_id = Auth::id();	
		
		if ($validation->fails())
		{
				
			 return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		
		$event = new Event;
		$event->name = Input::get('name');
		$event->start = Input::get('start');
		$event->end = Input::get('end');
		$event->user_id = $user_id;
		$event->save();
		
		return Redirect::to('events');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "events show";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = Event::findOrFail($id);
		return View::make('events.edit', compact('event', $event));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = Event::findOrFail($id);
		$event->name = Input::get('name');
		$event->start = Input::get('start');
		$event->end = Input::get('end');
		$event->save();
		
		return Redirect::to('events');
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
