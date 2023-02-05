<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Admin</title>
</head>
<body class="bodyadmin" background="imagenes/hollowknight.jpg">

	<div class="bienvenida">
	<?php
		echo "<h2>Bienvenido qué desea realizar</h2>";
	?>
	</div>

	<div class="menu">

		<h2>Menú</h2>

		<form action="admin_cuentas.php" method="post">
			<input type="submit" value="Crear Nueva Cuenta" class="btnmenu">
		</form>
		<br>
		<form action="modificar_cuentas.php" method="post">
			<input type="submit" value="Modificar Cuentas" class="btnmenu">
		</form>
		<br>
		<form action="ingresar_juegos.php" method="post">
			<input type="submit" value="Ingresar Juegos" class="btnmenu">
		</form>
		<br>

		<form action="buscar_juegos.php" method="post">
			<input type="submit" value="Buscar Juegos" class="btnmenu">
		</form>

		<br><hr>
		<div class="cerrars">
			<a href="index.php">Cerrar Sesion</a>
		</div>
	</div>
</body>
</html>