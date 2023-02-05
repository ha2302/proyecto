<?php
	$id_juego=$GET['id_juego'];
	$nombre_juego=$_POST['nombre_juego'];
	$genero=$_POST['genero'];
	$plataforma=$_POST['plataforma'];
	$fecha_lanzamiento=$_POST['fecha_lanzamiento'];
    $precio=$_POST['precio'];
	$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
	$consulta = "UPDATE juegos SET nombre_juego='$nombre_juego', genero='$genero', plataforma='$plataforma', fecha_lanzamiento='$fecha_lanzamiento', precio='$precio' WHERE id_juego='$id_juego'";
	$registros = mysqli_query($conexion, $consulta)or die("Problemas con la consulta".mysqli_error($conexion));
	
	mysqli_close($conexion);
	header('Location: actualizar_juego.php');
?>