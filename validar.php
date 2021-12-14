<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

echo $contraseña;
echo $usuario;
// $conexion=mysqli_connect("localhost","root","12345","loggin");

$consulta="SELECT*FROM login where USUARIO='$usuario' and PASSWORD='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:admin.php");

}else{
    ?>
    <?php
    include("index.php");
    
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
 ?>
