<?php
include('db.php');
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];

echo $titulo;
echo $descripcion;
// $conexion=mysqli_connect("localhost","root","12345","loggin");

$consulta="INSERT INTO `eventos` (`ID_Eventos`, `Titulo`, `Descripcion`, `Imagen`) VALUES (NULL, '$titulo', '$descripcion', NULL);";
$resultado=mysqli_query($conexion,$consulta);



mysqli_close($conexion);

header("location:index.php");
 ?>
