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



$consulta = "SELECT * FROM negocio";
$resultado = mysqli_query($conexion, $consulta);
while ($row = mysqli_fetch_array($resultado)) {
    $id = $row['idnegocio'];
    $horario = $row['horario_venta'];
    $horarioinicio = $row['horario_inicio'];
    $estatus = $row['idestatus'];
    $hora = date("H:i:s");
    if ($hora >= $horarioinicio && $hora <= $horario) {
        $consulta = "UPDATE negocio SET idestatus = 1 WHERE idnegocio = '$id'";
        $resultado = mysqli_query($conexion, $consulta);
    } else {
        $consulta = "UPDATE negocio SET idestatus = 2 WHERE idnegocio = '$id'";
        $resultado = mysqli_query($conexion, $consulta);
    }
}
mysqli_close($conexion);


?>
<!-- Camabiar el estatus dependiendo de la hora -->

