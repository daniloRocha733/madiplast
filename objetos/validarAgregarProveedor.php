<?php

require "../clases/conexionBD.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into proveedor (cedulaProveedor,nombreProveedor,correoProveedor,TelProveedor,materialProveedor) 
values ('$_REQUEST[cedulaProveedor]', '$_REQUEST[nombreProveedor]', '$_REQUEST[correoProveedor]', '$_REQUEST[TelProveedor]', '$_REQUEST[materialProveedor]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "El ha el proveedor  correctamente";
else
	echo "Problemas al Agregar el proveedor";

?>

