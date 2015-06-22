@extends('app')

@section('content')
<div class="barranav">
    <nav class="navbar navbar-default">
        <div class="container-fluid colornav">
            <div class="navbar-header fuera2">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1"></button>
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div class="collapse navbar-collapse letras" id="navbar-1">
                <ul class="nav navbar-nav dentronav">
                    <li><div class="fuera"><a href="inicio_docente" class="letras">Inicio</a></div></li>
                    <li><div class="fuera"><a href="subir_notas_docente" class="letras">Subir Notas</a></div></li>
                    <li><div class="fuera"><a href="horario_docente" class="letras">Mi Horario</a></div></li>
                    <li><div class="fuera"><a href="perfil_docente" class="letras">Mi Perfil</a></div></li>
                    <li><div class="fuera"><a href="#" class="letras">Cerrar Sesion</a></div></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<h3 class="til1">Mi Perfil Docente</h3>
<hr/>
<div class="perfilal">
    <div class="row letraperf">
        <div class="col-md-2 col-md-offset-4"><strong>N. Identificacion:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>Direccion:</strong></div><div class="col-md-1"></div>
    </div>
    <div class="row letraperf">
        <div class="col-md-2 col-md-offset-4"><strong>Nombres:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>Sexo:</strong></div><div class="col-md-1"></div>
    </div>
    <div class="row letraperf">
        <div class="col-md-2 col-md-offset-4"><strong>Apellidos:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>Telefono:</strong></div><div class="col-md-1"></div>
    </div>
    <div class="row letraperf">
        <div class="col-md-2 col-md-offset-4"><strong>Titulo:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>E-mail:</strong></div><div class="col-md-1"></div>
    </div>
    <div class="row letraperf">
        <div class="col-md-2 col-md-offset-4"><strong>Nivel:</strong></div><div class="col-md-1"></div>
    </div>
</div>
@endsection