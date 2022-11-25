<?php
  session_start();


  if (isset($_SESSION['usuario_id'])) {
   //asignar a variable
   $id = $_SESSION['usuario_id'];
  }
      
?>

<html> 
      <head>
         <title>Ejemplo de actualización de datos en base de datos MySQL</title>
         <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
      </head> 
 
      <body>
        <?php
        Include 'header.php';
        ?>
 
      <?php
 
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "arath123";
 
      // Nombre de la base de datos
      $baseDeDatos ="cimafood";
 
      // Nombre de la tabla a trabajar
      $tabla = "productos"; 
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 

      $link = Conectarse();

      if($_POST)
      {
         $queryUpdate = "UPDATE $tabla SET Nombre_Producto = '".$_POST['nombreForm']."',
                        Descripcion_Producto = '".$_POST['apellidoForm']."', precio = '".$_POST['precioForm']."', cantidad = '".$_POST['cantidadForm']."', idCategoria = '".$_POST['categoriaForm']."'
                        WHERE   idProductos = ".$_POST['idForm'].";";
 
         $resultUpdate = mysqli_query($link, $queryUpdate); 
 
         if($resultUpdate)
         {
            echo "<strong>El registro ID ".$_POST['idForm']." con exito</strong>. <br>";
         }
         else
         {
            echo "No se pudo actualizar el registro. <br>";
         }
 
      }

      $query = "SELECT * FROM $tabla INNER JOIN negocio where productos.idnegocio = negocio.idnegocio AND idusuarios = $id ;";
 
      $result = mysqli_query($link, $query); 
 
      ?>
 
      <table>
         <tr>
            <td>Nombre</td>
            <td>Descripcion_Producto</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Categoria</td>

         <tr>
 
      <?php
 
      while($row = mysqli_fetch_array($result))
      { 
         echo "<tr>";
         echo "<td>";
         echo $row["Nombre_Producto"];
         echo "</td>";
         echo "<td>";
         echo $row["Descripcion_Producto"];
         echo "</td>";
         echo "<td>";
         echo $row["precio"];
         echo "</td>";
         echo "<td>";
         echo $row["cantidad"];
         echo "</td>";
         if ($row["idCategoria"] == 1) {
            echo "<td>";
            echo "Desayuno";
            echo "</td>";
         }else if ($row["idCategoria"] == 2) {
            echo "<td>";
            echo "Comida";
            echo "</td>";
         }else if ($row["idCategoria"] == 3) {
            echo "<td>";
            echo "Bebidas";
            echo "</td>";
         }

         echo "<td>";
         echo "<a href=\"?actualizar=".$row["idProductos"]."\">Actualizar</a>";
         echo "</td>";
         echo "<td>";
         echo "<a href=\"?borrar=".$row["idProductos"]."\">Borrar</a> ";
         echo "</td>";
 
         echo "</tr>";
 
      } 
 
      mysqli_free_result($result); 
 
      ?>

      </table>
   </tr>
<?php

if(isset($_GET['borrar']))
{
   $queryDelete = "DELETE FROM $tabla WHERE idProductos = ".$_GET['borrar'].";";

   $resultDelete = mysqli_query($link, $queryDelete); 

   if($resultDelete)
   {
      echo "<strong>El registro se ha eliminado con exito</strong>.<br>";
   }
   else
   {
      echo "Hubo un problema borrando el registro.";
   }
}
?>
<?php
if($_GET['actualizar'])
      {
         $querySelectByID = "SELECT   idProductos, Nombre_Producto, Descripcion_Producto, precio,cantidad, idCategoria FROM $tabla WHERE   idProductos = ".$_GET['actualizar'].";";
 
         $resultSelectByID = mysqli_query($link, $querySelectByID); 
 
         $rowSelectByID = mysqli_fetch_array($resultSelectByID);
      ?>
 
      <form action="" method="post">
         <input type="hidden" value="<?=$rowSelectByID['idProductos'];?>" name="idForm">
         Nombre: <input type="text" name="nombreForm" value="<?=$rowSelectByID['Nombre_Producto'];?>"> <br> <br>
         Descripcion_Producto: <input type="text" name="apellidoForm" value="<?=$rowSelectByID['Descripcion_Producto'];?>"> <br> <br>
         Precio: <input type="text" name="precioForm" value="<?=$rowSelectByID['precio'];?>"> <br> <br>
         Cantidad: <input type="text" name="cantidadForm" value="<?=$rowSelectByID['cantidad'];?>"> <br> <br>
         Categoria: <select class="form-select" name="categoriaForm">
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Bebidas</option>
         </select>   <br> <br>

         <input type="submit" value="Guardar">
      </form>
 
      <?php
      }
      mysqli_close($link);
      ?>
      </body> 
      </html>


      