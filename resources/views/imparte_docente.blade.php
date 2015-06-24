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
    <h3 class="til1">Establecer Asignatura al Docente</h3>
    <hr/>
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
    <form class="regcur" name="regcurso" method="post" action="{{ route('imparte_docente.store') }}">
        <div class="celda form-group"><input class="form-control" id="Grad2" type="text" name="idasigimpartefor" pattern="[0-9]+" placeholder="Identificador de Asignatura *" required/></div>
        <div class="celda form-group"><input class="form-control" id="salo" type="text" name="iddoceimpartefor" pattern="^[0-9]+-[a-Z]+" placeholder="Cedula del Docente *" required/></div>
        <div class="celda form-group"><input class="form-control" id="salo" type="text" name="año" pattern="[0-9]{4}" placeholder="Año *" required/></div><div><input type="hidden" name="_token" value="{{ csrf_token() }}"></div>
        <button class="btn btn-primary iniciar guardar" type="submit"/>Guardar</button>
    </form>

    @endsection

            <!--<body>
</body>
</html>-->
