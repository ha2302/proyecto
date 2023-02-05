<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <script type="text/javascript" src="js/funciones.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Comprar</title>
</head>
<body class="bodyfactura">

    
    <div class='fact'>
        <form action="cuenta_usuario.php">
            <?php
                $nid=$_GET['id_juego'];
			    $conexion=mysqli_connect("localhost", "root", "", "proyecto_graduacion") or die("Error de conexión");
			    $consulta="SELECT * FROM juegos WHERE juegos.id_juego=$nid";
			    $registros=mysqli_query($conexion, $consulta) or die("Problemas con el almacenamiento ".mysqli_error($conexion));
			    while ($fila=mysqli_fetch_array($registros)) {
                    echo"<h1 class='hola'>¡GRACIAS!</h1>";
                    echo"<div class='factblanco'>";
                    echo"<h2>Hola</h2>";
                    echo"<h3>Gracias por tu compra en GamerStore International.</h3>";
                    echo"<h3>(Guarda una copia de este recibo como referencia)</h3>";
                    echo"<h3>Información sobre la compra:</3>";
                    echo "<p>";
                    echo "Nombre del juego: ".$fila['nombre_juego']."";
                    echo "<p>";
                    echo "Género: ".$fila['genero']."";
                    echo "<p>";
                    echo "Plataforma disponible: ".$fila['plataforma']."";
                    echo "<p>";
                    echo "Total pagado: $.".$fila['precio']."";
                    echo "<p>";
                    echo"</div>";                
			    }
			    mysqli_close($conexion);
		    ?>
            <input class="acepta" type="submit" value="Aceptar">
        </form>	
        <br>
        <button class="imprime" onclick="imprimir()">Imprimir Factura</button>
    </div>
</body>
</html>