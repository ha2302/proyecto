<?php
	if (isset($_POST['nombre'])) {
		$nombre=$_POST['nombre'];
	}
	
	else {
		$nombre='%';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Document</title>
</head>
<body class="bodymodificar" background="imagenes/hollowknight.jpg">
<div class="tablaedit">
		<h1 class="texto">Modificar Cuentas</h1>

		<form action="modificar_cuentas.php" method="post">
	<input type="text" name="nombre" placeholder="Search..." class="buscar">
	<a href="index.php" class="cerrarb">Cerrar Sesión</a>
			<?php
				$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
				$consulta = "SELECT DISTINCT nombre FROM usuarios";
				$registros2 = mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento".mysqli_error($conexion));								
			?>
		</div><br>
	</form>	 

	<div class="tabla">
		<table border="1">
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>USUARIO</th>
					<th>CONTRASEÑA</th>
					<th>TIPO_CUENTA</th>
					<th>ESTADO</th>
					<th>ACTUALIZAR</th>
					<th>DESACTIVAR</th>
					<th>ACTIVAR</th>
					<th>ELIMINAR</th>
				</tr>

				<?php
					$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
					$consulta = "SELECT * FROM usuarios WHERE nombre LIKE '%$nombre%'";
					$registros = mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento".mysqli_error($conexion));
					while ($datos = mysqli_fetch_array($registros)) {
						echo "<tr>";
						echo "<td>".$datos['id']."</td>";
						echo "<td>".$datos['nombre']."</td>";
						echo "<td>".$datos['usuario']."</td>";
						echo "<td>".$datos['contra']."</td>";
						echo "<td>".$datos['tcuenta']."</td>";
						echo "<td>".$datos['estado']."</td>";
						echo "<td><a href='actualizar_cuenta.php?id=$datos[id]'>Actualizar</a></td>";
						echo "<td><a href='eliminar_cuenta.php?id=$datos[id]'>Desactivar</a></td>";
						echo "<td><a href='activar_cuenta.php?id=$datos[id]'>Activar</a></td>";
						echo "<td><a href='eliminar.php?id=$datos[id]'>eliminar</a></td>";
						echo "</tr>";
					}
					mysqli_close($conexion);
	 			?>
			</table>
		</div>		
	</div>	
</body>
</html>