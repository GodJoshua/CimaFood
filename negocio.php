<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = mysqli_connect("localhost", "root", "arath123", "cimafood");
?>
<?php
$consultar = "SELECT * FROM negocio";
?>
<div class="container >
        <h2 class="text-center all-tittles">listado de vendedores</h2>

        
           <?php 
           $resultado = mysqli_query($link,$consultar);

            $contador = 0;

            while($fila = mysqli_fetch_array($resultado)){
                $idnegocio         = $fila['idnegocio'];
                $nombre_negocio          = $fila['nombre_negocio'];
                $horario_venta         = $fila['horario_venta'];
                $imagen_negocio            = $fila['imagen_negocio'];
                $descripcion_negocio        = $fila['descripcion_negocio'];

                $contador++;
                echo '<div class="div-table-row">';
                echo '<div class="div-table-cell">'.$idnegocio.'</div>';
                echo '<div class="div-table-cell">'.$nombre_negocio.'</div>';
                echo '<div class="div-table-cell">'.$horario_venta.'</div>';
                echo '<div class="div-table-cell">'.$imagen_negocio.'</div>';
                echo '<div class="div-table-cell">'.$descripcion_negocio.'</div>';
                echo '</div>';
                echo '</div>';
            }

        ?>
    </div>

       
</body>
</html>