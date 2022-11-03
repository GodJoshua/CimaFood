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
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-succes p-4">
          <h5 class="text-white h4">Buscador de comida OwO</h5>
          <span class="text-muted">Que deseas de comer uwu</span>
          <!-- agregar barra de busqueda -->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar owo</button> <!-- ya que implemente la base de datos veo que pedo alv -->
                </form>
        <!-- se acaba barra de busqueda -->

        </div>
      </div>
      <!-- La navbar -->
      <nav class="navbar navbar-succes bg-success">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="container">
            <h1 class="text-center text-warning" > <a href="index.php" style="color:#FFC300; text-decoration: none" >CimaFood</a></h1>

        </div>
        </div>
        
      </nav>
      <!--Tarjetas con imagenes   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/demoimg.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Tienda de Joshua</h5>
                        <p class="card-text">Joshua Meltz</p>
                        <a href="#" class="btn btn-primary">Ver productos</a>
                        <p >Estatus:</p> <p class="text-success">Abierto</p>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $link = new PDO('mysql:host=localhost;dbname=cimafood', 'root', 'arath123'); 
?>
<?php foreach ($link->query('SELECT * from negocio') as $row){  ?> 
<div class="container" display:inline-block; margin-top: 50px>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><?php echo $row['nombre_negocio'] ?></p>
                        <p >Descripcion del Negocio:</p> <p class="text-success"><?php echo $row['descripcion_negocio'] ?></p> 
                        <p >Estatus:</p> <p class="text-success"><?php echo $row['idestatus'] ?></p> 
                        <p >Correo:</p> <p class="text-success"><?php echo $row['correo'] ?></p>
                        <p >horario:</p> <p class="text-success"><?php echo $row['horario_venta'] ?></p>     
                        <?php
}
?>
<a href="#" class="btn btn-primary">Ir a productos</a>
</div>
</div>
</div>
</div>
</div>

</body>
</html>