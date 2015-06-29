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
    <!--Titulos-->
    <div class="container row"><div class="col-md-12"><h3 class="til2">Lista de Alumnos</h3></div></div>
    {!! Form::open(['route' => 'visualizar_subirnotas.index' , 'method' => 'GET' , 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
    <div class="form-group">
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
    </div>
    <div class="form-group">
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p>{{ Session::get('notice') }}</p>
            </div>
        @endif

        {!! Form::text('nombreasig' , null , ['class' => 'form-control' , 'placeholder' => 'Nombre de la Asignatura']) !!}
        {!! Form::select('grado', ['' => 'Grado' , '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11'] , null , ['class' => 'form-control']) !!}
        {!! Form::select('grupo', ['' => 'Grupo' , '1' => '1', '2' => '2', '3' => '3', '4' => '4'] , null , ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
    {!! Form::close() !!}
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Identificacion</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Asignatura</th>
            <th>Grado</th>
            <th>Grupo</th>
            <th>Estado</th>
            <th>Accion</th>
        </tr>

        </thead>
        <tbody>
        @foreach($notas as $nota)
            <tr>
                <td>{{ $nota->id }}</td>
                <td>{{ $nota->primer_apellido }}</td>
                <td>{{ $nota->segundo_apellido }}</td>
                <td>{{ $nota->primer_nombre }}</td>
                <td>{{ $nota->segundo_nombre }}</td>
                <td>{{ $nota->nombreasig }}</td>
                <td>{{ $nota->grado }}</td>
                <td>{{ $nota->grupo }}</td>
                @if(($nota->estado) == 1)
                    <td>Activo</td>
                @endif
                @if(($nota->estado) == 0)
                    <td>Inactivo</td>
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
    {!! $notas->appends(Request::only(['idasignatura', 'grado', 'grupo']))->render() !!}


@endsection