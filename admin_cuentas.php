<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/funciones.js"></script>
	<title>Administrar Cuentas</title>
</head>
<body class="bodycnc" background="imagenes/hollowknight.jpg">

	<div class="CNC">

	<h1 class="texto">Crear Nueva Cuenta</h1>

		<form action="nuevo_registro.php" method="post">
			<input type="text" name="nombre" placeholder="Nombre" class="nombre"><br><br>
			<input type="text" size="10" name="usuario" placeholder="Usuario" class="usuario"><br><br>
			<input type="password" size="10" name="contra" placeholder="Contraseña" class="contra"><br><br>

			<h class="txtpeq">Tipo de cuenta: <br>
			<select name="tcuenta" class="lista">
				<?php
					echo "<option value='admin' class='lista'>ADMIN</option>";
					echo "<option value='user'>USER</option>";
				?>
			</select><br><br>
			Estado: <br>
			<select name="estado" class="lista">
				<?php
					echo "<option value=1>Activada</option>";
					echo "<option value=0>Desactivada</option>";
				?>
		</select><br><br>
		<input type="submit"  value="Crear Nueva Cuenta" class="btnmenu">
	</form>
	<br><br>
	<div class="cerrars">
		
	<a href="CuentaAdmin.php">Regresar al menu principal</a> <br><br>
	</div>
	</div>
	<a href="index.php" class="cerrarb">Cerrar Sesión</a>
	
</body>
</html>