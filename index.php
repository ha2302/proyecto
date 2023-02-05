<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Log In</title>
</head>
<body class="bodyindex" background="imagenes/hollowknight.jpg">
  <div id="espacio">
    <div class="iniciar">
      <h1>iniciar Sesión</h1>
    </div>

    <form action="validar.php" method="post">
      <input type="text" name="usuario" placeholder="Username" class="usuario">
      <br><br>
      <input type="password" name="contra" placeholder="Password" class="contra">
      <br><br>
      <input type="submit" value="Log in" class="btn" />
    </form>

    <div class="registrar">
      <div class="texto">
        ¿No tienes una cuenta? <a href="registrar.php">Registrarse</a>
      </div>
    </div>
  </div>
</body>
</html>