<!-- crud  -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
 mysqli_close($conexion);
 ?>

<!-- mostrar datos de la base de datos -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)) {
    echo $fila['Nombre_Producto'] . "<br>";
    echo $fila['Descripcion_Producto'] . "<br>";
    echo $fila['cantidad'] . "<br>";
    echo $fila['idCategoria'] . "<br>";
    echo $fila['imagen'] . "<br>";
    echo $fila['precio'] . "<br>";
}
mysqli_close($conexion);
?>

<!-- actualizar datos de la base de datos -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$consulta = "UPDATE productos SET Nombre_Producto = 'arroz' WHERE idProducto = 1";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>

<!-- eliminar datos de la base de datos -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$consulta = "DELETE FROM productos WHERE idProducto = 1";
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>

<!-- buscar datos de la base de datos -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$consulta = "SELECT * FROM productos WHERE idProducto = 1";
$resultado = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)) {
    echo $fila['Nombre_Producto'] . "<br>";
    echo $fila['Descripcion_Producto'] . "<br>";
    echo $fila['cantidad'] . "<br>";
    echo $fila['idCategoria'] . "<br>";
    echo $fila['imagen'] . "<br>";
    echo $fila['precio'] . "<br>";
}
mysqli_close($conexion);
?>

