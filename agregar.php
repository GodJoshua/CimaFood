*<!-- obtener datos de un formulario html -->
// <?php
// $nombre = $_POST['nombre'];
// $apellido = $_POST['apellido'];
// $edad = $_POST['edad'];
// $sexo = $_POST['sexo'];
// $direccion = $_POST['direccion'];
// $telefono = $_POST['telefono'];
// $email = $_POST['email'];
// $usuario = $_POST['usuario'];
// $password = $_POST['password'];
// ?>
//
// *<!-- insertar datos en la base de datos -->
// <?php
// $conexion = mysql_connect("localhost", "root", "arath123");
// mysql_select_db("cimafood", $conexion);
// mysql_query("INSERT INTO usuarios (nombre, apellido, edad, sexo, direccion, telefono, email, usuario, password)
// VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$direccion', '$telefono', '$email', '$usuario', '$password')");
// mysql_close($conexion);
// ?>
//
// *<!-- mostrar datos de la base de datos -->
// <?php
// $conexion = mysql_connect("localhost", "root", "arath123");
// mysql_select_db("cimafood", $conexion);
// $result = mysql_query("SELECT * FROM usuarios");
// while ($row = mysql_fetch_array($result)) {
// echo $row['nombre'] . " " . $row['apellido'];
// echo "<br />";
// }
// mysql_close($conexion);
// ?>
//
// *<!-- eliminar datos de la base de datos -->
// <?php
// $conexion = mysql_connect("localhost", "root", "arath123");
// mysql_select_db("cimafood", $conexion);
// mysql_query("DELETE FROM usuarios WHERE id = '$id'");
// mysql_close($conexion);
// ?>
//
// *<!-- actualizar datos de la base de datos -->
// <?php
// $conexion = mysql_connect("localhost", "root", "arath123");
// mysql_select_db("cimafood", $conexion);
// mysql_query("UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', edad = '$edad', sexo = '$sexo', direccion = '$direccion', telefono = '$telefono', email = '$email', usuario = '$usuario', password = '$password' WHERE id = '$id'");
// mysql_close($conexion);
// ?>
//
// *<!-- buscar datos de la base de datos -->
// <?php
// $conexion = mysql_connect("localhost", "root", "arath123");
// mysql_select_db("cimafood", $conexion);
// $result = mysql_query("SELECT * FROM usuarios WHERE nombre = '$nombre'");
// while ($row = mysql_fetch_array($result)) {
// echo $row['nombre'] . " " . $row['apellido'];
// echo "<br />";
// }
// mysql_close($conexion);
// ?>
//
// 