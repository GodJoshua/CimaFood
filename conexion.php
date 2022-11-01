*<!-- validar datos del servidor -->
<?php
$host = "localhost";
$user = "root";
$pass = "arath123";
$db = "cimafood";
$conexion = mysql_connect($host, $user, $pass) or die("Error al conectar con el servidor");
mysql_select_db($db, $conexion) or die("Error al conectar con la base de datos");
?>

*<!-- verificar la conexion a la base de datos y las tablas-->
<?php
$conexion = mysql_connect("localhost", "root", "arath123");
if (!$conexion) {
die('No se pudo conectar: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($conexion);
?>

