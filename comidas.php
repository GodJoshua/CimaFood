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
<?php require 'header.php' ?>
      <!--Tarjetas con imagenes   -->
<?php $link = new PDO('mysql:host=localhost;dbname=cimafood', 'root', 'arath123'); 
?>
<?php foreach ($link->query('SELECT * from negocio') as $row){  ?> 
<div class="container" display:inline-block; margin-top: 50px;>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                    <div align="center" ><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen_negocio']); ?>" width="200" height="150" > </div>
                        <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text" align="center"><b><?php echo $row['nombre_negocio'] ?></p></b>
                        <p>Descripcion del Negocio</p> <p class="text-success"><?php echo $row['descripcion_negocio'] ?></p> 
                        <p >Estatus:</p> <p class="text-success"><?php echo $row['idestatus'] ?></p> 
                        <p >Usuario:</p> <p class="text-success"><?php echo $row['idusuarios'] ?></p> <!-- (Debo cambiarle para que salga el nombre del usuario) -->
                        <p >horario:</p> <p class="text-success"><?php echo $row['horario_venta'] ?></p>     
                        </div>
                        <div class="card-footer" align="center">
                        <a href="#" class="btn btn-primary">Ir a productos</a></div>
</div>
</div>
</div>
</div>
                        <?php
}?>


</body>
</html>