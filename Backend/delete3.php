<?php
include('conexion.php');
if(isset($_GET['id'])) {
    echo ($_GET['id']);
  $id = $_GET['id'];
  $query = "DELETE FROM eventos WHERE ID_Eventos = $id";
  $result = mysqli_query($conn, $query);
  header('location:../listEventos.php');
  if(!$result) {
    die("Query Failed.");
  }
}
?>