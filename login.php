

<!-- iniciar sesion -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood"); 
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if ($filas) {
  header("location: /proyecto");
} else {
  echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">Registrarse</a></span>

    <form action="login.php" method="POST">
      <input name="usuario" type="text" placeholder="Ingresa tu usuario">
      <input name="password" type="text" placeholder="ingresa tu contraseña">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>