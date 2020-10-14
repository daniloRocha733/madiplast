<?php
require "../clases/conexionBD.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from proveedor where cedulaProveedor = '$_REQUEST[cedulaProveedor]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: Principal.php?x=3");  
else
	header("location: Principal.php?x=4");  
?>

