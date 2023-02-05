<?php
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$usuario=$_POST['usuario'];
	$contra=$_POST['contra'];
	$tcuenta=$_POST['tcuenta'];
	$estado=$_POST['estado'];
	$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
	$consulta = "UPDATE usuarios SET nombre='$nombre', usuario='$usuario', contra='$contra', tcuenta='$tcuenta', estado='$estado' WHERE id=$id ";
	$registros = mysqli_query($conexion, $consulta)or die("Problemas con la consulta".mysqli_error($conexion));
	
	mysqli_close($conexion);
	header('Location: modificar_cuentas.php');
?>