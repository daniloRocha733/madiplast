<?php
require "../clases/conexionBD.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from producto where tipProducto = '$_REQUEST[tipProducto]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: Principal.php?x=3"); 
else
	header("location: Principal.php?x=4");  
?>

