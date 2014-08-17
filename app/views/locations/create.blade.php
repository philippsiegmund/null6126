@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
		<h2>Neuen Ort Anlegen</h2>
	
		{{ Form::open(['route' => 'locations.store']) }}
		<div class="col-md-4">
		
			@if ($errors->first('name'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
		
				{{ Form::label('name', 'Name')}}
				{{ Form::text('name', '', array('class' => 'form-control')) }}
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
				{{ Form::text('long', '', array('class' => 'form-control')) }}
			
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
				{{ Form::text('lat', '', array('class' => 'form-control loc-desc')) }}
			
				@if ($errors->first('lat'))
					<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				@endif
				{{ $errors->first('lat', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<div class="col-md-8">
			<div class="form-group loc-desctext">
				{{ Form::label('desc', 'Beschreibung')}}
				{{ Form::textarea('desc', '', array('class' => 'form-control', 'rows' => '8')) }}
			</div>
		</div>
	
		<div class="col-md-4">
			<button type="submit" class="btn btn-lg btn-block">
				<span class="glyphicon glyphicon-globe"></span>
			</button>
		</div>

	{{ Form::close() }}
	</div>
@stop
