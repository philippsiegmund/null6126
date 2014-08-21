@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
		<h1>events Index</h1>
		@if($events->count())
		<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Start</th>
					<th>Ende</th>
					<th>User ID</th>
					<th>Aktion</th>
					<th>Löschen</th>
				</tr>
			@foreach($events as $event)
				<tr>
					<td>{{ $event->id }}</td>
					<td>{{ $event->name }}</td>
					<td>{{ $event->start }}</td>
					<td>{{ $event->end }}</td>
					<td>{{ $event->user_id }}</td>
					<td>50</td>
					<td>{{ link_to_route("events.edit", "Bearbeiten", ['id' => $event->id]) }}</td>
					<td>
						{{ Form::model($event, ['method' => 'DELETE', 'route' => ['events.destroy', $event->id, 'name' => 'delete']]) }}
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


