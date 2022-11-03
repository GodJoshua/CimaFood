
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");

?>
*<!-- obtener datos de un formulario html -->
<?php

$nombre = $_POST['nombre'];
$horario = $_POST['horario'];
$image = $_FILES['imagen']['tmp_name'];
$img_content = addslashes(file_get_contents($image));
$descripcion = $_POST['descripcion'];

?>

 *<!-- insertar datos en la base de datos -->
<?php

$consulta = "INSERT INTO negocio (nombre_negocio, horario_venta, imagen_negocio, descripcion_negocio) VALUES ('$nombre', '$horario', '$image', '$descripcion')";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>


