<?php
require "../clases/conexionBD.php";

//if (!isset($_SESSION['user']))
//	header("location:index.php?x=2");

$objConexion = Conectarse();
$sql= "select tipProducto, cantProducto from producto";
$resultadoProducto= $objConexion->query($sql);

$sql="select * from producto where tipProducto = '$_REQUEST[tipProducto]'";
$resultadoProducto = $objConexion->query($sql);

$Producto = $resultadoProducto->fetch_object();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar producto</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="validarActualizarProducto.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">ACTUALIZAR PRODUCTO</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">tipo de producto</td>
      <td width="63%"><label for="tipProducto"></label>
      
      <input name="tipProducto" type="text" id="tipProducto" value="<?php echo $Producto->tipProducto ?>" size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">precio</td>
      <td><label for="valProducto"></label>
      <input name="valProducto" type="text" id="valProducto" style="width:270px" value="<?php echo $Producto->valProducto ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">cantidad</td>
      <td><label for="cantProducto"></label>
      <input name="cantProducto" type="text" id="cantProducto" value="<?php echo $Producto->cantProducto?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">tipo de material</td>
      <td><label for="tipMaterial"></label>
      <input name="tipMaterial" type="text" id="tipMaterial" value="<?php echo $Producto->tipMaterial?>" size="40" /></td>
    </tr>
    
    
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  
  <input name="tipProducto" type="hidden" value="<?php echo $_REQUEST['tipProducto'] ?>" />
  
  
</form>
</body>
</html>