<?php

require "../clases/conexionBD.php";
require "../clases/Material.php";
extract ($_REQUEST);



$objMaterial = new Material();

$objMaterialEmpleado->crearMaterial($_REQUEST['tipMaterial'] , $_REQUEST['cantMaterial'], $_REQUEST['valMaterial'], $_REQUEST['proveedorMaterial']);

$resultado = $objEmpleado->agregarMaterial();

if ($resultado)
	echo "El Material se ha agregado correctamente";
else
	echo "Problemas al insertar Material";

?>