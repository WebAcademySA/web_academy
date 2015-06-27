<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Academy</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos2.css') }}">
    <!--<link rel="stylesheet" href="../../public/js/jquery.slides.min.js">-->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

</head>

<body>
<header>
    <div class="container"><div><img class="img-responsive col-sm-4 col-md-1 escudo2" src="{{ asset('imagenes/escudo.png') }}"><h2 class="col-xs-12 col-sm-8 col-md-4 title2">Nombre de la institucion</h2><div class="col-md-7 web2"><h5 class="titulo2">Web-Academy</h5></div></div></div>
</header>



@yield('content')

<div class="allfooter">
    <footer>
        <h6>Todos los derechos reservados 2015 © - Alex Salgado - Julio Perez</h6>
    </footer>
</div>


<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.slides.js') }}"></script>
<script src="{{ asset('js/slide.js') }}"></script>

</body>
</html>