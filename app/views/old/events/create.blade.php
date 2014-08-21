@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
		<h2>Neues Ereignis Anlegen</h2>
	
		{{ Form::open(['route' => 'events.store']) }}
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
				
			@if ($errors->first('start'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
			
				{{ Form::label('start', 'Start')}}
				{{ Form::text('start', '', array('class' => 'form-control')) }}
			
				@if ($errors->first('start'))
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				@endif
				{{ $errors->first('start', '<span class="help-block">:message</span>') }}
			</div>
				
			@if ($errors->first('end'))
			<div class="form-group has-error has-feedback">
			@else
			<div class="form-group">
			@endif
			
				{{ Form::label('end', 'Ende')}}
				{{ Form::text('end', '', array('class' => 'form-control loc-desc')) }}
			
				@if ($errors->first('end'))
					<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				@endif
				{{ $errors->first('end', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<div class="col-md-8">
			<div class="form-group loc-desctext">
				
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
