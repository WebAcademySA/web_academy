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
                            <div op1><li><a href="{{ route('registrar_curso.index') }}"><div class="text2">Registrar Curso</div></a></li></div>
                            <div class="linea"><li class="divider"></li></div>
                            <div op1><li><a href="{{ route('matricular_alumno.index') }}"><div class="text2">Matricular Alumno</div></a></li></div>
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


<h3 class="til1">Registrar Horario</h3>
<hr/>
<form  class="reghorario" name="regihorario" method="post" action="">
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><select class="form-control" id="Grad3" type="text2" name="grado3" pattern="[0-9]{1,16}" required><option>Grado *</option><option>--Primaria--</option><option value="1">Primero</option><option value="2">Segundo</option><option value="3">Tercero</option><option value="4">Cuarto</option><option value="5">Quinto</option><option>--Secundaria--</option><option value="6">Sexto</option><option value="7">Septimo</option><option value="8">Octavo</option><option value="9">Noveno</option><option value="10">Decimo</option><option value="11">Undecimo</option></select></div>
        <div class="celda1 form-group"><input class="form-control" id="horainicio" type="text" name="horaini" pattern="[0-9]{1,16}" placeholder="Hora inicio *"  required/></div>
        </div>
    <div class="form-inline form-group">
    	<div class="celda1 form-group"><select class="form-control" id="iddoc" type="text3" name="iddocente" pattern="[0-9]{1,16}" required><option>ID docente *</option><option value="D1">D01</option><option value="D2">D02</option><option value="D3">D03</option></select></div>
        <div class="celda1 form-group"><input class="form-control" id="horafinal" type="text" name="horfinal" pattern="[0-9]{1,16}" placeholder="Hora Final * " required/></div>
        </div>
     <div class="form-inline form-group">
    	<div class="celda1 form-group"><select class="form-control" id="idasig" type="text4" name="idasig" pattern="[0-9]{1,16}" required><option>ID asignatura *</option><option value="A1">A01</option><option value="A2">A02</option><option value="A3">A03</option></select></div>
        <div class="celda1 form-group"><input class="btn btn-primary guardar2" type="submit" name="guardar" value="Guardar"/></div>
        </div>
</form>

@endsection
<!--<body>
</body>
</html>-->
