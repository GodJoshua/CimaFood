
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");

?>
*<!-- obtener datos de un formulario html -->
<?php

$nombre = $_POST['nombre'];
$horarioinicio = $_POST['horarioinicio'];
$horario = $_POST['horario'];
$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$descripcion = $_POST['descripcion'];
$usuario = $_POST['usuario'];

?>

 *<!-- insertar datos en la base de datos -->
<?php

$consulta = "INSERT INTO negocio (nombre_negocio, horario_inicio, horario_venta, imagen_negocio, descripcion_negocio, idusuarios) VALUES ('$nombre', '$horarioinicio', '$horario', '$image', '$descripcion', '$usuario')";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>

<!-- mensaje para mostrar si se agrego algo a la base de datos -->
<?php
if ($resultado) {
    echo '<script>alert("Negocio agregado correctamente")</script>';
    header("Location: index.php", TRUE, 301);
exit();
} else {
    echo '<script>alert("Error al agregar negocio")</script>';
    header("Location: registarnegocio.php", TRUE, 301);
exit();
}
?>


