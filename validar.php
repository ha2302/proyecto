<?php
	$user=$_POST['usuario'];
	$pass=$_POST['contra'];
	$conexion=mysqli_connect("localhost", "root", "", "proyecto_graduacion") or die("Error de conexión");
	$consulta="SELECT * FROM usuarios WHERE usuario='$user' AND contra='$pass'";
	$registros=mysqli_query($conexion, $consulta) or die("Error de conexión ".mysqli_error($conexion));

		if($fila=mysqli_fetch_array($registros)) {
			$nombre=$fila['nombre'];
			$cuenta=$fila['tcuenta'];
			$estado=$fila['estado'];

			if($estado==1 && $cuenta=="admin") {
				header("location: CuentaAdmin.php");	
			}
			else {
				header("location: error_cuenta.php");
			}
		}
		else {
			header("location: incorrecto.php");
		}
		if ($estado==1 && $cuenta=="user") {
			header("location: cuenta_usuario.php");
		}
	mysqli_close($conexion);
?>