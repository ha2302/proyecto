<?php
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
    <title>Document</title>
</head>
<body class="bodymod">
<div class="tablaedit">
		<h1 class="texto">Buscar Juegos</h1>
        <form action="buscar_juegos.php" method="post">
		
	<input type="text" name="nombre_juego" placeholder="Search..." class="buscar">
			<?php
				$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
				$consulta = "SELECT DISTINCT nombre_juego FROM juegos";
				$registros2 = mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento".mysqli_error($conexion));								
			?>
		</div><br>
	</form>	 

		<table border="1">
			<tr>
				<th>ID</th>
				<th>JUEGO</th>
				<th>GENERO</th>
				<th>PLATAFORMA</th>
				<th>DESCRIPCION</th>
				<th>PORTADA</th>
				<th>FECHA DE LANZAMIENTO</th>
				<th>PRECIO</th>
			</tr>

            <?php

				$conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
				$consulta = "SELECT * FROM juegos WHERE nombre_juego LIKE '%$nombre_juego%'";
				$registros = mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento".mysqli_error($conexion));
				while ($datos = mysqli_fetch_array($registros)) {
					echo "<tr>";
					echo "<td>".$datos['id_juego']."</td>";
					echo "<td>".$datos['nombre_juego']."</td>";
					echo "<td>".$datos['genero']."</td>";
					echo "<td>".$datos['plataforma']."</td>";
					echo "<td>".$datos['descripcion']."</td>";
					echo "<td><img src='".$datos['portada']."'class='imag'></td>";
					echo "<td>".$datos['fecha_lanzamiento']."</td>";
					echo "<td>$.".$datos['precio']."</td>";
					echo "</tr>";
				}
				mysqli_close($conexion);
	 		?>
		</table>
	</div>	
	<a href="index.php" class="cerrarb">Cerrar Sesión</a>
</body>
</html>