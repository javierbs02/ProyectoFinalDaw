<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="assets/plantilla/css/plantilla.css" rel="stylesheet">
<div class="container-fluid px-0">
  <nav class="navbar navbar-expand-sm navbar-dark bg-black py-0 px-0">
    <a class="navbar-brand" href="#"><img id="logo" src="assets/img/logo.png"> &nbsp;&nbsp;&nbsp;Craft&Survive</a>
    <span class="v-line"></span>
    <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('principal.index') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('game.puntuacion') }}">Puntuación</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <input type="hidden" id="csrf-token" value="{{ csrf_token() }}">
  <div class="container">
    <script src="juego/game.js"></script>
  </div>
</body>