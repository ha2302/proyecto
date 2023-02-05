<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Sign Up</title>
</head>
<body class="bodyregistrar" background="imagenes/hollowknight.jpg">
	<div id="espacio">
		<div class="contenedor">
			<div class="registrarse">
				<h1 class="cc">Registrarse</h1>
			</div>
			
			<form action="registrarCuenta.php" method="post">
				<input type="text" size="10" name="nombre" placeholder="Nombre" class="nombre"> <br>
				<input type="text" size="10" name="usuario" placeholder="Usuario" class="usuario"> <br>
				<input type="password" size="10" name="contra" placeholder="Contraseña" class="contra"><br>
				<input type="submit" value="Crear Cuenta" class="btn"> <hr>

				<div class="texto">
					<a href="index.php">Iniciar Sesión</a>
				</div>		
			</form>
		</div>				
	</div>
</body>
</html>