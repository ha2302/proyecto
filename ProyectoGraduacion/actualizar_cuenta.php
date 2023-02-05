<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Actualizar</title>
</head>
<body class="bodyactua" background="imagenes/hollowknight.jpg">
	<?php
		$id=$_GET['id'];
		$conexion=mysqli_connect("localhost", "root", "", "proyecto_graduacion") or die("Error de conexión");
		$consulta="SELECT * FROM usuarios WHERE id=$id";
		$registros=mysqli_query($conexion, $consulta) or die("Problemas con la busqueda ".mysqli_error($conexion));

			if ($fila=mysqli_fetch_array($registros)) {
				$id=$fila['id'];
				$nombre=$fila['nombre'];
				$usuario=$fila['usuario'];
				$contra=$fila['contra'];
				$tcuenta=$fila['tcuenta'];
				$estado=$fila['estado'];
			}
		mysqli_close($conexion);
	?>

	<div id="actua">

		<h1 class="txt">Actualizar</h1>

		<form action="actualizar.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<h class="txtpeq">Nombre:
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" class="nombre"> <br>
			Usuario: <br>
			<input type="text" name="usuario" value="<?php echo $usuario; ?>" class="usuario"> <br>
			Contraseña: <br>
			<input type="password" name="contra" value="<?php echo $contra; ?>" class="contra"> <br>
			Tipo de Cuenta: <br>
			<select name="tcuenta" class="lista">
				<?php
					echo "<option value='admin'>ADMIN</option>";
					echo "<option value='user'>USER</option>";
				?>
			</select><br><br>
			Estado:<br>
			<select name="estado" class="lista">
				<?php
					echo "<option value=1>Activada</option>";
					echo "<option value=0>Desactivada</option>";
				?>
			</select>
		<br> <br>
		<input type="submit" value="Actualizar" class="btn">		
	</form>
	<hr>
	<div class="texto">
		<a href="CuentaAdmin.php">Regresar al menú</a>
	</div>
		
	</div>
	<a href="index.php" class="cerrarb">Cerrar Sesión</a>
</body>
</html>