
<!-- mostrar que estas conectado a la base de datos con html -->
<?php
$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
 mysqli_close($conexion);
 ?>
 
