

<?php  
require "../clases/conexionBD.php";

if (!isset($_SESSION['user']))
	header("location:index.php?x=2");

$objConexion = Conectarse();

$sql= "select tipMaterial, proveedorMaterial from material";

$resultado = $objConexion->query($sql);

 ?>  



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Materiales</title>
<!-- <link rel="stylesheet" href="styles/estilos1.css"> -->
<style>

*{
	box-sizing: border-box;
}

body{
	margin: 0;
	font-family: sans-serif;
	
}

h1 {
	color: #fff;
	text-align: center;
}
label{
	width: 95%;
	max-width: 500px;
	margin: auto;
	background: white;
	border-radius: 7px;
}
textarea{
	padding: 10px 30px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin-bottom: 15px;
	padding: 15px;
	font-size: 16px;
	border-radius: 3px;
	border:1px solid darkgray;
}

.material{
	width: 95%;
	max-width: 500px;
	margin: auto;
	background: #E9ECF4;
	border-radius: 7px;
}

.titulo{
	background: #E9ECF4;
	color: #000;
	padding: 20px;
	text-align: center;
	font-weight: 100;
	font-size: 30px;
	border-top-left-radius: 7px;
    border-top-right-radius: 7px;
	border-bottom: 5px solid deepskyblue;
}


.contenedor{
	padding: 10px 30px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;

}
input{
	margin-bottom: 15px;
	padding: 15px;
	font-size: 16px;
	border-radius: 3px;
	border:1px solid darkgray;
}

.select{
	width: 100%;
    margin-bottom: 15px;
	padding: 15px;
	font-size: 16px;
	border-radius: 3px;
	border:1px solid darkgray;

}
.input50{
	width: 48%;
}

.input100{
	width: 100%;
}

.registrar{
	background: deepskyblue;
	color: #fff;
	margin: auto;
	cursor: pointer;
}

.registrar:active{
	transform: scale(1.04);
}
</style>
</head>

<body>

<form id="form1" name="form1" method="post" action="validarAgregarMaterial.php" class="material">
    <h1 class="titulo"> Registro </h1>
    <div class="contenedor">
      
      <input type="text" name="tipMaterial" placeholder="tipo  de material" class="input100" required>
      <input type="text" name="cantMaterial" placeholder="cantidad" class="input100" required>
      <input type="text" name="valMaterial" placeholder="precio" class="input50" required>
      <input type="text" name="proveedorMaterial" placeholder="proveedor" class="input50" required>
      <input type="submit" name="button" id="button" value="Registrar" class="registrar">
    </div>
    
</form>
</body>
</html>
