<?php
	$nombre=$_POST['nombre'];
	$user=$_POST['usuario'];
	$pass=$_POST['contra'];
	$tcuenta=$_POST['tcuenta'];
	$estado=$_POST['estado'];
	$conexion=mysqli_connect("localhost", "root", "", "proyecto_graduacion") or die("Error de conexión");
	$consulta="INSERT INTO usuarios(nombre, usuario, contra, tcuenta, estado) VALUES ('$nombre','$user','$pass','$tcuenta','$estado')";

	if($nombre=="" || $user=="" || $pass=="") {
		header("location: p.php");
	}
	else {
		mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento ".mysqli_error($conexion));
		mysqli_close($conexion);
		header("location: admin_cuentas.php");
	}	
?>