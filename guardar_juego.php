<?php	
	if ($_FILES['portada']['name']!=null) {
		copy($_FILES['portada']['tmp_name'], $_FILES['portada']['name']);
		$miPortada=$_FILES['portada']['name'];
	}
	else{
		$miPortada='default.png';
	}

	$nombre_juego=$_POST['nombre_juego'];
	$genero=$_POST['genero'];
	$plataforma=$_POST['plataforma'];
	$descripcion=$_POST['descripcion'];
	$precio=$_POST['precio'];
	$fecha_lanzamiento="$_POST[anio]-$_POST[mes]-$_POST[dia]";

	$conexion=mysqli_connect("localhost", "root", "", "proyecto_graduacion") or die("Error de conexión");
	$consulta="INSERT INTO juegos(nombre_juego, genero, plataforma, descripcion, portada, fecha_lanzamiento, precio) VALUES ('$nombre_juego','$genero','$plataforma', '$descripcion', '$miPortada', '$fecha_lanzamiento', '$precio')";
	$resultado=mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento ".mysqli_error($conexion));
	mysqli_close($conexion);
	
	header("location: ingresar_juegos.php");
?>