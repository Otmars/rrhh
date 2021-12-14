<?php
include('conexion.php');
if(isset($_GET['id'])) {
    echo ($_GET['id']);
  $id = $_GET['id'];
  $query = "DELETE FROM cursos WHERE ID_Cursos = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
    header('location:../listCursos.php');
}

?>