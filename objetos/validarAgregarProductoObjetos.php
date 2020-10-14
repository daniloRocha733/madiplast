<?php

require "../clases/conexionBD.php";
require "../clases/Producto.php";
extract ($_REQUEST);



$objProducto = new Producto ();

$objProducto >crearProducto ($_REQUEST['tipProducto '] ,  $_REQUEST['valProducto '],$_REQUEST['cantProducto '], $_REQUEST['tipoMaterial']);

$resultado = $objEmpleado->agregarProducto ();

if ($resultado)
	echo "El Producto  se ha agregado correctamente";
else
	echo "Problemas al insertar Producto ";

?>