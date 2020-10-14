<?php
session_start();
extract ($_REQUEST);
require "../clases/conexionBD.php";
$objConexion=Conectarse();

$sql="select * from usuarios where usuario = '$_REQUEST[usuario]' and contrausu = '$_REQUEST[contraseña]'";


$resultado=$objConexion->query($sql);


$existe = $resultado->num_rows;
if ($existe==1)  
{
	$usuario=$resultado->fetch_object();

	$_SESSION['user']= $usuario->usuario;	
	header("location:Principal.php");	
}
else
{
	header("location:registro.php?x=1");  
 }
?>