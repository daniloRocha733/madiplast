<?php

require "../clases/conexionBD.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into producto (tipProducto,valProducto,cantProducto,tipMaterial) 
values ('$_REQUEST[tipProducto]' , '$_REQUEST[valProducto]', '$_REQUEST[cantProducto]', '$_REQUEST[tipoMaterial]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "El producto se ha agregado correctamente";
else
	echo "Problemas al Agregar el producto";

?>