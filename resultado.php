<?php
include 'header.php';
 ?>

<body class="text-center" style="background-image: url(img/fondo-azul.jpg);" >
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

    <section class="page-section" id="services" >
         <br>
           <?php 
              include('Backend/conexion.php');
              $query = "select * from validar_cert";
              $resultado = mysqli_query($conn,$query);
            ?>
    <div class="container my-5 bg-light p-4">
      <div class="row mx-auto">
       
          <table align="center" >
            <td>

          <h1 class="text-primary">Resultados</h1>
          <br>
          <?php foreach($resultado as $row){ ?>
          
             
              <p><strong><b>Nombre (s) y Apellidos: </b><?php echo $row['Nombres']; ?> <?php echo $row['Apellidos']; ?></strong></p>
              <p><strong><b> CI: </b> <?php echo $row['CI']; ?></strong></p>
              <p><strong><b> Codigo de Certificado: </b>  <?php echo $row['cod_qr']; ?></strong></p>
              <p><strong><b> Fecha de Evento: </b> <?php echo $row['fecha']; ?></strong></p>
             <p><strong><b> Organizado Por: </b> <?php echo $row['org']; ?></strong></p>
              <p><strong><b> Certificado de: </b> <?php echo $row['certde']; ?></strong></p>
            

             </td>
             <td>
               <br>.......................................
             </td>
            
             <td>

                <object class="pdfview" type="application/pdf" data="Backend/Doc/<?php echo $row['Doc']; ?>"></object>
  
            </td>
               <?php }?>
              </table> 
           
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

          <script src="popup.js"></script>
</body>

  <?php
    require 'footer.php'
?>