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
                            <div op1><li><a href="registrar_asignatura"><div class="text2">Registrar</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="actualizar_asignatura"><div class="text2">Actualizar</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="consultar_asignatura"><div class="text2">Consultar</div></a></li></div>
                        </ul>
                    </li></div>
                <div class="drop2"><li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
                                Docente <b class="caret"></b></div>
                        </a>
                        <ul class="dropdown-menu">
                            <div op1><li><a href="registrar_docente"><div class="text2">Registrar</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="actualizar_docente"><div class="text2">Actualizar</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="consultar_docente"><div class="text2">Consultar</div></a></li></div>
                        </ul>
                    </li></div>
                <div class="drop3"><li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
                                Alumno <b class="caret"></b></div>
                        </a>
                        <ul class="dropdown-menu">
                            <div op1><li><a href="registrar_alumno"><div class="text2">Registrar</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="actualizar_alumno"><div class="text2">Actualizar</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="consultar_alumno"><div class="text2">Consultar</div></a></li></div>
                        </ul>
                    </li></div>
                <div class="drop4"><li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="text">
                                Curso <b class="caret"></b></div>
                        </a>
                        <ul class="dropdown-menu">
                            <div op1><li><a href="registrar_curso"><div class="text2">Registrar Curso</div></a></li></div>
                            <div class="linea"><li class="divider"></li></div>
                            <div op1><li><a href="registrar_horario"><div class="text2">Crear Horario</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="consultar_horario"><div class="text2">Consultar Horario</div></a></li></div>
                            <li class="divider"></li>
                            <div op1><li><a href="consultar_curso"><div class="text2">Consultar Curso</div></a></li></div>
                        </ul>
                    </li></div>
                <li class="drop5"><a href="#"><div class="text">Cerrar Sesion</div></a></li></div>
        </ul>
        </div>
    </nav>

    <!--Titulos-->
    <div class="container row"><div class="col-md-12"><h3 class="til2">Lista de Alumnos</h3></div></div>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Identificacion</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>

            </thead>
            <tbody>
            @foreach($alumno as $alumn)
                <tr>
                    <td>{{ $alumn->id }}</td>
                    <td>{{ $alumn->primer_nombre }}</td>
                    <td>{{ $alumn->segundo_nombre }}</td>
                    <td>{{ $alumn->primer_apellido }}</td>
                    <td>{{ $alumn->segundo_apellido }}</td>
                    <td>{{ $alumn->telefono }}</td>
                    <td>{{ $alumn->estado }}</td>
                    <td> <a href="/web_academy/public/actualizar_alumno/{{$alumn->id}}/edit" class="btn btn-primary btn-sm">Actualizar</a> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $alumno->render() !!}


@endsection