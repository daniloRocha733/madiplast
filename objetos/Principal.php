<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:index.php?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MADIPLAST LTDA</title>
<style type="text/css">
#divContenedor {
	
	left:13px;
	top:19px;
	width:1073px;
	height:700px;
	z-index:1;
	margin:0 auto;
}
#divEncabezado {
	
	left:26px;
	top:27px;
	width:1047px;
	height:100px;
	z-index:2;
	
    background: #E9ECF4;
    color: #000;
    font-family: 'roboto',sans-serif;

}
#divMenu {

	left:50px;
	top:26px;
	width:200px;
	height:500px;
	z-index:3;
	background: #E9ECF4;
    color: #000;
    font-family: 'roboto',sans-serif;
}
#divContenido {
	position:absolute;
	left:320px;
	top:120px;
	width:858px;
	height:350px;
	z-index:4;
	overflow:auto
	}
#divPiePagina {
	left:25px;
	top:442px;
	width:1045px;
	height:77px;
	z-index:5;
	background: #E9ECF4;
    color: #000;
    font-family: 'roboto',sans-serif;
}
.header{
          margin: auto;
          width: -200px;
          font-family: 'Open Sans', sans-serif; 
          
     }

     ul, ol{
         list-style: none;
     }
    
     .menu li a{
         background-color: #5499C7;
         color: #fff;
         text-decoration: none;
         padding: 10px 15px;
         display: block;
     }

     .menu li a:hover {
            background-color: #61A5E0;
     }
     .menu> li{
         float: auto;

     }

     .menu li ul{
         display:none;
         position: absolute;
         min-width: 140px;
     }

     .menu li:hover > ul{
        display: block;
     }

     

     .menu li{
         border-right: 1px solid#fff;
     }


</style>
</head>

<body>
<div id="divContenedor">
    <div id="divEncabezado"> <?php include "../Vista/encabezado.php";?></div>
    <div id="divMenu">
      <table width="86%" height="254" border="0" align="center">
	  <div class="header">
        <ul  class="menu">
            <li> <a href="">Inicio</a>
            <li> <a href="">Materiales</a>
              <ul>
			    <li> <a href="Principal.php?pg=AgregarMaterial">insertar material</a></li>
                <li> <a href="Principal.php?pg=MostrarMaterialesObjetos">mostar lista</a></li>
                <li> <a href="Principal.php?pg=MostrarMateriales">actualizar</a></li>
              </ul>
            
            </li>

            <li> <a href="">Porductos</a> 
                <ul>

                    <li> <a href="Principal.php?pg=AgregarProducto">insertar producto</a></li>
                    <li> <a href="Principal.php?pg=MostrarProductoObjetos">mostar lista</a></li>
                    <li> <a href="Principal.php?pg=MostrarProducto">actualizar</a></li>
                  </ul>
            
            </li>

            <li> <a href="">Porveedores</a>
                <ul>

                    <li> <a href="Principal.php?pg=AgregarProveedor">insertar proveedor</a></li>
                    <li> <a href="Principal.php?pg=MostrarProveedorObjetos">mostar lista</a></li>
                    <li> <a href="Principal.php?pg=MostrarProveedor">actualizar</a></li>
                  </ul>
            </li>

            <li> <a href="">Clientes</a>
                <ul>

                    <li> <a href="">mostar lista</a></li>
                    <li> <a href="">insertar cliente</a></li>
                    <li> <a href="">actualizar</a></li>
                  </ul>
            
            </li>
            <li> <a href="salir.php">salir</a></li>
    
        </ul>
    </div>

      </table>
      <div id="divContenido">
        <?php include $pg.".php"; ?>
      </div>
    </div>
    <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
</body>
</html>