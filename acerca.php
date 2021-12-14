<?php
include 'header.php';
 ?>

 <body id="page-top">
     <!-- Navigation-->
      <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark" >
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


<section class="page-section bg-light" id="team" style="background-image: url(img/fono.jpg);">
      <div class="py-5 text-center text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(img/fondora.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-12">
          <h1 class="mb-3">NUESTRAS AUTORIDADES</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/r.png" alt="Card image cap" width="200">
          <h4>Dr. Carlos Condori</h4>
          <p class="mb-0" >RECTOR a.i.</p>
        </div>
        <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/v.png" alt="Card image cap" width="200">
          <h4>Ph. D. Efrain Chambi</h4>
          <p class="mb-0">VICERRECTOR a.i.</p>
        </div>
        <div class="col-lg-4 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/presirrhh.jpg" width="200">
          <h4>M.Sc. Vidal Ticona Gutierrez</h4>
          <p class="mb-0">Director de Recursos Humanos</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <h2 class="section-heading text-uppercase">UBICACIÓN</h2>
          </center>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12" ><iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.654657487415!2d-68.19408537642198!3d-16.493015217071093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915ede3467235c4d%3A0xc6efc5b8e49e9f21!2sEDIFICIO%20EMBLEM%C3%81TICO%20DE%20LA%20UNIVERSIDAD%20P%C3%9ABLICA%20DE%20EL%20ALTO!5e0!3m2!1ses!2sbo!4v1624591445708!5m2!1ses!2sbo" scrolling="no" frameborder="0"></iframe></div>
      </div>
    </div>
  </div>
</section>

        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h3>INICIAR SESION</h3>
                <h4>Ingrese su Usuario y Contraseña</h4>
                <form action="validar.php" method="post">
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
include 'footer.php';
 ?>
