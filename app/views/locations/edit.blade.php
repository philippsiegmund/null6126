@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
	
		<h2>Neuen Ort Anlegen</h2>
		
		<div class="col-md-8">			
			<div class="img-circular-create" style="background-image: url({{ URL::asset('img/location-img.jpg'); }})"></div>	
		</div>
		
		<div class="col-md-4">
			<div class="col-md-12 create-help">
				Einfach Suchen und so..
			</div>
		</div>
		
	{{ Form::open(['route' => 'locations.locate', 'method' => 'POST', 'id' => 'ajax-location-search']) }}

		<div class="col-md-8">
			@if ($errors->first('search'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
				{{ Form::label('search', 'Ort finden')}}
				{{ Form::textarea('search', '', array('class' => 'form-control', 'rows' => '2', 'id' => 'ajax-location-input')) }}
			</div>
		</div>
		
		<div class="col-md-4">
			<button id="locate-form-button" type="submit" class="btn btn-lg btn-block">
				<span class="glyphicon glyphicon-globe"></span>
			</button>
		</div>
	
	{{ Form::close() }}
		
		<div class="col-md-12">
			<hr />
		</div>
		
		
	{{ Form::open(['route' => 'locations.update', 'method' => 'POST']) }}
		<div class="col-md-8">
			@if ($errors->first('name'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
			
			{{ Form::label('name', 'Name')}}
			{{ Form::text('name', '', array('class' => 'form-control')) }}
			
			@if ($errors->first('name'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			@endif
			{{ $errors->first('name', '<span class="help-block">:message</span>') }}
			</div>
		
		
			@if ($errors->first('street'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
		
			{{ Form::label('street', 'Strasse')}}
			{{ Form::text('street', '', array('class' => 'form-control', 'id' => 'location-street')) }}
			@if ($errors->first('street'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			@endif
			{{ $errors->first('street', '<span class="help-block">:message</span>') }}
			</div>
		
			
	
			@if ($errors->first('no'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
				{{ Form::label('num', 'Nummer')}}
				{{ Form::text('num', '', array('class' => 'form-control', 'id' => 'location-num')) }}
			@if ($errors->first('num'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			@endif
			{{ $errors->first('num', '<span class="help-block">:message</span>') }}
			</div>
				
				
			@if ($errors->first('zip'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
				{{ Form::label('zip', 'PLZ')}}
				{{ Form::text('zip', '', array('class' => 'form-control', 'id' => 'location-zip')) }}
			@if ($errors->first('zip'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			@endif
				{{ $errors->first('zip', '<span class="help-block">:message</span>') }}
			</div>
			
				

			@if ($errors->first('city'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
				{{ Form::label('city', 'Stadt')}}
				{{ Form::text('city', '', array('class' => 'form-control', 'id' => 'location-city')) }}
			@if ($errors->first('city'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			@endif
			{{ $errors->first('city', '<span class="help-block">:message</span>') }}
			</div>

			

			@if ($errors->first('Land'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
				{{ Form::label('country', 'Land')}}
				{{ Form::text('country', '', array('class' => 'form-control', 'id' => 'location-country')) }}
			@if ($errors->first('country'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			@endif
			{{ $errors->first('country', '<span class="help-block">:message</span>') }}
			</div>

		</div>
		
		<div class="col-md-4" id="leaf-located">
			
		</div>
		
		<div class="col-md-12">
			<hr />
		</div>
		
		<div class="col-md-4">			
			@if ($errors->first('lon'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
			
				{{ Form::label('lon', 'Longitude')}}
				{{ Form::text('lon', '', array('class' => 'form-control', 'id' => 'location-lon')) }}
			
				@if ($errors->first('lon'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				@endif
				{{ $errors->first('lon', '<span class="help-block">:message</span>') }}
			</div>
		</div>
		
		<div class="col-md-4">
			@if ($errors->first('lat'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
			
				{{ Form::label('lat', 'Latitude')}}
				{{ Form::text('lat', '', array('class' => 'form-control', 'id' => 'location-lat')) }}
			
				@if ($errors->first('lat'))
					<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				@endif
				{{ $errors->first('lat', '<span class="help-block">:message</span>') }}
			</div>
		</div>			

		<div class="col-md-12">
			<hr />
		</div>				

		<div class="col-md-8">
			<button type="submit" class="btn btn-lg btn-block">
				<span class="glyphicon glyphicon-floppy-disk"></span>
			</button>
		</div>

	{{ Form::close() }}
	</div>
@stop
