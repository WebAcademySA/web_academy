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
	<div class="container row"><div class="col-md-6"><h3 class="til2">Ingrese ID de busqueda</h3></div><div class="col-md-6"><h3 class="til2">Informacion de la asignatura</h3></div></div><div class="col-md-12"><hr/></div>

<div class="container row">
	<div col-md-6>
    	<form  class="regalum" name="regalumno" method="post" action="">
    <div class="form-inline form-group">
        <div class="celda1 form-group"><select class="form-control" id="idasig" type="text" name="idasig" pattern="[0-9]{1,16}" required><option>ID asignatura *</option><option value="A1">A01</option><option value="A2">A02</option><option value="A3">A03</option></select></div>
    </div>
    	<div><input class="btn btn-primary guardar5" type="submit" name="buscar" value="Buscar"/></div>
		</form>
    </div>
<!--tabla-->
    <div col-md-6>
    	<table class="table table-bordered table-hover borde tabla1">
        	<tr class="info">
            	<th>ID asignatura</th>
                <th>Nombre asignatura</th>
                <th>Grado</th>
                <th>Estado</th>
            </tr>
            <tr>
            	<td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>            
        </table>
        <button class="btn btn-primary boton1" type="submit">Visualizar</button>
    </div>
</div>

@endsection
<!--<body>
</body>
</html>-->
