<?php
	$id=$_GET['id'];
	$estado=1;
	$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
	$consulta = "UPDATE usuarios SET estado='$estado' WHERE id=$id";
	$registros = mysqli_query($conexion, $consulta)or die("Problemas con la consulta".mysqli_error($conexion));	
	mysqli_close($conexion);
	header('Location: modificar_cuentas.php');
?>