<?php
include('conexion.php');
if(isset($_GET['id'])) {
    echo ($_GET['id']);
  $id = $_GET['id'];
  $query = "DELETE FROM validar_cert WHERE ID_Validar = $id";
  $result = mysqli_query($conn, $query);
  header('location:../listparticipantes.php');
  if(!$result) {
    die("Query Failed.");
  }
}
?>