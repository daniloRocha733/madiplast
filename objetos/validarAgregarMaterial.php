<?php

require "../clases/conexionBD.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into material (tipMaterial,cantMaterial,valMaterial,proveedorMaterial) 
values ('$_REQUEST[tipMaterial]' , '$_REQUEST[cantMaterial]', '$_REQUEST[valMaterial]', '$_REQUEST[proveedorMaterial]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "El material se ha agregado correctamente";
else
	echo "Problemas al Agregar el material";

?>


