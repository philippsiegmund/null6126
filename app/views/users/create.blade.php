@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
	{{ Form::open(['route' => 'users.store', 'files' => true]) }}
		<div class="col-md-4">
			<h2>Create new user</h2>
			
				@if ($errors->first('email'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('email', 'E-Mail')}}
					{{ Form::email('email', '', array('class' => 'form-control')) }}
					@if ($errors->first('email'))
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
					@endif
					{{ $errors->first('email', '<span class="help-block">:message</span>') }}
				</div>
				
				@if ($errors->first('username'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('username', 'Username')}}
					{{ Form::text('username', '', array('class' => 'form-control')) }}
					@if ($errors->first('username'))
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
					@endif
					{{ $errors->first('username', '<span class="help-block">:message</span>') }}
				</div>
				
				@if ($errors->first('password'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('password', 'Password')}}
					{{ Form::password('password', array('class' => 'form-control')) }}
					@if ($errors->first('password'))
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
					@endif
					{{ $errors->first('password', '<span class="help-block">:message</span>') }}
				</div>
				
				<button type="submit" class="btn btn-lg btn-block">
						<span class="glyphicon glyphicon-floppy-disk"></span>
				</button>
		</div>
		
		<div class="col-md-4 create-avatar">
			<div class="img-circular" style="background-image: url({{ URL::asset('img/avatars/light_on_dark/avatar_male_light_on_dark_96x96.png'); }})"></div>
			<div class="form-group">
				{{ Form::file('Image', ['id' => 'avatar-upload'])}}
			</div>	
			
		</div>
	{{ Form::close() }}
	</div>	
@stop
