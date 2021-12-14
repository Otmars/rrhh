<?php
include('conexion.php');


    $Titulo = $_POST['Titulo'];
    $Descripcion = $_POST['Descripcion'];
    $Imagen = $_FILES['Imagen']['name'];
    echo $Titulo;
    $query = "INSERT INTO eventos(`Titulo`, `Descripcion`,`Imagen`) VALUES ('$Titulo','$Descripcion','$Imagen')";
    $resultado = mysqli_query($conn,$query);
    echo $query;
         if($resultado){
              move_uploaded_file($temp,'imagenes/'.$Imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:../listEventos.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }



?>