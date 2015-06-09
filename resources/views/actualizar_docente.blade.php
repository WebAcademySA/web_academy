<!--<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>-->

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
      <li><a href="#"><div class="text">Inicio</div></a></li>
      <div class="drop1"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Asignatura <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="#"><div class="text2">Registrar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Actualizar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Consultar</div></a></li></div>
        </ul>
      </li></div>
      <div class="drop2"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Docente <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="#"><div class="text2">Registrar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Actualizar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Consultar</div></a></li></div>
        </ul>
      </li></div>
      <div class="drop3"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Alumno <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="#"><div class="text2">Registrar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Actualizar</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Consultar</div></a></li></div>
        </ul>
      </li></div>
      <div class="drop4"><li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
          Curso <b class="caret"></b></div>
        </a>
        <ul class="dropdown-menu">
          <div op1><li><a href="#"><div class="text2">Registrar Curso</div></a></li></div>
          <div class="linea"><li class="divider"></li></div>
          <div op1><li><a href="#"><div class="text2">Crear Horario</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Consultar Horario</div></a></li></div>
          <li class="divider"></li>
          <div op1><li><a href="#"><div class="text2">Consultar Curso</div></a></li></div>
        </ul>
      </li></div>
       <li class="drop5"><a href="#"><div class="text">Cerrar Sesion</div></a></li></div>
    </ul>
  </div>
</nav>

<!--Titulos-->
	<div class="container row"><div class="col-md-6"><h3 class="til2">Actualizar Docente</h3></div><div class="col-md-6"><h3 class="til2">Ingrese la nueva informacion</h3></div></div><div class="col-md-12"><hr/></div>
 
<!--Formularios-->
<div class="container row">
<!--Formulario Buscar-->
	<div col-md-6>
    	<form  class="regalum" name="regalumno" method="post" action="">
    <div class="form-inline form-group">
        <div class="celda1 form-group"><select class="form-control" id="iddoc" type="text3" name="iddocente" pattern="[0-9]{1,16}" required><option>ID docente *</option><option value="D1">D01</option><option value="D2">D02</option><option value="D3">D03</option></select></div>
    </div>
    	<div><input class="btn btn-primary guardar7" type="submit" name="buscar" value="Buscar"/></div>
		</form>
    </div>
    
<!--Formulario ingresar datos-->
	<div col-md-6>
    	<form  class="actuadoc" name="regalumno" method="post" action="">
	<div class="form-inline form-group" >
    	<div class="celda1 form-group"><input class="form-control" id="Noid" type="text" name="idasigna" pattern="[0-9]{1,16}" placeholder="No. Identificacion *" required/></div>
    <div class="celda1 form-group"><input class="form-control" id="Dir" type="text" name="direc" pattern="[0-9]{1,16}" placeholder="Direccion *" required/></div>
    </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Nomb" type="text" name="nombre" pattern="[0-9]{1,16}" placeholder="Nombres *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Tel" type="text" name="telefono" pattern="[0-9]{1,16}" placeholder="Telefono " /></div>
        </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Apel" type="text" name="apellido" pattern="[0-9]{1,16}" placeholder="Apellidos *" required/></div>
        <div class="celda1 form-group"><select class="form-control" id="sex" type="text" name="sexo" pattern="[0-9]{1,16}" placeholder="Sexo *" required><option>Sexo *</option><option value="M">Masculino</option><option value="F">Femenino</option></select></div>
    </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="titu" type="text" name="titul" pattern="[0-9]{1,16}" placeholder="Titulo *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="email" type="email" name="email" pattern="[0-9]{1,16}" placeholder="E-mail " /></div>
        </div>
        <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="niv" type="text" name="nivel" pattern="[0-9]{1,16}" placeholder="Nivel *" required/></div>
        <div class="celda1 form-group"><input class="btn btn-primary guardar7" type="submit" name="guardar" value="Guardar"/></div>
        </div>
		</form>
	</div>
</div>

@endsection

<!--<body>
</body>
</html>-->
