<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	
	<body>
	<div class="container">

		<div class="row login-row">

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
	<footer>

	</footer>
	</div> <!-- /container -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')
	</script>

	<script src="js/vendor/bootstrap.min.js"></script>

	<script src="js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		( function(b, o, i, l, e, r) {
				b.GoogleAnalyticsObject = l;
				b[l] || (b[l] = function() {
					(b[l].q = b[l].q || []).push(arguments)
				});
				b[l].l = +new Date;
				e = o.createElement(i);
				r = o.getElementsByTagName(i)[0];
				e.src = '//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e, r)
			}(window, document, 'script', 'ga'));
		ga('create', 'UA-XXXXX-X');
		ga('send', 'pageview');
	</script>
	</body>
</html>
