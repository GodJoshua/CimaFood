<!-- update -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");


$estatus = $_POST['estatus'];
$id = $_POST['id'];
$consulta = "UPDATE negocio SET idestatus = '$estatus' WHERE idusuarios = '$id'";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
if ($resultado) {
    echo '<script>alert("Estatus actualizado correctamente")</script>';
    header("Location: index.php", TRUE, 301);
exit();
} else {
    echo '<script>alert("Error al actualizar estatus")</script>';
    header("Location: index.php", TRUE, 301);
exit();
}

