
<?php

$conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");

$id = "";
$nombre = "";
$descripcion = "";
$cantidad = "";
$precio = "";

$php_errormsg = "";
$succesMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        header("Location: index.php", TRUE, 301);
        $id = $_GET['id'];
}
    
}
else{

    $id = $row['idproductos'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    do{
        if (empty($nombre)){
            $php_errormsg = "El nombre no puede estar vacio";
            break;
        }
        if (empty($descripcion)){
            $php_errormsg = "La descripcion no puede estar vacia";
            break;
        }
        if (empty($cantidad)){
            $php_errormsg = "La cantidad no puede estar vacia";
            break;
        }
        if (empty($precio)){
            $php_errormsg = "El precio no puede estar vacio";
            break;
        }
        $sql = "UPDATE productos SET Nombre_Producto = '$nombre', Descripcion_Producto = '$descripcion', cantidad = '$cantidad', precio = '$precio' WHERE idproductos = '$id'"; 
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado){
            $succesMessage = "Producto modificado correctamente";
        }
        else{
            $php_errormsg = "Error al modificar producto";
        }

        


      
    }while(false);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CimaFood</title>
   <!-- Bootstrap 5 y javascript  -->
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
<!-- requerir header -->
<?php require 'header.php' ?>


        <!-- Empieza el formulario -->
        <!-- Agregar un formulario que me permita agregar una imagen -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="editarproductos.php" method="POST" action="agregar.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre;?>" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe el nombre del producto</small> <!-- ayuda para el usuario -->  
                        </div>
                        <div class="form-group mt-3">
                            <label for="precio">Precio</label>
                            <input type="number" name="precio" id="precio" class="form-control" value="<?php echo $precio;?>" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe el precio del producto</small> <!-- ayuda para el usuario -->  
                        </div> 
                        <div class="form-group mt-3">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion;?>" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe la descripcion del producto</small> <!-- ayuda para el usuario -->    
                        </div>
                        <div class="form-group mt-3">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" value="<?php echo $cantidad;?>" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Cauntas piezas hay</small> <!-- ayuda para el usuario -->    
                        </div>
                        <input type="hidden" name="id" value="<?= $user['idProductos'] ?>">
                        <button type="submit" class="btn btn-success mt-3">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Termina el formulario -->
        <!-- Empieza el footer -->

    
</body>
</html>