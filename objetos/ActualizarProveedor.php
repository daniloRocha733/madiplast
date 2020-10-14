<?php
require "../clases/conexionBD.php";

//if (!isset($_SESSION['user']))
//	header("location:index.php?x=2");

$objConexion = Conectarse();
$sql= "select cedulaProveedor, nombreProveedor from proveedor";
$resultadoProveedor= $objConexion->query($sql);

$sql="select * from proveedor where cedulaProveedor = '$_REQUEST[cedulaProveedor]'";
$resultadoProveedor = $objConexion->query($sql);

$Proveedor = $resultadoProveedor->fetch_object();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar proveedor</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="validarActualizarProveedor.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">ACTUALIZAR PROVEEDOR</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">cedula</td>
      <td width="63%"><label for="cedulaProveedor"></label>
      
      <input name="cedulaProveedor" type="text" id="cedulaProveedor" value="<?php echo $Proveedor->cedulaProveedor ?>" size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">nombres </td>
      <td><label for="nombreProveedor"></label>
      <input name="nombreProveedor" type="text" id="nombreProveedor" style="width:270px" value="<?php echo $Proveedor->nombreProveedor ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">correo</td>
      <td><label for="correoProveedor"></label>
      <input name="correoProveedor" type="text" id="correoProveedor" value="<?php echo $Proveedor->correoProveedor?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">telefono</td>
      <td><label for="TelProveedor"></label>
      <input name="TelProveedor" type="text" id="TelProveedor" value="<?php echo $Proveedor->TelProveedor?>" size="40" /></td>
    </tr>
   
    <tr>
      <td align="right" bgcolor="#EAEAEA">material del proveedor</td>
      <td><label for="materialProveedor"></label>
      <input name="materialProveedor" type="text" id="materialProveedor" value="<?php echo $Proveedor->materialProveedor?>" size="40" /></td>
    </tr>
    
    
    
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  
  <input name="cedulaProveedor" type="hidden" value="<?php echo $_REQUEST['cedulaProveedor'] ?>" />
  
  
</form>
</body>
</html>