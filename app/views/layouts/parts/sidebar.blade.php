<div class="col-md-3 sidebar grey-bg">

	<h2>Fotos</h2>
	<ul>
		<li><a>Die neusten Fotos</a></li>
		<li>{{ HTML::linkRoute('upload', 'Fotos hochladen') }}</li>
	</ul>
	
	<h2>Events</h2>
	<ul>
		<li><a>Alle anzeigen</a></li>
		<li><a>Neues Event erstellen</a></li>
	</ul>
	
	<h2>Orte</h2>
	<ul>
		<li>{{ HTML::linkRoute('locations.index', 'Alle Orte anzeigen') }}</li>
		<li>{{ HTML::linkRoute('locations.create', 'Neuen Ort hinzuf&uuml;gen') }}</li>
	</ul>
	
	<h2>Profile</h2>
	<ul>
		<li><a>Meine Fotos</a></li>
		<li><a>Meine Events</a></li>
		<li><a>Einstellungen</a></li>
		<li>{{ HTML::linkRoute('logout', 'Logout') }}</li>
	</ul>

	<h2>Admin</h2>
	<ul>
		<li>{{ HTML::linkRoute('users.index', 'Benutzer') }}</li>
		<li><a>Einstellungen</a></li>
	</ul>

</div>