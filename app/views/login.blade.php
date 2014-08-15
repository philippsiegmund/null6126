@include('layouts.parts.head')
	<div class="container-fluid">
			
		<div class="row login-row">
			@if (Session::get("error"))
					<div class="col-sm-6 col-md-12 error">	
						<h1>{{ Session::get('error') }}</h1>
					</div>
			@endif

			<div class="col-sm-6 col-md-10 col-md-offset-2 headline">
				<span class="glyphicon glyphicon-fire"></span>
				<h1>null6126.de</h1>
			</div>

			<div class="col-sm-6 col-md-4 col-md-offset-2 info">

				<p>
					Wenn Du nicht wei&szlig;t, warum Du hier bist, hast Du dich verlaufen!
				</p>
				<p>
					null6126.de ist ein privater Dienst, der einem geschlossenen Personenkreis Zugriff auf gemeinsame Fotos und anderen Quatsch gibt.
				</p>
				<a>verlaufen@null6126.de</a>
			</div>

			<div class="col-sm-6 col-md-4">
				<div class="box">

					{{ Form::open(['route' => 'sessions.store', 'class' => 'form-signin']) }}

					{{ Form::email('email', '', ['class' => 'form-control']) }}
					{{ Form::password('password', ['class' => 'form-control']) }}

					<button type="submit" class="btn btn-lg btn-block">
						<span class="glyphicon glyphicon-ok"></span>
					</button>

					{{ Form::close() }}
				</div>
			</div>
		</div>
		
	</div>
@include('layouts.parts.footer')