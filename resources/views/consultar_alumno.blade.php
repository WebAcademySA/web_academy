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
    <div class="container row"><div class="col-md-12"><h3 class="til2">Consultar Alumnos</h3></div></div>
    {!! Form::open(['route' => 'consultar_alumno.index' , 'method' => 'GET' , 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
    <div class="form-group">
        @if(Session::has('notice'))
            <div class="alert alert-info alertaconsultaralum" role="alert">
                <p>{{ Session::get('notice') }}</p>
            </div>
        @endif
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
    </div>
    <div class="form-group barrabusq">
        {!! Form::text('id' , null , ['class' => 'form-control' , 'placeholder' => 'Id. del Alumno']) !!}
        {!! Form::select('estado', ['' => 'Estado' , '1' => 'Activo', '0' => 'inactivo'] , null , ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary botonbuscar">Buscar</button>
    {!! Form::close() !!}
    <table class="table table-striped table-bordered table-hover tabla1">
        <thead>
        <tr class="info">
            <th>Identificacion</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Notas</th>
        </tr>

        </thead>
        <tbody>
        @foreach($alumnoconsul as $alumnocon)
            <tr>
                <td class="celd">{{ $alumnocon->id }}</td>
                <td class="celd">{{ $alumnocon->primer_nombre }}</td>
                <td class="celd">{{ $alumnocon->segundo_nombre }}</td>
                <td class="celd">{{ $alumnocon->primer_apellido }}</td>
                <td class="celd">{{ $alumnocon->segundo_apellido }}</td>
                <td class="celd">{{ $alumnocon->telefono }}</td>
                @if(($alumnocon->estado) == 1)
                    <td class="celd">Activo</td>
                @endif
                @if(($alumnocon->estado) == 0)
                    <td class="celd">Inactivo</td>
                @endif
                {!! Form::open(['route' => 'consultar_notas.index' , 'method' => 'GET' , 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
                {!! Form::hidden('id' , $alumnocon->id , ['class' => 'form-control']) !!}
                <td class="celd"><button type="submit" class="btn btn-primary btn-sm">Notas</button></td>

                {!! Form::close() !!}
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="paginacion4">{!! $alumnoconsul->appends(Request::only(['id', 'estado']))->render() !!}</div>


@endsection