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
                                Asignar <b class="caret"></b></div>
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

<!--Titulos-->
	<div class="container row"><div class="col-md-12"><h3 class="til2">Actualizar Alumno</h3></div><hr/></div>
<!--Formulario ingresar datos-->

    	<!--Formulario alumno-->
    <div class="container row">
        <!--Formulario alumno-->
        {!! Form::model($alumno , ['route' => ['actualizar_alumno.update' , $alumno->id] , 'method' => 'PUT' , 'class' => 'regalum3']) !!}
            <div class="form-inline form-group">
                <div class="form-group"><label class="labelsid">ID Alumno:&nbsp</label>{!! Form::text('id' , null , ['class' => 'form-control inputs', 'disabled']) !!}</div>
                <div class="form-group"><label class="labels">Telefono:&nbsp</label>{!! Form::text('telefono' , null , ['class' => 'form-control inputs']) !!}</div>
            </div>
            <div class="form-inline form-group">
                <div class="form-group"><label class="labels2">Primer Nombre:&nbsp</label>{!! Form::text('primer_nombre' , null , ['class' => 'form-control inputs']) !!}</div>
                <div class="form-group"><label class="labels3">Segundo Nombre:&nbsp</label>{!! Form::text('segundo_nombre' , null , ['class' => 'form-control inputs']) !!}</div>
            </div>
            <div class="form-inline form-group">
                <div class="form-group"><label class="labels2">Primer Apellido:&nbsp</label>{!! Form::text('primer_apellido' , null , ['class' => 'form-control inputs']) !!}</div>
                <div class="form-group"><label class="labels3">Segundo Apellido:&nbsp</label>{!! Form::text('segundo_apellido' , null , ['class' => 'form-control inputs']) !!}</div>

            </div>
            <div class="form-inline form-group">
                <div class="form-group"><label class="labelsex">Sexo:&nbsp</label>{!! Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, ['class' => 'form-control inputs']) !!}</div>
                <div class="form-group"><label class="labels1">Direccion:&nbsp</label>{!! Form::text('direccion' , null , ['class' => 'form-control inputs']) !!}</div>

            </div>
            <div class="form-inline form-group">
                <div class="form-group"><label class="labelestado">Estado:&nbsp</label>{!! Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], null, ['class' => 'form-control inputs']) !!}</div>
            </div>
                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary guardaractualizar2']) !!}
            {!! Form::close() !!}
        </div>

@endsection
<!--<body>
</body>
</html>-->
