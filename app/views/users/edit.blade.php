@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
	{{ Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]])}}
		<div class="col-md-4">
			<h2>Edit user</h2>
			
				@if ($errors->first('email'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('email', 'E-Mail')}}
					{{ Form::email('email', $user->email, array('class' => 'form-control')) }}
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
					{{ Form::text('username', $user->username, array('class' => 'form-control')) }}
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
		
		<div class="col-md-4">
			<h2>Settings</h2>
			
				<div class="form-group">
	        			{{ Form::checkbox('admin', 1, null, ['class' => 'field']) }}
	        			{{ Form::label('admin', 'Administrator')}}
	      		</div>
					
				<div class="form-group">
	        			{{ Form::checkbox('pwchange', 1, null, ['class' => 'field']) }}
	        			{{ Form::label('pwchange', 'Password &auml;ndern')}}
	      		</div>
					
				
			
		</div>
	{{ Form::close() }}
	</div>
@stop
