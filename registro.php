<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
    
  <form class="formulario">
    <img class="logo"src="logo.png" alt="logo de madiplast">
    <h1>Registrate</h1>
    <div class="contenedor">
      <div class="content">
        <input type="text" placeholder="Nombre y apellidos" required>
      </div>
      <!-- <div class="content"> -->
      <label style="color: #939393;">Tipo de usuario</label> <br> <br> 
      <!-- </div> -->
      
      <div class="content">
       <select class="select" name="Tipo de usuario"  >       
       <option>Almacenista</option>
       <option>Almacenista</option>
       </select>
      </div>
      <div class="content">
        <input type="text" placeholder="Correo"  required>
      </div>
      <div class="content">
        <input type="text" placeholder="Nombre de usuario"  required>
      </div>
      <div class="content">
        <input type="password" placeholder="Contrasena"  required>
      </div>
       <input type="submit" value="Registrar" class="button">
       <p>Acepta terminos y conciones</p>
       <p>¿Ya tienes una cuenta? <a class="link" href="inicio.php">Iniciar sesion</a> </p>
    </div>
  </form>  
    


</body>
</html>