<?php
require "../clases/conexionBD.php";
if (!isset($_SESSION['user']))
	header("location:Principal.php?x=2");	
	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objConexion=Conectarse();


$sql="select * from proveedor";

$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>actualizar productos</title>
</head>

<body>
<h1 align="center"> ACTUALIZAR PROVEEDORES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#FFFF99">
    <td width="11%">cedula</td>
    <td width="19%">nombre</td>
    <td width="16%">correo</td>
    <td width="12%">telefono</td>
    <td width="12%">material</td>
    <td width="7%">Editar</td>
    <td width="10%">Eliminar</td>
  </tr>
  
  <?php

  
  while ($Proveedor = $resultado->fetch_object())
  {
	?>
	<tr bgcolor="#CCCCFF">
        <td> <?php  echo $Proveedor->cedulaProveedor ?></td>
        <td> <?php  echo $Proveedor->nombreProveedor?></td>
        <td><?php  echo $Proveedor->correoProveedor ?></td>
        <td><?php  echo $Proveedor->TelProveedor ?></td>
        <td><?php  echo $Proveedor->materialProveedor ?></td>
      
        
        <td align="center"><a href="ActualizarProveedor.php?cedulaProveedor=<?php echo $Proveedor->cedulaProveedor?>"><img src="../Imagenes/editar.jpg" 
        
        width="29" height="24" /></a></td>
        
        
        <td align="center"><a href="eliminarProveedor.php?cedulaProveedor=<?php echo $Proveedor->cedulaProveedor?>"><img src="../Imagenes/eliminar.png" 
        
        width="29" height="24" /></a></td>
  	</tr>
  <?php
  }
  ?>
   </table>
<p>
  </body>
</html>