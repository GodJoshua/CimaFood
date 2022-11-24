
*<!-- obtener datos de un formulario html -->
<?php


$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$precio = $_POST['precio'];
$negocio = $_POST['id'];

?>

 *<!-- insertar datos en la base de datos -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
$consulta = "INSERT INTO productos (Nombre_Producto, Descripcion_Producto, cantidad, idCategoria, imagen, precio, idnegocio) VALUES ('$nombre', '$descripcion', '$cantidad', '$categoria', '$image', '$precio', '$negocio')";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);


?>

<!-- mandar al index -->
<?php
if ($resultado) {
    echo '<script>alert("Producto agregado correctamente")</script>';
    header("Location: index.php", TRUE, 301);
exit();
} else {
    echo '<script>alert("Error al agregar producto")</script>';
    header("Location: index.php", TRUE, 301);
exit();
}
?>
