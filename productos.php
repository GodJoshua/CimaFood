<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['usuario_id'])) {
    $records = $conn->prepare('SELECT * from negocio INNER JOIN usuarios WHERE negocio.idusuarios = usuarios.idusuarios AND usuarios.idusuarios = :id');
    $records->bindParam(':id', $_SESSION['usuario_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
    else {
      $message = 'Algo pasa';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        include 'header.php';
    ?>
    <?php $link = new PDO('mysql:host=localhost;dbname=cimafood', 'root', 'arath123'); 
?>
<?php foreach ($link->query('SELECT * from productos INNER JOIN negocio WHERE negocio.idnegocio = productos.idnegocio ') as $row){  ?>  
<div class="container" display:inline-block; margin-top: 50px;>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                    <div align="center" ><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" width="200" height="150" > </div>
                        <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text" align="center"><b><?php echo $row['Nombre_Producto'] ?></p></b>
                        <p>Descripcion del Negocio</p> <p class="text-success"><?php echo $row['Descripcion_Producto'] ?></p> 
                        <p >Cantidad Disponible:</p> <p class="text-success"><?php echo $row['cantidad'] ?></p> 
                        <p >Precio del Producto:</p> <p class="text-success"><?php echo $row['precio'] ?></p>
                        <p >Nombre del Negocio:</p> <p class="text-success"><?php echo $row['nombre_negocio'] ?></p>
                        </div>
                        <div class="card-footer" align="center">
                        </div></div></div></div>
                        <?php
}?>


    
</body>
</html>