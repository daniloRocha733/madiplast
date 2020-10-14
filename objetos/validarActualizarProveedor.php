<?php
require "../clases/conexionBD.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update proveedor set cedulaProveedor='$_REQUEST[cedulaProveedor]', nombreProveedor = '$_REQUEST[nombreProveedor]', correoProveedor = '$_REQUEST[correoProveedor]', 

TelProveedor = '$_REQUEST[TelProveedor]', materialProveedor = '$_REQUEST[materialProveedor]'

where cedulaProveedor = '$_REQUEST[cedulaProveedor]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
	header ("location: MostrarProveedor.php?x=1"); 
else
	header ("location: MostrarProveedor.php?x=2"); 

?>

