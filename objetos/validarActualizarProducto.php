<?php
require "../clases/conexionBD.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update producto set tipProducto='$_REQUEST[tipProducto]', valProducto = '$_REQUEST[valProducto]', cantProducto = '$_REQUEST[cantProducto]', 

tipMaterial = '$_REQUEST[tipMaterial]'

where tipMaterial = '$_REQUEST[tipMaterial]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
	header ("location: MostrarProducto.php?x=1"); 
else
	header ("location: MostrarProducto.php?x=2"); 

?>

