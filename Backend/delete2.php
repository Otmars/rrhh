<?php
include('conexion.php');
if(isset($_GET['id'])) {
    echo ($_GET['id']);
  $id = $_GET['id'];
  $query = "DELETE FROM registro_cursos WHERE ID_Participante = $id";
  $result = mysqli_query($conn, $query);
  header('location:../listregis.php');
  if(!$result) {
    die("Query Failed.");
  }
    
}

?>