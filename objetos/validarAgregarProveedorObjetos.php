<?php

require "../clases/conexionBD.php";
require "../clases/Proveedor.php";
extract ($_REQUEST);



$objProveedor = new Proveedor ();

$objProveedor >crearProveedor ($_REQUEST['cedulaProveedor'] ,  $_REQUEST['nombreProveedor '],$_REQUEST['correoProveedor'], $_REQUEST['TelProveedor'], $_REQUEST['materialProveedor']]);

$resultado = $objProveedor->agregarProveedor ();

if ($resultado)
	echo "El Proveedor  se ha registrado correctamente";
else
	echo "Problemas al insertar proveedor ";

?>