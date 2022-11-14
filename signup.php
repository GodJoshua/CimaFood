
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");

?>
*<!-- obtener datos de un formulario html -->
<?php

$correo = $_POST['correo'];
$contra = $_POST['psw'];
$nombre = $_POST['nombre'];
$apellidopat = $_POST['apellidopat'];
$apellidomat = $_POST['apellidomat'];
$facultad = $_POST['facultad'];

?>

<!-- insertar datos en la base de datos -->
<?php

$consulta = "INSERT INTO usuarios (correo, psw, nombre, apellidoPat, apellidoMat, idfacultades) VALUES ('$correo', '$contra', '$nombre', '$apellidopat', '$apellidomat', '$facultad')";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>
<?php
// index.php
header("Location: registarnegocio.php", TRUE, 301);
exit();
?>


