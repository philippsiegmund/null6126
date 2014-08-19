@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
		<h1>Users Index</h1>
		@if($users->count())
		<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>E-Mail</th>
					<th>Letzter Login</th>
					<th>Aktion</th>
					<th>Löschen</th>
				</tr>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->first_name }} {{ $user->last_name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->last_login }}</td>
					<td>{{ link_to_route("users.edit", "Bearbeiten", ['id' => $user->id]) }}</td>
					<td>
						{{ Form::model($user, ['method' => 'DELETE', 'route' => ['users.destroy', $user->id, 'name' => 'delete']]) }}
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


