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
                <li><div class="fuera"><a href="#" class="letras">Inicio</a></div></li>
                <li><div class="fuera"><a href="#" class="letras">Mis Notas</a></div></li>
                <li><div class="fuera"><a href="#" class="letras">Mi Horario</a></div></li>
                <li><div class="fuera"><a href="#" class="letras">Mi Perfil</a></div></li>
                <li><div class="fuera"><a href="#" class="letras">Cerrar Sesion</a></div></li>
            </ul>
        </div>
    </div>
</nav>
</div>
<h3 class="til1">Mi Perfil Estudiantil</h3>
<hr/>
<div class="perfilal">
<div class="row letraperf">
    <div class="col-md-2 col-md-offset-4"><strong>N. Identificacion:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>Telefono:</strong></div><div class="col-md-1"></div>
</div>
<div class="row letraperf">
    <div class="col-md-2 col-md-offset-4"><strong>Nombres:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>E-mail:</strong></div><div class="col-md-1"></div>
</div>
<div class="row letraperf">
    <div class="col-md-2 col-md-offset-4"><strong>Apellidos:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>Acudiente:</strong></div><div class="col-md-1"></div>
</div>
<div class="row letraperf">
    <div class="col-md-2 col-md-offset-4"><strong>Direccion:</strong></div><div class="col-md-1"></div><div class="col-md-1"><strong>Parentesco:</strong></div><div class="col-md-1"></div>
</div>
<div class="row letraperf">
    <div class="col-md-2 col-md-offset-4"><strong>Sexo:</strong></div><div class="col-md-1"></div>
</div>
</div>
@endsection
<!--
  <div>N. Identificacion:</div><div></div><div>Telefono:</div><div></div>
    <div>Nombres:</div><div></div><div>E-mail:</div><div></div>
    <div>Apellidos:</div><div></div><div>Acudiente:</div><div></div>
    <div>Direccion:</div><div></div><div>Parentesco:</div><div></div>

    <div class="container table-responsive">
    <table class="table tabla1">
        <tr class="">
            <td><strong>N. Identificacion:</strong></td>
            <td></td>
            <td><strong>Telefono:</strong></td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Nombres:</strong></td>
            <td></td>
            <td><strong>E-mail:</strong></td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Apellidos:</strong></td>
            <td></td>
            <td><strong>Acudiente:</strong></td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Direccion:</strong></td>
            <td></td>
            <td><strong>Parentesco:</strong></td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Sexo:</strong></td>
            <td></td>
        </tr>
    </table>
</div>

-->