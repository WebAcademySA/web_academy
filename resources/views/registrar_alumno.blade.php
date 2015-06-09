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
<div class="container row"><div class="col-md-6"><h3 class="til2">Registrar alumno</h3></div><div class="col-md-6"><h3 class="til3">Datos del acudiente</h3></div></div><div class="col-md-12"><hr/></div>

<!--Formularios-->
<div class="container row">
<!--Formulario alumno-->
	<div col-md-6>
    	<form  class="regalum" name="regalumno" method="post" action="">
	<div class="form-inline form-group" >
    	<div class="celda1 form-group"><input class="form-control" id="Noid2" type="text" name="idasigna2" pattern="[0-9]{1,16}" placeholder="No. Identificacion *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Tele2" type="text" name="telfono2" pattern="[0-9]{1,16}" placeholder="Telefono " /></div>
    </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Nomb2" type="text" name="nombre2" pattern="[0-9]{1,16}" placeholder="Nombres *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Email2" type="email" name="email2" pattern="[0-9]{1,16}" placeholder="E-mail " /></div>
        </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Apel2" type="text" name="apellido2" pattern="[0-9]{1,16}" placeholder="Apellidos *" required/></div>
        <div class="celda1 form-group"><select class="form-control" id="Grad" type="text2" name="grado" pattern="[0-9]{1,16}" required><option>Grado *</option><option>--Primaria--</option><option value="1">Primero</option><option value="2">Segundo</option><option value="3">Tercero</option><option value="4">Cuarto</option><option value="5">Quinto</option><option>--Secundaria--</option><option value="6">Sexto</option><option value="7">Septimo</option><option value="8">Octavo</option><option value="9">Noveno</option><option value="10">Decimo</option><option value="11">Undecimo</option></select></div>
    </div>
    <div class="form-inline form-group" >
    	<div class="celda1 form-group"><select class="form-control" id="sex2" type="text" name="sexo2" pattern="[0-9]{1,16}" required><option>Sexo *</option><option value="M">Masculino</option><option value="F">Femenino</option></select></div>
        <div class="celda1 form-group"><input class="form-control" id="Dir2" type="text" name="direc2" pattern="[0-9]{1,16}" placeholder="Direccion *" required /></div>
    </div>
		</form>
    </div>
    
<!--Formulario acudiente-->
	<div col-md-6>
    	<form  class="regalum2" name="regalumno" method="post" action="">
	<div class="form-inline form-group" >
    	<div class="celda1 form-group"><input class="form-control" id="Noid3" type="text" name="idasigna" pattern="[0-9]{1,16}" placeholder="No. Identificacion *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Dir3" type="text" name="direc3" pattern="[0-9]{1,16}" placeholder="Direccion *" required /></div>
    </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Nomb3" type="text" name="nombre3" pattern="[0-9]{1,16}" placeholder="Nombres *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Tele2" type="text" name="telfono2" pattern="[0-9]{1,16}" placeholder="Telefono " /></div>
        </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Apel2" type="text" name="apellido2" pattern="[0-9]{1,16}" placeholder="Apellidos *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Email2" type="email" name="email2" pattern="[0-9]{1,16}" placeholder="E-mail " /></div>
    </div>
    <div class="form-inline form-group" >
    	<div class="celda1 form-group"><select class="form-control" id="sex3" type="text" name="sexo3" pattern="[0-9]{1,16}" required><option>Sexo *</option><option value="M">Masculino</option><option value="F">Femenino</option></select></div>
        <div class="celda1 form-group"><input class="form-control" id="Dir2" type="text" name="direc2" pattern="[0-9]{1,16}" placeholder="Parentesco *" required /></div>
    </div>
		</form>
        <div><input class="btn btn-primary guardar3" type="submit" name="guardar" value="Guardar"/></div>
	</div>
</div>
@endsection

<!--<body>
</body>
</html>-->
