@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
	{{ Form::model($location, ['method' => 'PATCH', 'route' => ['locations.update', $location->id]])}}
		<div class="col-md-4">
			<h2>Ort bearbeiten</h2>
			
				@if ($errors->first('name'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('name', 'Name')}}
					{{ Form::text('name', $location->name, array('class' => 'form-control')) }}
					@if ($errors->first('email'))
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
					@endif
					{{ $errors->first('name', '<span class="help-block">:message</span>') }}
				</div>
				
				@if ($errors->first('long'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('long', 'Longitude')}}
					{{ Form::text('long', $location->long, array('class' => 'form-control')) }}
					@if ($errors->first('long'))
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
					@endif
					{{ $errors->first('long', '<span class="help-block">:message</span>') }}
				</div>
				
				@if ($errors->first('lat'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('lat', 'Latitude')}}
					{{ Form::text('lat', $location->lat, array('class' => 'form-control')) }}
					@if ($errors->first('lat'))
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
					@endif
					{{ $errors->first('lat', '<span class="help-block">:message</span>') }}
				</div>
				
				<button type="submit" class="btn btn-lg btn-block">
						<span class="glyphicon glyphicon-globe"></span>
				</button>
		</div>
		
	{{ Form::close() }}
	</div>
@stop
