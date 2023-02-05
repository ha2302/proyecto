<?php
	if (isset($_POST['id_juego'])) {
		$id_juego=$_POST['id_juego'];
	}

	if (isset($_POST['nombre_juego'])) {
		$nombre_juego=$_POST['nombre_juego'];
	}
	
	else {
		$nombre_juego='%';
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Inicio</title>
</head>
<body class="bodyinicio">
	<form action="cuenta_usuario.php" method="post">
		<div class="buscarj">
			<input type="text" name="nombre_juego" placeholder="Search..." class="buscar">
			<input type="submit" name="buscar" value="Buscar" class="btnbuscar">
			
		</div>
		<a href="index.php" class="cerrarb">Cerrar Sesión</a>
		
		<br>
	</form>
	
	<?php
		$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
		$consulta = "SELECT * FROM juegos WHERE nombre_juego LIKE '%$nombre_juego%' ORDER BY fecha_lanzamiento DESC";
		$registros = mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento".mysqli_error($conexion));
		while ($datos = mysqli_fetch_array($registros)) {
			echo "<a href='comprar.php ? id_juego=$datos[id_juego]'><img class='ima' src='$datos[portada]' HSPACE='10' VSPACE='10'></a>";
		}
		mysqli_close($conexion);
	?>
</body>
</html>