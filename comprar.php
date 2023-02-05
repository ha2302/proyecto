<?php
	if (isset($_POST['id_juego'])) {
		$id_juego=$_POST['id_juego'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Comprar</title>
</head>
<body class="bodycomprar">
    <form action="factura.php">
        <?php
            $id_juego=$_GET['id_juego'];
            $conexion = mysqli_connect("localhost","root","","proyecto_graduacion") or die("Problemas con la conexión");
            $consulta = "SELECT * FROM juegos WHERE id_juego=$id_juego";
            $registros = mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento".mysqli_error($conexion));
                
            while ($datos = mysqli_fetch_array($registros)) {
                echo "<h1 class='nombrejuego'>".$datos['nombre_juego']."</h1>";
                echo "<div class='descripcion'>"."Descripción: ".$datos['descripcion']."</div>";
                echo "<img class='imagencompra' src='$datos[portada]'>";
                echo "<div class='especificaciones'>";
                echo "<div>"."Género: ".$datos['genero']."</div>";
                echo "<p>";
                echo "<div>"."Plataforma: ".$datos['plataforma']."</div>";
                echo "<p>";
                echo "<div>"."Fecha de lanzamiento: ".$datos['fecha_lanzamiento']."</div>";
                echo "<p>";
                echo "<div>"."Precio: $".$datos['precio']."</div>";
                echo "</div>";                
                echo "<div class='botones'>";
                echo "<a class='btn1' href='factura.php ? id_juego=$datos[id_juego]'>Comprar</a>";
                echo "<a class='btn2' href='cuenta_usuario.php ? id_juego=$datos[id_juego]'>Cancelar</a>";
                echo "</div>";
                
                
            }
            mysqli_close($conexion);
        ?>
    </form>	
</body>
</html>