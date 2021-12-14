<?php
include('conexion.php');


    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $CI = $_POST['CI'];
    $cod_qr = $_POST['cod_qr'];
    $fecha = $_POST['fecha'];
    $org = $_POST['org'];
    $certde = $_POST['certde'];
    $Doc = $_FILES['Doc']['name'];
    $tipo = $_FILES['Doc']['type'];
    $temp  = $_FILES['Doc']['tmp_name'];
    echo $Doc;
    

         $query = "INSERT INTO `validar_cert`(`Nombres`, `Apellidos`, `CI`, `cod_qr`, `fecha`, `org`, `certde`, `Doc`) VALUES ('$Nombres','$Apellidos','$CI','$cod_qr','$fecha','$org','$certde','$Doc')";
         $resultado = mysqli_query($conn,$query);
         echo $query;
         if($resultado){
              move_uploaded_file($temp,'Doc/'.$Doc);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
    header('location:../listparticipantes.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
             
         }



?>