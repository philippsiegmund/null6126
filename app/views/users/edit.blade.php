@extends('layouts.main')
@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
	{{ Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id], 'enctype' => 'multipart/form-data', 'files' => true])}}
		<h2>Abenteurer bearbeiten</h2>
		<div class="col-md-8">
			<?php
				$public = public_path();
				var_dump($public);
				
			?>
			
			<div class="img-circular-create" style="background-image: url({{ url('/uploads/' . $user->username . '/' .$user->avatar) }})"></div>
			<div class="form-group">
				{{ Form::file('avatar', ['id' => 'avatar-upload'])}}
			</div>	
			
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
					{{ $errors->first('email', '<span class="help-block">:message</span>') }}
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
								
				<div class="form-group">
					{{ Form::label('first_name', 'Vorname')}}
					{{ Form::text('first_name', $user->first_name, array('class' => 'form-control')) }}
				</div>
				
				<div class="form-group">
					{{ Form::label('last_name', 'Nachname')}}
					{{ Form::text('last_name', $user->last_name, array('class' => 'form-control')) }}
				</div>
				
				<button type="submit" class="btn btn-lg btn-block">
						<span class="glyphicon glyphicon-floppy-disk"></span>
				</button>

		</div>
		
		<div class="col-md-4">
			<h2>Gruppen</h2>
			<div class="form-group">
					{{ Form::checkbox('is_admin') }}
					{{ Form::label('&nbsp;Administrator')}}
			</div>
			
			<h2>Permissions</h2>
			<div class="form-group">
					{{ Form::checkbox('is_activated') }}
					{{ Form::label('&nbsp;Aktiviert')}}
			</div>
		</div>		
		
	{{ Form::close() }}
	</div>	
@stop