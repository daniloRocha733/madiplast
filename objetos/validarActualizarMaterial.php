<?php
require "../clases/conexionBD.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update material set tipMaterial='$_REQUEST[tipMaterial]', cantMaterial = '$_REQUEST[cantMaterial]', 

valMaterial = '$_REQUEST[valMaterial]', proveedorMaterial = '$_REQUEST[proveedorMaterial]'

where tipMaterial = '$_REQUEST[tipMaterial]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
	header ("location: MostrarMateriales.php?x=1"); 
else
	header ("location: MostrarMateriales.php?x=2"); 

?>

