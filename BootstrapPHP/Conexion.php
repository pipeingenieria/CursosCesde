<?php
    $host_db = "localhost:3306"; // Host de la BD
    $usuario_db = "root"; // Usuario de la BD
    $clave_db = ""; // Contraseña de la BD
    $nombre_db = "veterinaria"; // Nombre de la BD
    
      //conectamos y seleccionamos db
        $con=mysqli_connect($host_db, $usuario_db, $clave_db,$nombre_db);
        // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
?>