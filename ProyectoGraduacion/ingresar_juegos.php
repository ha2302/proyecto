<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Ingresar Juegos</title>
</head>
<body class="bodyingresarj" background="imagenes/hollowknight.jpg">
	<form action="guardar_juego.php" method="post" enctype="multipart/form-data" class="ingresa">
		<h2 class="texto">Ingresar Juegos</h2>
		
		Nombre del Juego:
		<input class="nombre" type="text" size="14" name="nombre_juego" placeholder="Nombre del Juego">
		<br><br>

		Género:
		<select name="genero" class="lista">
			<option>Aventura</option>
			<option>Acción</option>
			<option>Apuestas</option>
			<option>Arcade</option>
			<option>Baloncesto</option>
			<option>Battle Royale</option>
			<option>Baile</option>
			<option>Boxeo</option>
			<option>Carreras</option>
			<option>Construcción</option>
			<option>Fútbol</option>
			<option>Mundo Abierto</option>
			<option>Metroidvania</option>
			<option>Puzles</option>
			<option>Shooter</option>
			<option>Terror</option>
			<option>Zombis</option>
		</select>
		<br><br>

		Plataforma:
			<select name="plataforma" class="lista">
				<option>Nintendo</option>
				<option>Play Station</option>
				<option>PC</option>
				<option>XBox</option>
			</select>
			<br><br>

			Descripción:
			<input type="text" size="24" name="descripcion" placeholder="Descripcion del juego" class="nombre">
			<br><br>

			Portada:
			<input type="file" size="10" name="portada">
			<br><br>

			Precio:
			<input type="text" size="14" name="precio" placeholder="Precio" class="nombre">
			<br><br>			

			Fecha de lanzamiento:
			<br>
			Día:
			<select name="dia">
				<?php
					for ($i=1; $i<32 ; $i++) {
						echo "<option value='$i'>$i</option>";
					}
				?>
			</select>

			Mes:
			<select name="mes">
				<?php
					for ($i=1; $i<13 ; $i++) {
						echo "<option value='$i'>$i</option>";
					}
				?>
			</select>

			Año:
			<select name="anio">
				<?php 
					for ($i=1990; $i<2023 ; $i++) {
						echo "<option value='$i'>$i</option>";
					}
				?>
			</select>
			<br>
			<br>
			<input type="submit" value="Guardar Juego" class="btn"><br><br>
			<div class="texto">
			<a href="CuentaAdmin.php">Regresar al menu</a><br><br>
		</div>
	</form>
	<a href="index.php" class="cerrarb">Cerrar Sesión</a>
			
</body>
</html>