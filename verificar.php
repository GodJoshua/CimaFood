<?php      
    include('conexion.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conexion, $username);  
        $password = mysqli_real_escape_string($conexion, $password);  
      
        $sql = "select *from usuarios where correo = '$username' and psw = '$password'";  
        $result = mysqli_query($conexion, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            header("Location: index.php");
             
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  