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

<div class="container">
    <!--Slideshow--><div class="main col-xs-12 col-sm-8 col-md-6 col-lg-6">
        <div class="slides">
            <img src="imagenes/64_alumnos_SM_postulan_al_Colegio_Presidente_del_Per.jpg">
            <img src="imagenes/000280330W.jpg">
            <img src="imagenes/colegios.jpg">
            <img src="imagenes/IMG_7713.jpg">
        </div>
    </div>
    <!--Contactenos--><div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
    </div>

</div>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.slides.js"></script>
<script>
    $(function(){
        $(".slides").slidesjs({
            play: {
                active: true,
                // [boolean] Generate the play and stop buttons.
                // You cannot use your own buttons. Sorry.
                effect: "fade",
                // [string] Can be either "slide" or "fade".
                interval: 3000,
                // [number] Time spent on each slide in milliseconds.
                auto: true,
                // [boolean] Start playing the slideshow on load.
                swap: true,
                // [boolean] show/hide stop and play buttons
                pauseOnHover: false,
                // [boolean] pause a playing slideshow on hover
                restartDelay: 2500
                // [number] restart delay on inactive slideshow
            }
        });
    });
</script>
@endsection