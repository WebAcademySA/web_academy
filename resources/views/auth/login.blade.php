<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bienvenidos a Web Academy</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/estilos.css') }}">
</head>

<body>
<header>
    <div class="container"><h1>BIENVENIDOS A WEB-ACADEMY</h1></div>
</header>

<div class="container">
    <section class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6"><img src="{{ asset ('imagenes/12390976-1600x2400.jpg') }}" class="img-responsive img-thumbnail" width="500" height="333"></div>
        <aside>
            <div id="login" class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                <div><img class="col-md-3 escudo" src="{{ asset ('imagenes/escudo.png')}}" class="img-responsive" width="100" height="78"><h2 class="col-md-9 title">Nombre de la institucion</h2></div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<!--<strong>Whoops!</strong> There were some problems with your input.<br><br>-->
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group"><input class="form-control" id="user" type="text" name="usuario" pattern="[A-Za-z]+" placeholder="Usuario" required/></div>
                <div class="form-group"><input class="form-control" id="password" type="password" name="password" pattern="[0-9A-Za-z]+" placeholder="Contraseña" required/></div>
                <input class="btn btn-primary iniciar" type="submit" name="iniciar" value="Iniciar sesión"/>
                </form>
            </div>
        </aside>
    </section>
</div>

<footer>
    <section class="row">
        <div class="col-md-10"><h4>Todos los derechos reservados 2015 © - Alex Salgado - Julio Perez</h4></div>
        <div class="col-md-2"><h5>WEB-ACADEMY</h5></div>
    </section>
</footer>
<script src="{{ asset ('js/jquery.js') }}"></script>
<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
</body>
</html>
