
<?php
include 'header.php';
 ?>

<body class="text-center">
   <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark " >
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
  <!-- Cover -->
  <div class="py-5 cover text-center section-dark" style="background-image: url(img/fondo4.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-white mt-5" >
          <img src="img/RRHH+UPEA.png" width="630" height="250">
          <h1 class="display-2 d-none d-md-block ">RECURSOS HUMANOS</h1>
          <h3 > UNIVERSIDAD PUBLICA DE EL ALTO</h3>
        </div>
      </div>
    </div>
  </div>

    <!-- Cursos -->
  <div class="py-5 section-parallax" style="background-image: url(img/fondo3.jpg);" id="services">
            <?php
              include('Backend/conexion.php');
              $query = "select * from cursos";
              $resultado = mysqli_query($conn,$query);
            ?>
    <div class="container section-aquamarine">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-white mt-4">CURSOS / SEMINARIOS</h1>
          <hr>
          <div class="form-1-2">
            <label for="caja_busqueda">Buscar: </label>
            <input type="text" name="caja_busqueda" id="caja_busqueda">
          </div>
          <hr>
       <div class="col-lg-9" id="datos">
               <div class="card-columns">
                   <?php foreach($resultado as $row){ ?>
                <div class="card">
                            <img src="Backend/imagenes/<?php echo $row['Imagen']; ?>" class="card-img-top" alt="...">
                 <div class="card-body">
              <h4 class="card-title text-dark"><strong><?php echo $row['Titulo']; ?></strong></h4>
                </div>
                 <div class="card-body text-dark">
                  <h7 ><strong><?php echo $row['Descripcion']; ?></strong></h7>
                </div>
                 <div class="card-body text-dark">
                  <h7 ><strong> Fecha de Inicio: <br><?php echo $row['Fecha_Inicio']; ?></strong></h7>
                </div>
                 <div class="card-body text-dark">
                  <h7 ><strong> Fecha Final: <br><?php echo $row['Fecha_Final']; ?></strong></h7>
                </div>
                 <div class="card-body text-dark">
                  <h7 ><strong>Costo: <br><?php echo $row['Costo']; ?> - Bs</strong></h7>
                </div>

              </div>
              <?php }?>
                   </div>
                </div>
              </div>
    </div>
  </div>
</div>
<!-- Enlaces -->
<div class="py-5 section-parallax" style="background-image: url(img/fondo3.jpg);" id="services">
<div class="container section-aquamarine">
      <div class="row">

          <div class="col-md-6"><a href="registro.php"><img class="img-fluid d-block mx-auto" src="img/form.jpg" width="300"></a>
        <div>
          <h2> FORMULARIO DE REGISTRO</h2>
        </div>
          </div>
        <div class="col-md-6"><a href="validacion.php"><img class="img-fluid d-block mx-auto" src="img/codigo.jpg" width="300" ></a>
          <div>
          <h2> Validar Certificado</h2>
        </div>
        </div>
        </div>
    </div>
</div>



  <!-- Eventos -->
  <div class="py-5 section-parallax" style="background-image: url(img/fondo3.jpg);" id="evento">
            <?php
              include('db.php');
              $query = "select * from eventos";
              $resultado = mysqli_query($conn,$query);
            ?>
    <div class="container section-aquamarine">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-white mt-4">ACTIVADES / EVENTOS</h1>
          <hr>
          <div class="form-1-2">
            <label for="caja_busqueda">Buscar: </label>
            <input type="text" name="caja_busqueda" id="caja_busqueda">
          </div>
        </div>

       <div class="col-lg-9">
               <div class="card-columns">
                   <?php foreach($resultado as $row){ ?>
                <div class="card">
                            <img src="Backend/imagenes/<?php echo $row['Imagen']; ?>" class="card-img-top" alt="...">
                 <div class="card-body text-dark">
                  <h4 class="card-title" ><strong><?php echo $row['Titulo']; ?></strong></h4>
                </div>
                 <div class="card-body text-dark">
                  <h7 ><strong><?php echo $row['Descripcion']; ?></strong></h7>
                </div>

              </div>
              <?php }?>
                   </div>
                </div>
              </div>
    </div>
  </div>

  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>

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

          <script src="popup.js"></script>
          <!-- java busqueda-->
          <script src="query.js"></script>
          <script src="main.js"></script>
</body>

   <?php
    require 'footer.php'
   ?>
