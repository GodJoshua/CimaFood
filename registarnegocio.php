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
        <!-- Boton que me mande a otra pagina -->
        <a href="agregar.html" class="btn btn-outline-success" type="submit">Agregar productos</a>


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
        <!-- Termina la navbar -->
<!-- script para confirmar enviar formulario -->
<script>
    function confirmar(){
        var respuesta = confirm("¿Estas seguro de enviar el formulario?");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
<!-- Termina script para confirmar enviar formulario -->

        <!-- Empieza el formulario -->
        <!-- Agregar un formulario que me permita agregar una imagen -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="agregarnegocio.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre del negocio</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe el nombre del producto</small> <!-- ayuda para el usuario -->  
                        </div>
                        <div class="form-group mt-3">
                            <label for="precio">horario de inicio</label>
                            <input type="time" name="horarioinicio" id="horarioinicio" class="form-control" placeholder="Precio" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe a que horas empiezas a vender</small> <!-- ayuda para el usuario -->  
                        </div> 
                        <div class="form-group mt-3">
                            <label for="precio">horario de cierre</label>
                            <input type="time" name="horario" id="horario" class="form-control" placeholder="Precio" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe a que hora cierras el changarro</small> <!-- ayuda para el usuario -->  
                        </div> 
                        <div class="form-group mt-3">
                            <label for="imagen">Imagen del negocio</label>
                            <input type="file" name="imagen" id="imagen" class="form-control" placeholder="Imagen" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Sube una imagen del producto</small> <!-- ayuda para el usuario -->
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Escribe la descripcion del producto</small> <!-- ayuda para el usuario -->    
                        </div>
                        <div class="form-group mt-3">
                        <select name="usuario" id="usuario" class="form-control">
                            <label for="usuario"> Usuario </label>
                            <option selected>Selecciona tu nombre</option>
                            <?php 
                                $conexion = mysqli_connect("localhost", "root", "arath123", "cimafood");
                                mysqli_set_charset($conexion, "utf8");
                                
                                $consulta = "SELECT idusuarios, nombre, apellidoPat, apellidoMat FROM usuarios ORDER BY idusuarios ASC";
                                $resultado = mysqli_query($conexion,$consulta);
                                while ($row = mysqli_fetch_array($resultado))
                                {
                                    $nombre = $row['nombre'];
                                    $pat = $row['apellidoPat'];
                                    $mat = $row['apellidoMat'];
                                    $id = $row['idusuarios'];
                                    
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $nombre, " ", $pat," ", $mat; ?></option>
                                    <?php

                                }
                                ?>
                            </select>
                        </div>
                           
                    <input type="submit" value="enviar" class="btn btn-success mt-3" onclick="return confirmar() " >
                    </form>
                </div>
            </div>
        </div>
        <!-- Termina el formulario -->
        <!-- Empieza el footer -->

    
</body>
</html>