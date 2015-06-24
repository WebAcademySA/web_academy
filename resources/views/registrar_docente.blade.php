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
                <li><a href="{{ route('inicio_admin.index') }}"><div class="text">Inicio</div></a></li>
                <div class="drop1"><li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
                                Asignatura <b class="caret"></b></div>
                        </a>
                        <ul class="dropdown-menu">
                            <div op1><li><a href="{{ route('registrar_asignatura.index') }}"><div class="text2">Registrar</div></a></li></div>
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
                            <div op1><li><a href="{{ route('registrar_docente.index') }}"><div class="text2">Registrar</div></a></li></div>
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
                            <div op1><li><a href="{{ route('registrar_alumno.index') }}"><div class="text2">Registrar</div></a></li></div>
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
                            <div op1><li><a href=""><div class="text2">Registrar Curso</div></a></li></div>
                            <div class="linea"><li class="divider"></li></div>
                            <div op1><li><a href=""><div class="text2">Matricular Alumno</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="{{ route('imparte_docente.index') }}"><div class="text2">Asignar Docente</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="{{ route('inscribir_asignatura.index') }}"><div class="text2">Inscribir Clase</div></a></li></div>
                        </ul>
                    </li></div>
                <li class="drop5"><a href="#"><div class="text">Cerrar Sesion</div></a></li></div>
        </ul>
        </div>
    </nav>


<h3 class="til1">Registrar docente</h3>
@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <p>Por favor corriga los siguientes Errores</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('notice'))
    <div class="alert alert-success" role="alert">
        <p>{{ Session::get('notice') }}</p>
    </div>
@endif

<hr/>
<form  class="regdocen" name="regdoc" method="post" action="{{ route('registrar_docente.store') }}">
	<div class="form-inline form-group" >
    	<div class="celda1 form-group"><input class="form-control" id="Noid" type="text" name="iddocente" pattern="[0-9]{1,16}" placeholder="No. Identificacion *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Dir" type="text" name="direccion" pattern="[A-Za-z]+" placeholder="Direccion *" required/></div>
    </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Nomb" type="text" name="primer_nombre" pattern="[A-Za-z]+" placeholder="Primer Nombre *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="Tel" type="text" name="segundo_nombre" pattern="[A-Za-z]+" placeholder="Segundo Nombre *" /></div>
        </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="Apel" type="text" name="primer_apellido" pattern="[A-Za-z]+" placeholder="Primer Apellido *" required/></div>
       <div class="celda1 form-group"><input class="form-control" id="Apel" type="text" name="segundo_apellido" pattern="[A-Za-z]+" placeholder="Segundo Apellido *" required/></div> 
    </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="titu" type="text" name="titulo" pattern="[A-Za-z]+" placeholder="Titulo *" required/></div>
        <div class="celda1 form-group"><input class="form-control" id="email" type="email" name="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="E-mail " /></div>
        </div>
     <div class="form-inline form-group">
    	<div class="celda1 form-group"><input class="form-control" id="niv" type="text" name="nivel" pattern="[A-Za-z0-9]+" placeholder="Nivel *" required/></div>
      <div class="celda1 form-group"><select class="form-control" id="sex" type="text" name="sexo" pattern="[A-Za-z]+" placeholder="Sexo *" required><option>Sexo *</option><option value="M">Masculino</option><option value="F">Femenino</option></select></div><input type="hidden" name="_token" value="{{ csrf_token() }}"></div>
        </div>
    <div class="form-inline form-group">
        <div class="celda1 form-group"><input class="form-control" id="niv" type="text" name="telefono" pattern="[0-9]+" placeholder="Telefono *" required/></div>

    </div>
        <button class="btn btn-primary guardar2" type="submit"/>Guardar</button>

</form>
@endsection
<!--<body>
</body>
</html>-->

