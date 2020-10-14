<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio sesion</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
   <form class="formulario" action="objetos/validarInicio.php" method="post">
   	 <img class="logo"src="logo.png" alt="logo de madiplast">
    <h1>Inicio sesion</h1>
    <div class="contenedor">
    
      <div class="content">
        <input type="text" name="usuario" placeholder="Nombre de usuario" required>
      </div>
      <div class="content">
        <input type="password" name="contraseña" placeholder="Contrasena" required>
      </div>
       <input type="submit" value="Iniciar sesion" class="button"  > 
       <!-- <a href="principal.html" class="uno">Ingresar al sistema</a> -->
       <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate</a> </p>
    </div>
  </form>  
</body>
</html>