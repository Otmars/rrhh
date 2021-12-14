<?php
include 'header.php';
?>

<body class="text-center">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
    <div class="container">
      <a class="navbar" href="index.php"><img src="assets/img/RRHH+UPEA.png" width="130" height="50" /></a>
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="formulario.php">Formularios</a></li>
          <li class="nav-item"><a class="nav-link" href="acerca.php">Quienes Somos</a></li>
        </ul>
        <a class="btn btn-primary" id="btn-abrir-popup" class="btn-abrir-popup">LOGIN</a>
      </div>
    </div>
  </nav>

  <section>
    <div class="py-3 cover text-center section-dark" style="background-image: url(img/fondo3.jpg);">
      <div class="container my-5 bg-light p-4">
        <div class="row align-items-center flex-column">
          <div class="col-md-7">
            <img src="img/RRHH+UPEA.png" class="card-img-top" alt="...">
            <h1 class="text-white">Ingrese su Código QR</h1>
            <form action="resultado.php" method="post">
              <div class="form-group">
                <input class="form-control" placeholder="Codigo QR" type="text" name="qr">
              </div>
              <button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"></button>
            </form>
          </div>

        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="overlay" id="overlay">
    <div class="popup" id="popup">
      <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
      <h3>INICIAR SESION</h3>
      <h4>Ingrese su Usuario y Contraseña</h4>
      <form action="resultado.php" method="post">
        <div class="contenedor-inputs">
          <input type="text" placeholder="Usuario" name="usuario">
          <input type="password" placeholder="Contraseña" name="contraseña">
        </div>
        <input type="submit" class="btn-submit" value="Ingresar">
      </form>
    </div>
  </div>
  </div>

  <script src="popup.js"></script>
</body>

<?php
require 'footer.php'
?>