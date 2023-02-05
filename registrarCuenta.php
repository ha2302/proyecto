<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Registro</title>
</head>
<body class="bodyincorrecto" background="imagenes/error.jpg">
	<div class="textoincorrecto">
		<?php
			$nombre=$_POST['nombre'];
			$user=$_POST['usuario'];
			$pass=$_POST['contra'];

			if ($nombre=='' || $user=='' || $pass=='') {
				echo "Por favor rellene el formulario completo para realizar su registro";
				echo "<br><br>";
				echo "<div class='textointentar'>";
				echo "Intentar de nuevo ->>>> <a href='registrar.php'>Click aquí</a>";
				echo "</div>";
			}

			else if ('nombre'=='nombre' || 'user'=='usuario' || 'pass'=='contra') {
				$conexion=mysqli_connect("localhost", "root", "", "proyecto_graduacion") or die("Error de conexión");
				$consulta="INSERT INTO usuarios(nombre, usuario, contra) VALUES ('$nombre','$user','$pass')";
				mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento ".mysqli_error($conexion));
				mysqli_close($conexion);
				header("location: index.php");
			}			
		?>
	</div>
</body>
</html>
