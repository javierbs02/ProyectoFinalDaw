@extends('layouts.plantilla')
@section("content")

<div class="jumbotron mt-5 opacity7 row">
  <div class="col-12 text-center">
    <img src="assets/img/tituloJuego2.png" />
  </div>
  <p class="lead">Si estás buscando una experiencia desafiante y emocionante, este juego es para ti.

    Tu objetivo en este juego es eliminar tantos enemigos como sea posible para ganar la mayor cantidad de puntos. A
    medida que avanzas en el juego, tendrás la oportunidad de recolectar recursos y objetos para mejorar tus habilidades
    y construir herramientas que te ayuden a sobrevivir lo máximo que puedas.

    A medida que te enfrentas a enemigos cada vez más fuertes, tendrás que demostrar tu habilidad y estrategia para
    superar los desafíos y alcanzar el puntaje más alto posible. Pero no te preocupes, porque el juego ofrece una
    experiencia de juego increíblemente satisfactoria y adictiva que te mantendrá enganchado por horas.

    Y eso no es todo, porque hay una liga donde puedes competir contra otros jugadores para ver quién tiene el puntaje
    más alto. ¿Estás listo para aceptar el desafío y competir para convertirte en el mejor jugador del juego? ¡Entonces
    no esperes más y comienza a jugar ahora mismo!</p>

  <div class="col-12 d-flex justify-content-center mt-5">
    <form method="get" action="{{route('game.index')}}">
      <button class="btn btn-success btn-lg large-btn">
        <i class="fas fa-play"></i>
      </button>
    </form>
  </div>

</div>

@endsection