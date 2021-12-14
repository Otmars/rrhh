<?php
include('conexion.php');
$query ="";
if(isset($_GET['id'])) {
    
    echo ($_GET['id']);
  $id = $_GET['id'];
    $query = "SELECT * FROM `cursos` WHERE ID_Cursos = $id";
    $res = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_assoc($res);
    //print_r($row);
    $Titulo = $_POST['Titulo'];
    $Descripcion = $_POST['Descripcion'];
    $Fecha_Inicio = $_POST['Fecha_Inicio'];
    $Fecha_Final = $_POST['Fecha_Final'];
    $Costo = $_POST['Costo'];

    $query2 = "UPDATE `cursos` SET  `Titulo` = '$Titulo' , `Descripcion` = '$Descripcion' , `Fecha_Inicio` = '$Fecha_Inicio', `Fecha_Final` = '$Fecha_Final' , `Costo` = '$Costo' WHERE `cursos`.`ID_Cursos` = '$id'";
    echo ($query);
    echo($query2);
    $res = mysqli_query($conn, $query2);
    header('location:../listCursos.php');
  //$result = mysqli_query($conn, $query);
  if(!$res) {
    die("Query Failed.");
  }
    
}
