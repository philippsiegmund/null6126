@extends('layouts.main')

@section('content')
	@include('layouts.parts.sidebar')

	<div class="col-md-9">
		<div class="col-md-12">
			<h2>Event</h2>
		</div>
		
		<div class="col-md-6">
			<h2>Bilder hochladen</h2>
			<form action="" enctype="multipart/form-data">
				<input id="fileupload" type="file" name="image[]" multiple=""/>
				
				<button type="submit" class="btn btn-lg btn-block">
					<span class="glyphicon glyphicon-cloud-upload"></span>
				</button>
				
			</form>
		</div>
		
		<script>
			var form = document.querySelector('form');
			var request = new XMLHttpRequest();
			
			form.addEventListener('submit', function(e){
				e.preventDefault();
				
				var formdata = new FormData(form);
				request.open('post', 'uploadimages');
				request.send(formdata);
				
			}, false);
			
		</script>
		
		<div class="col-md-6">
			<h2>ZIP hochladen</h2>
			<form action="" enctype="multipart/form-data">
				<input id="zipupload" type="file" name="image[]" multiple=""/>
				
				<button type="submit" class="btn btn-lg btn-block">
					<span class="glyphicon glyphicon-cloud-upload"></span>
				</button>
				
			</form>
		</div>
		
		<script>
			var form = document.querySelector('form');
			var request = new XMLHttpRequest();
			
			form.addEventListener('submit', function(e){
				e.preventDefault();
				
				var formdata = new FormData(form);
				request.open('post', 'uploadimages');
				request.send(formdata);
				
			}, false);
			
		</script>		
	</div>
@stop
