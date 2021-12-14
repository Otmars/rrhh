<?php
include('conexion.php');

if(isset($_POST['Guardar'])){
    $Nombre_Part = $_POST['Nombre_Part'];
    $Carrera = $_POST['Carrera'];
    $CI = $_POST['CI'];
    $Correo = $_POST['Correo'];
    $Telef_cel = $_POST['Telef_cel'];
    $Curso = $_POST['Curso'];
    echo($CI);
    $query = "INSERT INTO `registro_cursos` (`ID_user`, `Nombre_Part`, `Carrera`, `Correo`, `Telef_cel`, `Curso`) VALUES ('$CI','$Nombre_Part','$Carrera','$Correo','$Telef_cel','$Curso')";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:../');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
}

?>