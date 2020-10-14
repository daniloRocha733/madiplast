<?php
require "../clases/conexionBD.php";
require "../clases/Material.php";
//header("location:index.php?x=2");	
	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objConexion=Conectarse();
$objMaterial = new Material();

$resultado=$objMaterial->consultarMateriales();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE MATERIALES</title>
</head>

<body>
<h1 align="center"> LISTA DE MATERIALES REGISTRADOS</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#FFFF99">
    <td width="11%">tipo de material</td>
    <td width="16%">cantidad</td>
    <td width="19%">precio</td>
    <td width="12%">proveedor</td>
  </tr>
  
  <?php
  
  while ($material = $resultado->fetch_object())
  {
	?>
	<tr bgcolor="#CCCCFF">
        <td><?php  echo  $material->tipMaterial ?>     </td>
        <td><?php  echo  $material->cantMaterial ?> </td>
        <td><?php  echo  $material->valMaterial  ?></td>
        <td><?php  echo  $material->proveedorMaterial ?></td>

 	</tr>
  <?php
  }
  ?>
 
</table>
<p>
</body>
</html>