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
                    <li><div class="fuera"><a href="{{ url('/auth/logout') }}" class="letras">Cerrar Sesion</a></div></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<section class="container centro">
    <div class="row">
        <!--Slideshow--><div class="main col-xs-12 col-sm-8 col-md-7 col-lg-7">
            <div class="slides">
                <img src="imagenes/Docentes-universitarios.jpg" height="300">
                <img src="imagenes/2013-02-14-Buen-y-gran-docente.jpg">
                <img src="imagenes/docente3.jpg">
                <img src="imagenes/escala-docente.jpg" height="350">
            </div>
        </div>
        <!--Contactenos--><div class="aside2 col-xs-12 col-sm-4 col-md-5 col-lg-5">
            <h3 class="tilaside">Contactenos</h3>
            <article>
                <p class="texto">Para cualquier duda o sugerencia con respecto a la plataforma contactenos a:</p>
                <div class="iconos">
                <a href="#" target="_blank" class="col-md-3"><img src="imagenes/Facebook_logo_64 (1).png" width="44" height="44"></a>
                <a href="#" target="_blank" class="col-md-3"><img src="imagenes/Social_google_plus_square_button_64.png" width="44" height="44"></a>
                <a href="#" target="_blank" class="col-md-3"><img src="imagenes/Twitter_logo_on_black_background_64.png" width="44" height="44"></a>
                </div>
            </article>
        </div>
    </div>
</section>

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