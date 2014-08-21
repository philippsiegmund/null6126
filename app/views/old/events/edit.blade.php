@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
	{{ Form::model($event, ['method' => 'PATCH', 'route' => ['events.update', $event->id]])}}
		<div class="col-md-4">
			<h2>Ort bearbeiten</h2>
			
				@if ($errors->first('name'))
					<div class="form-group has-error has-feedback">
				@else
					<div class="form-group">
				@endif
					{{ Form::label('name', 'Name')}}
					{{ Form::text('name', $event->name, array('class' => 'form-control')) }}
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
					{{ Form::label('start', 'Longitude')}}
					{{ Form::text('start', $event->start, array('class' => 'form-control')) }}
					@if ($errors->first('long'))
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
					{{ Form::text('end', $event->end, array('class' => 'form-control')) }}
					@if ($errors->first('end'))
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
					@endif
					{{ $errors->first('end', '<span class="help-block">:message</span>') }}
				</div>
				
				<button type="submit" class="btn btn-lg btn-block">
						<span class="glyphicon glyphicon-globe"></span>
				</button>
		</div>
		
	{{ Form::close() }}
	</div>
@stop
