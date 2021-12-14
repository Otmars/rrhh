<?php
include('conexion.php');


   // $ID_Cursos = $_POST['ID_Cursos'];
    $Titulo = $_POST['Titulo'];
    $Descripcion = $_POST['Descripcion'];
    $Fecha_Inicio = $_POST['Fecha_Inicio'];
    $Fecha_Final = $_POST['Fecha_Final'];
    $Costo = $_POST['Costo'];
    $nombre = $_FILES['Imagen']['name'];
    $tipo = $_FILES['Imagen']['type'];
    $tamaño = $_FILES['Imagen']['size'];
    echo($Titulo.$Descripcion.$Fecha_Inicio.$Fecha_Final.$Costo);
    print_r($tamaño);

    
         $query = mysqli_query($conn,"INSERT INTO cursos(`Titulo`, `Descripcion`, `Fecha_Inicio`, `Fecha_Final`, `Costo`, `Imagen`) VALUES ('$Titulo','$Descripcion','$Fecha_Inicio','$Fecha_Final','$Costo','$nombre')");
         
         $resultado = mysqli_query($conn,$query);
         
        $destino=$_SERVER['DOCUMENT_ROOT']. '/Backend/imagenes/';
        move_uploaded_file($_FILES['Imagen']['tmp_name'],$destino.$nombre);   

        header('location:../listCursos.php');


?>