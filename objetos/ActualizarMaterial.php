<?php
require "../clases/conexionBD.php";

//if (!isset($_SESSION['user']))
//	header("location:index.php?x=2");

$objConexion = Conectarse();
$sql= "select tipMaterial, cantMaterial from material";
$resultadoMaterial= $objConexion->query($sql);

$sql="select * from material where tipMaterial = '$_REQUEST[tipMaterial]'";
$resultadoMaterial = $objConexion->query($sql);

$Material = $resultadoMaterial->fetch_object();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar material</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="validarActualizarMaterial.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">ACTUALIZAR MATERIAL</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">tipo de material</td>
      <td width="63%"><label for="tipMaterial"></label>
      
      <input name="tipMaterial" type="text" id="tipMaterial" value="<?php echo $Material->tipMaterial ?>" size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">cantidad</td>
      <td><label for="cantMaterial"></label>
      <input name="cantMaterial" type="text" id="cantMaterial" value="<?php echo $Material->cantMaterial?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">precio</td>
      <td><label for="valMaterial"></label>
      <input name="valMaterial" type="text" id="valMaterial" style="width:270px" value="<?php echo $Material->valMaterial ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">proveedor</td>
      <td><label for="proveedorMaterial"></label>
      <input name="proveedorMaterial" type="text" id="proveedorMaterial" value="<?php echo $Material->proveedorMaterial?>" size="40" /></td>
    </tr>
    
    
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  
  <input name="tipMaterial" type="hidden" value="<?php echo $_REQUEST['tipMaterial'] ?>" />
  

</form>
</body>
</html>

