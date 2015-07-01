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
    <div class="container row"><div class="col-md-12"><h3 class="til2">Subir Notas</h3></div></div>
    {!! Form::open(['route' => 'visualizar_subirnotas.index' , 'method' => 'GET' , 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
    <div class="form-group">
        @if($errors->any())
            <div class="alert alert-danger alerta3" role="alert">
                <p>Por favor corriga los siguientes Errores</p>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('notice'))
            <div class="alert alert-success alerta3" role="alert">
                <p>{{ Session::get('notice') }}</p>
            </div>
        @endif
    </div>
    <div class="form-group barrabusq4">
        {!! Form::text('nombreasig' , null , ['class' => 'form-control' , 'placeholder' => 'Nombre de la Asignatura']) !!}
        {!! Form::select('grado', ['' => 'Grado' , '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11'] , null , ['class' => 'form-control']) !!}
        {!! Form::select('grupo', ['' => 'Grupo' , '1' => '1', '2' => '2', '3' => '3', '4' => '4'] , null , ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary botonbuscar4">Buscar</button>
    {!! Form::close() !!}
    <table class="table table-striped table-bordered table-hover tabla4">
        <thead>
        <tr class="info">
            <th><div class="celd">Identificacion</div></th>
            <th><div class="celd">Primer Apellido</div></th>
            <th><div class="celd">Segundo Apellido</div></th>
            <th><div class="celd">Primer Nombre</div></th>
            <th><div class="celd">Segundo Nombre</div></th>
            <th><div class="celd">Asignatura</div></th>
            <th><div class="celd">Grado</div></th>
            <th><div class="celd">Grupo</div></th>
            <th><div class="celd">Estado</div></th>
            <th><div class="celd">Accion</div></th>
        </tr>

        </thead>
        <tbody>
        @foreach($notas as $nota)
            <tr>
                <td><div class="celd">{{ $nota->id }}</div></td>
                <td><div class="celd">{{ $nota->primer_apellido }}</div></td>
                <td><div class="celd">{{ $nota->segundo_apellido }}</div></td>
                <td><div class="celd">{{ $nota->primer_nombre }}</div></td>
                <td><div class="celd">{{ $nota->segundo_nombre }}</div></td>
                <td><div class="celd">{{ $nota->nombreasig }}</div></td>
                <td><div class="celd">{{ $nota->grado }}</div></td>
                <td><div class="celd">{{ $nota->grupo }}</td>
                @if(($nota->estado) == 1)
                    <td><div class="celd">Activo</div></td>
                @endif
                @if(($nota->estado) == 0)
                    <td><div class="celd">Inactivo</div></td>
                @endif

                <td>
                    {!! Form::open(['route' => 'subir_notas_docente.edit' , 'method' => 'GET' , 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
                    {!! Form::hidden('idasigfor' , $nota->idasignatura , ['class' => 'form-control']) !!}
                    {!! Form::hidden('idalumfor' , $nota->id , ['class' => 'form-control']) !!}
                    <button type="submit" class="btn btn-primary btn-sm">Subir</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="paginacion6">{!! $notas->appends(Request::only(['idasignatura', 'grado', 'grupo']))->render() !!}</div>


@endsection