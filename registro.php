<?php
include 'header.php';
 ?>

<body>
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


 <div class="py-3 cover section-dark" style="background-image: url(img/fondo3.jpg);">
    <div class="container my-5 bg-light p-4">
      <div class="row align-items-center flex-column">
       <div class="col-md-7">
        <center>
         <b><h1 class="text-white">Formulario de Registro de Cursos/Seminario</h1></b></center>
         <form action="Backend/subir3.php" method="post" enctype="multipart/form-data">
          <div class="form-group text-white">
              <label for="my-input">Nombre(s) y Apellidos</label>
              <input id="my-input" class="form-control" type="text" name="Nombre_Part">
          </div>
          <div class="form-group text-white">
              <label for="my-input">Carnet de Identidad</label>
              <input id="my-input" class="form-control" type="number" name="CI">
          </div>
          <div class="form-group text-white">
              <label for="my-input">Carrera</label>
              <input id="my-input" class="form-control" type="text" name="Carrera">
          </div>
          <div class="form-group text-white">
              <label for="my-input">Correo</label>
              <input id="my-input" class="form-control" type="email" name="Correo">
          </div>
          <div class="form-group text-white">
              <label for="my-input">Telefono</label>
              <input id="my-input" class="form-control" type="number" name="Telef_cel">
          </div>
        <div class="form-group text-white">
              <label for="my-input">Curso</label>
              <input id="my-input" class="form-control" type="text" name="Curso">
          </div>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_unset(); } ?>
          <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
         </form>
       </div>
      
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
    require 'footer.php'
?>