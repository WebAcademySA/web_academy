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
    <div class="container row"><div class="col-md-12"><h3 class="til2">Lista de Docentes</h3></div></div>
    {!! Form::open(['route' => 'consultar_docente.index' , 'method' => 'GET' , 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
    <div class="form-group">
        @if($errors->any())
            <div class="alert alert-danger alerta9" role="alert">
                <p>Por favor corriga los siguientes Errores</p>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="form-group barrabusq3">
        {!! Form::text('iddocente' , null , ['class' => 'form-control' , 'placeholder' => 'Id. del Docente']) !!}
        {!! Form::select('estado', ['' => 'Estado' , '1' => 'Activo', '0' => 'inactivo'] , null , ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary botonbuscar3">Buscar</button>
    {!! Form::close() !!}
    <table class="table table-striped table-bordered table-hover tabla3">
        <thead>
        <tr class="info">
            <th><div class="celd">Identificacion</div></th>
            <th><div class="celd">Primer Nombre</div></th>
            <th><div class="celd">Segundo Nombre</div></th>
            <th><div class="celd">Primer Apellido</div></th>
            <th><div class="celd">Segundo Apellido</div></th>
            <th><div class="celd">Telefono</div></th>
            <th><div class="celd">Direccion</div></th>
            <th><div class="celd">Nivel</div></th>
            <th><div class="celd">Estado</div></th>
        </tr>

        </thead>
        <tbody>
        @foreach($docente as $docen)
            <tr>
                <td><div class="celd">{{ $docen->iddocente }}</div></td>
                <td><div class="celd">{{ $docen->primer_nombre }}</div></td>
                <td><div class="celd">{{ $docen->segundo_nombre }}</div></td>
                <td><div class="celd">{{ $docen->primer_apellido }}</div></td>
                <td><div class="celd">{{ $docen->segundo_apellido }}</div></td>
                <td><div class="celd">{{ $docen->telefono }}</div></td>
                <td><div class="celd">{{ $docen->direccion }}</div></td>
                <td><div class="celd">{{ $docen->nivel }}</div></td>
                @if(($docen->estado) == 1)
                    <td><div class="celd">Activo</div></td>
                @endif
                @if(($docen->estado) == 0)
                    <td><div class="celd">Inactivo</div></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="paginacion5">{!! $docente->appends(Request::only(['iddocente', 'estado']))->render() !!}</div>


@endsection