<?php
	$id=$_GET['id'];
	$conexion=mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
	$consulta="DELETE FROM usuarios WHERE id=$id";
	mysqli_query($conexion, $consulta)or die("Problemas con la consulta".mysqli_error($conexion));
	mysqli_close($conexion);
	header('Location: modificar_cuentas.php');
?>