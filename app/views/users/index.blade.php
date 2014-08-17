@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
		<h1>Users Index</h1>
		@if($users->count())
			@foreach($users as $user)
				<li>{{ link_to("/users/{username}", $user->username) }}</li>
			@endforeach
		@else
			<p>Not users</p>
		@endif
	</div>
@stop
