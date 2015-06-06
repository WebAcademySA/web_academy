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
@endsection
<!--<script src="{{ asset ('js/jquery.js') }}"></script>
<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
</body>
</html>
-->
