<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web-Academy</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset ('js/jquery.slides.min.js')}}">
    <link rel="stylesheet" href="{{ asset ('css/fonts.css') }}">
</head>

<body>
<header>
    <div class="container"><div><img class="col-md-1 escudo2 img-responsive" src="imagenes/escudo.png"><h2 class="col-md-4 title2">Nombre de la institucion</h2><div class="col-md-7 web2"><h5 class="titulo2">Web-Academy</h5></div></div></div>
</header>
<!--
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
-->

	@yield('content')
    
<div class="allfooter">
<footer>
	<h6>Todos los derechos reservados 2015 © - Alex Salgado - Julio Perez</h6>
</footer>
</div>

	<!-- Scripts -->
	<script type="text/javascript" href="{{ asset ('js/jquery.js') }}"></script>
	<script type="text/javascript" href="{{ asset ('js/bootstrap.min.js') }}"></script>
</body>
</html>
