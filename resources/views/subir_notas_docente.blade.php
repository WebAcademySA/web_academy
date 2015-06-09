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
                    <li><div class="fuera"><a href="#" class="letras">Subir Notas</a></div></li>
                    <li><div class="fuera"><a href="#" class="letras">Mi Horario</a></div></li>
                    <li><div class="fuera"><a href="#" class="letras">Mi Perfil</a></div></li>
                    <li><div class="fuera"><a href="#" class="letras">Cerrar Sesion</a></div></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!--Titulos-->
<div class="container row"><div class="col-md-6"><h3 class="til2">Subir Notas</h3></div><div class="col-md-6"><h3 class="til2">Informacion de la asignatura</h3></div></div><div class="col-md-12"><hr/></div>

<div class="container row">
    <div>
        <form  class="regalum" name="regalumno" method="post" action="">
            <div class="form-inline form-group">
                <div class="celda1 form-group"><select class="form-control" id="idasig" type="text" name="idasig" pattern="[0-9]{1,16}" required><option>Grado *</option><option value="A1">1-A</option><option value="A2">1-B</option><option value="A3">1-C</option></select></div>
            </div>
            <div><input class="btn btn-primary guardar6" type="submit" name="buscar" value="Buscar"/></div>
        </form>
    </div>
    <!--tabla-->
    <div>
        <div class="row">
        <table class="table table-bordered borde tabla1">
            <tr class="info">
                <th><strong>Nro.</strong></th>
                <th><strong>Apellidos del estudiante</strong></th>
                <th><strong>Nombres del estudiante</strong></th>
                <th><strong>Notas</strong></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><div><form method="post" action="#"><input type="number" id="nota1" pattern="[0-9]{1}"></div></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><div><form method="post" action="#"><input type="number" id="nota1" pattern="[0-9]{1}"></div></td>
            </tr>
        </table>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary bott">Guardar</button>
</div>



@endsection