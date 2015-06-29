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
<div class="container row"><div><h3 class="til2">Subir Notas</h3></div></div>
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
<div class="container row">
    <form  class="regalum" name="regalumno" method="post" action="{{ route('subir_notas_docente.store') }}">
        <div class="form-inline form-group" >
            <div class="form-group"><input class="form-control" id="Tele2" type="hidden" name="idasigfor" value="{{ $asigna }}" pattern="[0-9]{1,16}" required/></div>
            <div class="form-group"><input class="form-control" id="Nomb2" type="hidden" name="idalumfor" value="{{ $alum }}" pattern="[0-9]{1,16}" required/></div>
        </div>
        <div class="form-inline form-group">
            <div class="form-group"><input class="form-control" id="Nombseg" type="text" name="periodo1" value="{{ null }}" pattern="[0-5]" placeholder="Primer Periodo" /></div>
            <div class="form-group"><input class="form-control" id="primapel" type="text" name="periodo2" value="{{ null }}" pattern="[0-5]" placeholder="Segundo Periodo"/></div>
        </div>
        <div class="form-inline form-group">
            <div class="form-group"><input class="form-control" id="segunapel" type="text" name="periodo3" value="{{ null }}" pattern="[0-5]" placeholder="Tercer Periodo"/></div>
            <div class="form-group"><input class="form-control" id="Dir2" type="text" name="periodo4" value="{{ null }}" pattern="[0-5]" placeholder="Cuarto periodo"/><input type="hidden" name="_token" value="{{ csrf_token() }}"></div>
        </div>

        <button class="btn btn-primary guardar3" type="submit"/>Guardar</button>
    </form>
    <!--Formulario alumno
    {!! Form::open(['route' => ['subir_notas_docente.store'] , 'method' => 'POST' , 'class' => 'regalum']) !!}
    <div class="form-inline form-group">
        <div class="form-group">{!! Form::text('idnotas' , null , ['class' => 'form-control' , 'placeholder' => 'Id. Nota']) !!}</div>
    </div>
    <div class="form-inline form-group">
        <div class="form-group">{!! Form::text('idasigfor' , $asigna , ['class' => 'form-control', 'disabled']) !!}</div>
    </div>
    <div class="form-inline form-group">
        <div class="form-group">{!! Form::text('idalumfor' , $alum , ['class' => 'form-control', 'disabled']) !!}</div>
    </div>
    <div class="form-inline form-group">
        <div class="form-group">{!! Form::text('periodo1' , null , ['class' => 'form-control' , 'placeholder' => 'Calificacion Periodo1']) !!}</div>
    </div>
    <div class="form-inline form-group">
        <div class="form-group">{!! Form::text('periodo2' , null , ['class' => 'form-control' , 'placeholder' => 'Calificacion Periodo2']) !!}</div>
    </div>
    <div class="form-inline form-group">
        <div class="form-group">{!! Form::text('periodo3' , null , ['class' => 'form-control' , 'placeholder' => 'Calificacion Periodo3']) !!}</div>
    </div>
    <div class="form-inline form-group">
        <div class="form-group">{!! Form::text('periodo4' , null , ['class' => 'form-control' , 'placeholder' => 'Calificacion Periodo4']) !!}</div>
    </div>
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary guardar3']) !!}
    {!! Form::close() !!}-->
</div>
@endsection