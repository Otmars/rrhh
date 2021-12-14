<?php
include('db.php');
$cod_qr=$_POST['cod_qr'];
session_start();
$_SESSION['cod_qr']=$cod_qr;

echo $cod_qr;

$consulta="SELECT * FROM validar_cert where cod_qr='$cod_qr'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:resultado.php");

}else{
    ?>
    <?php
    include("validacion.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
 ?>
