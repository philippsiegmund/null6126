@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
		<h1>Locations Index</h1>
		@if($locations->count())
		<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Adresse</th>
					<th>Google Maps</th>
					<th>Bilder</th>
					<th>Aktion</th>
					<th>Löschen</th>
				</tr>
			@foreach($locations as $location)
				<tr>
					<td>{{ $location->id }}</td>
					<td>{{ $location->name }}</td>
					<td>{{ $location->long }}</td>
					<td><a href="http://maps.google.de/maps?q=50.11834,8.66309">Maps</a></td>
					<td>50</td>
					<td>{{ link_to_route("locations.edit", "Bearbeiten", ['id' => $location->id]) }}</td>
					<td>
						{{ Form::model($location, ['method' => 'DELETE', 'route' => ['locations.destroy', $location->id, 'name' => 'delete']]) }}
							<span class="glyphicon glyphicon-remove" onclick="delete.submit()"></span>
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</table>
		
		@else
			<p>Not users</p>
		@endif
	</div>
@stop


