<?php
include 'header.php';
 ?>
 <body id="page-top">
      <!-- Navigation-->
     <nav class="navbar navbar-expand-md fixed-top bg-white navbar-white">
    <div class="container"> 
     <a class="navbar" href="index.php"><img src="assets/img/RRHH+UPEA.png" width="100" height="50" /></a>
     <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="admin.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="validar-cert.php">Validar Certificados</a></li>
                     <a class="btn btn-primary" href="index.php">Cerrar Sesion</a>
        </ul> 
      </div>
    </div>
  </nav>

  <section>
<div class="container my-5 bg-light p-4">
      <div class="row mx-auto">
       <div class="col-md-12">
         <h1 class="text-primary">Registrar Codigos QR</h1>
         <form action="Backend/subir4.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="my-input">Seleccione un Documento</label>
              <input id="my-input"  type="file" name="Doc">
          </div>
          <div class="form-group">
              <label for="my-input">Nombre(s)</label>
              <input id="my-input" class="form-control" type="text" name="Nombres">
          </div>
          <div class="form-group">
              <label for="my-input">Apellidos</label>
               <input id="my-input" class="form-control" type="text" name="Apellidos">
          </div>
          <div class="form-group">
              <label for="my-input">Codigo de Certificado</label>
               <input id="my-input" class="form-control" type="text" name="cod_qr">
          </div>
          <div class="form-group">
              <label for="my-input">Fecha de Evento</label>
              <input id="my-input" class="form-control" type="text" name="fecha">
          </div>
          <div class="form-group">
              <label for="my-input">Organizado Por: </label>
               <textarea id="my-input" class="form-control" name="org"rows="7"></textarea>
          </div>
          <div class="form-group">
              <label for="my-input">Certificado de :</label>
              <input id="my-input" class="form-control" type="text" name="certde">
          </div>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_unset(); } ?>
          <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar4">
         </form>
         <div>
         <form action="listregis.php">
           <center><input type="submit" value="lista de Registros" class="btn btn-primary" name="Lista"></center>
         </form>
         </div>
       </div>
      
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </section>

</body>
<?php
include 'footer.php';
 ?>