<div class="col-md-3 sidebar grey-bg">
	<div class="col-md-12 avatar">
		<div class="img-circular" style="background-image: url({{ URL::asset('img/avatars/light_on_dark/avatar_male_light_on_dark_96x96.png'); }})"></div>
	</div>
	
	<h2>Fotos</h2>
	<ul>
		<li><a>Die neusten Fotos</a></li>
		<li>{{ HTML::linkRoute('upload', 'Fotos hochladen') }}</li>
	</ul>
	
	<h2>Abenteuer</h2>
	<ul>
		<li>Alle Abenteuer anzeigen</li>
		<li>Neues Abenteuer starten</li>

	</ul>
	
	<h2>Orte</h2>
	<ul>
		<li>{{ HTML::linkRoute('locations.index', 'Alle Orte anzeigen') }}</li>
		<li>{{ HTML::linkRoute('locations.create', 'Neuen Ort hinzuf&uuml;gen') }}</li>
	</ul>

	<h2>Admin</h2>
	<ul>
		<li>{{ HTML::linkRoute('users.index', 'Benutzer') }}</li>
		<li>{{ HTML::linkRoute('users.create', 'Benutzer hinzuf&uuml;gen') }}</li>
		<li><a>Einstellungen</a></li>
	</ul>

</div>