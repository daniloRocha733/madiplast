<?php
require "../clases/conexionBD.php";
require "../clases/Proveedor.php";
//header("location:index.php?x=2");	
	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objConexion=Conectarse();
$objProveedor = new Proveedor();

$resultado=$objProveedor->consultarProveedores();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE PROVEEDORES</title>
</head>

<body>
<h1 align="center"> LISTA DE PROVEEDORES REGISTRADOS</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#FFFF99">
    <td width="11%">cedula</td>
    <td width="19%">nombres </td>
    <td width="16%">correo</td>
    <td width="12%">telefono</td>
    <td width="12%">material</td>
  </tr>
  
  <?php
  
  while ($Proveedor = $resultado->fetch_object())
  {
	?>
	<tr bgcolor="#CCCCFF">
        <td><?php  echo  $Proveedor->cedulaProveedor ?> </td>
        <td><?php  echo  $Proveedor->nombreProveedor ?> </td>
        <td><?php  echo  $Proveedor->correoProveedor  ?></td>
        <td><?php  echo  $Proveedor->TelProveedor ?></td>
        <td><?php  echo  $Proveedor->materialProveedor ?></td>
 	</tr>
  <?php
  }
  ?>
 
</table>
<p>
</body>
</html>