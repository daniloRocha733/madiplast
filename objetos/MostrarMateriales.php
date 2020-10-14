<?php
require "../clases/conexionBD.php";
if (!isset($_SESSION['user']))
	header("location:Principal.php?x=2");	
	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objConexion=Conectarse();


$sql="select * from material";

$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>actualizar materiales</title>
</head>

<body>
<h1 align="center"> ACTUALIZAR MATERIALES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#FFFF99">
    <td width="11%">tipo de material</td>
    <td width="16%">cantidad registrada</td>
    <td width="19%">Precio</td>
    <td width="12%">Proveedor</td>
    <td width="7%">Editar</td>
    <td width="10%">Eliminar</td>
  </tr> 
  
  <?php
  
  
  while ($Material = $resultado->fetch_object())
  {
	?>
	<tr bgcolor="#CCCCFF">
        <td> <?php  echo $Material->tipMaterial  ?>     </td>
        <td> <?php  echo $Material->cantMaterial ?> </td>
        <td><?php  echo $Material->valMaterial ?></td>
        <td><?php  echo $Material->proveedorMaterial ?></td>
      
        
        <td align="center"><a href="ActualizarMaterial.php?tipMaterial=<?php echo $Material->tipMaterial?>"><img src="../Imagenes/editar.jpg" 
        
        width="29" height="24" /></a></td>
        
        
        <td align="center"><a href="eliminarMaterial.php?tipMaterial=<?php echo $Material->tipMaterial?>"><img src="../Imagenes/eliminar.png" 
        
        width="29" height="24" /></a></td>
  	</tr>
  <?php
  }
  ?>
  
  
  
  
</table>
<p>
<?php
if ($_REQUEST['x']==1)
	echo "Se ha actualizado el materialcorrectamente";
if ($_REQUEST['x']==2)
	echo "Problemas al material el Empleado";	
if ($_REQUEST['x']==3)
	echo "Se ha eliminado el material correctamente";
if ($_REQUEST['x']==4)
	echo "Problemas al eliminar el material";

?>
</body>
</html>