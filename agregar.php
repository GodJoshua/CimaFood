
*<!-- obtener datos de un formulario html -->
<?php

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$image = $_FILES['image']['tmp_name'];
$img_content = addslashes(file_get_contents($image));
$precio = $_POST['precio'];

?>

 *<!-- insertar datos en la base de datos -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
$consulta = "INSERT INTO productos (Nombre_Producto, Descripcion_Producto, cantidad, idCategoria, imagen, precio) VALUES ('$nombre', '$descripcion', '$cantidad', '$categoria', '$image', '$precio')";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>

