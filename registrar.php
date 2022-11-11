<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
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

<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="signup.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="correo">correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe tu correo</small> 
                        <div class="form-group mt-3">
                            <label for="psw">Contraseña</label>
                            <input type="password" name="psw" id="psw" class="form-control" placeholder="Password" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe tu contraseña</small>  
                        </div> 
                        <div class="form-group mt-3">
                            <label for="nombre">Nombre del usuario</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe tu nombre</small> 
                        </div>
                        <div class="form-group mt-3">
                            <label for="apellidopat">Apellido Paterno</label>
                            <input type="text" name="apellidopat" id="apellidopat" class="form-control" placeholder="Apellido Paterno" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe tu apellido paterno</small>    
                        </div>
                        <div class="form-group mt-3">
                            <label for="apellidomat">Apellido Materno</label>
                            <input type="text" name="apellidomat" id="apellidomat" class="form-control" placeholder="Apellido Materno" aria-describedby="helpId" >
                            <small id="helpId" class="text-muted">Escribe tu apellido materno</small>    
                        </div>
                            
                            <select name="facultad" id="facultad" class="form-control">
                            <label for="facultad"> Facultad </label>
                            <option selected>Selecciona una categoria</option>
                            <?php 
                                $conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
                                mysqli_set_charset($conexion, "utf8");
                                
                                $consulta = "SELECT * FROM facultades ORDER BY facultad ASC";
                                $resultado = mysqli_query($conexion,$consulta);
                                while ($row = mysqli_fetch_array($resultado))
                                {
                                    $idfacultad = $row['idfacultades'];
                                    $facultad = $row['facultad'];
                                    
                                    ?>
                                    <option value="<?php echo $idfacultad; ?>"><?php echo $facultad; ?></option>
                                    <?php

                                }
                                ?>
                            </select>
                        
                        <button type="submit" class="btn btn-success mt-3 ">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
<!-- Mostrar datos en una lista desplegable Select con PHP y MySQL -->


</body>
</html>


