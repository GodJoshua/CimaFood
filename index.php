<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['usuario_id'])) {
    $records = $conn->prepare('SELECT idusuarios, correo, psw FROM usuarios WHERE idusuarios = :id');
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


    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['correo']; ?>
      <br>Has iniciado sesion
        <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Inicia Sesion o Registrate</h1>

      <a href="login.php">Iniciar Sesion</a> or
      <a href="signup.php">Registrarse</a>
    <?php endif; ?>

      <!-- titulo en medio de la pagina color amarillo -->
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h1 class="text-center text-warning">Cafeteria</h1>
            </div>
            </div>
        </div>
        <!-- fin titulo -->
    <!-- 3 botones grandes centrales uno abajo de otro -->
    <div class="container " id="botones">
        <div class="row">
            <div class="col-4">
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="location.href='negocio.php'">Desayunos</button>
            </div>
            </div>
            <div class="row">
            <div class="col-4">
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="location.href='comidas.php'">Comidas</button>
            </div>
            </div>
            <div class="row">
            <div class="col-4">
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="location.href='bebidas.php'">Bebidas</button>
            </div>

        </div>
    </div>
    <!-- fin botones -->
<!-- boton con icono de mapa en la esquina inferior izquierda -->
    <div class="container" id="mapa">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-success btn-lg btn-block"><i class="fas fa-map-marker-alt"></i></button>
            </div>
        </div>
    </div>




    


</body>
</html>
