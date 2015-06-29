<!--<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>menu</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <!--<link rel="stylesheet" href="../../public/js/jquery.slides.min.js">
    <link rel="stylesheet" href="css/fonts.css">

</head>

<body>
<header>
    <div class="container"><div><img class="img-responsive col-sm-4 col-md-1 escudo2" src="imagenes/escudo.png"><h2 class="col-xs-12 col-sm-8 col-md-4 title2">Nombre de la institucion</h2><div class="col-md-7 web2"><h5 class="titulo2">Web-Academy</h5></div></div></div>
</header>-->

@extends('app2')

@section('content')
<nav class="navbar navbar-default nav_barra" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse alinav">
    <ul class="nav navbar-nav">
      <li><a href="{{ route('inicio_admin.index') }}"><div class="text">Inicio</div></a></li>
      <div class="drop1"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Asignatura <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="{{ route('registrar_asignatura.index') }}"><div class="text2">Registrar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="{{ route('visualizar_asignatura.index') }}"><div class="text2">Actualizar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="{{ route('consultar_asignatura.index') }}"><div class="text2">Consultar</div></a></li></div>

        </ul>
      </li></div>
      <div class="drop2"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Docente <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="{{ route('registrar_docente.index') }}"><div class="text2">Registrar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="{{ route('visualizar_docente.index') }}"><div class="text2">Actualizar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="{{ route('consultar_docente.index') }}"><div class="text2">Consultar</div></a></li></div>
        </ul>
      </li></div>
      <div class="drop3"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Alumno <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="{{ route('registrar_alumno.index') }}"><div class="text2">Registrar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="{{ route('visualizar_alumno.index') }}"><div class="text2">Actualizar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="{{ route('consultar_alumno.index') }}"><div class="text2">Consultar</div></a></li></div>
        </ul>
      </li></div>
      <div class="drop4"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Curso <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="{{ route('imparte_docente.index') }}"><div class="text2">Asignar Docente</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="{{ route('visualizar_subirnotas.index') }}"><div class="text2">Subir Notas</div></a></li></div>
        </ul>
      </li></div>
       <li class="drop5"><a href="{{ url('/auth/logout') }}"><div class="text">Cerrar Sesion</div></a></li></div>
    </ul>
  </div>
</nav>


<section class="container centro">
    <div class="row">
        <!--Slideshow--><div class="main col-xs-12 col-sm-8 col-md-7 col-lg-7">
            <div class="slides">
                <img src="imagenes/64_alumnos_SM_postulan_al_Colegio_Presidente_del_Per.jpg" height="300">
                <img src="imagenes/000280330W.jpg">
                <img src="imagenes/colegios.jpg">
                <img src="imagenes/IMG_7713.jpg" height="350">
            </div>
        </div>
        <!--Contactenos--><div class="aside2 col-xs-12 col-sm-4 col-md-5 col-lg-5">
            <h3 class="tilaside">Contactenos</h3>
            <article>
                <p class="texto">Para cualquier duda o sugerencia con respecto a la plataforma contactenos a:</p>
                <div class="iconos">
                    <a href="#" target="_blank" class="col-md-3"><img src="imagenes/Facebook_logo_64 (1).png" width="44" height="44"></a>
                    <a href="#" target="_blank" class="col-md-3"><img src="imagenes/Social_google_plus_square_button_64.png" width="44" height="44"></a>
                    <a href="#" target="_blank" class="col-md-3"><img src="imagenes/Twitter_logo_on_black_background_64.png" width="44" height="44"></a>
                </div>
            </article>
        </div>
    </div>
</section>


@endsection
<!--
<div class="allfooter">
    <footer>
        <h6>Todos los derechos reservados 2015 © - Alex Salgado - Julio Perez</h6>
    </footer>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.slides.js"></script>
<script src="js/slide.js"></script>

</body>
</html>
-->
