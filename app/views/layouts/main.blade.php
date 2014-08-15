@include('layouts.parts.head')
	<div class="container-fluid">
		
		<div class="row">
			@include('layouts.parts.header')
		</div>
		
		<div class="row content-row">
			@yield('content')
		</div>
@include('layouts.parts.footer')
