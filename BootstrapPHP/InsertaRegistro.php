<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<?php

    include('Conexion.php');
    

// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['apellido']) && !empty($_POST['apellido']) &&	
    isset($_POST['pais']) && !empty($_POST['pais']) &&
    isset($_POST['departamento']) && !empty($_POST['departamento']) &&
    isset($_POST['ciudad']) && !empty($_POST['ciudad']) &&
    isset($_POST['telefono']) && !empty($_POST['telefono']) &&
    isset($_POST['email']) && !empty($_POST['email'])
    ) {
                            echo   $_POST['nombre'].$_POST['apellido'].$_POST['pais'].$_POST['departamento'].$_POST['ciudad'].$_POST['telefono'].$_POST['email']
                                ;
    // Si entramos es que todo se ha realizado correctamente
    // Con esta sentencia SQL insertaremos los datos en la base de datos

        $query = "INSERT INTO usuario (nombre, apellido, pais, departamento, ciudad, telefono, email) VALUES
                                ('".$_POST['nombre']."',
                                '".$_POST['apellido']."',
                                '".$_POST['pais']."',
                                '".$_POST['departamento']."',
                                '".$_POST['ciudad']."',
                                '".$_POST['telefono']."',
                                '".$_POST['email']."'
                                )";
        echo $query."<br>";
        if (!mysqli_query($con,"INSERT INTO usuario (nombre, apellido, pais, departamento, ciudad, telefono, email) VALUES
                                ('".$_POST['nombre']."',
                                '".$_POST['apellido']."',
                                '".$_POST['pais']."',
                                '".$_POST['departamento']."',
                                '".$_POST['ciudad']."',
                                '".$_POST['telefono']."',
                                '".$_POST['email']."'
                                )"))
            {
            echo("Error description: " . mysqli_error($con));
            }
        //$query = "UPDATE acsi_tkmAccionProyecto SET descripcion='$descripcion', fechaHora='', estado='$estado'  WHERE idAccion='10'  ";

        //print $query;
        $a=mysqli_query($con, $query) or die ("No se ha podido ejecutar la consulta");
        echo $a;
        
           echo ("<script LANGUAGE='JavaScript'>
                window.alert('El usuario ha sido guardado correctamente');
                window.location.href='Registro.php';
                </script>");
        
                //header('Location:Registro.php');
            
        
            
            

} else {

        echo "Error, no ha introducido todos los datos";
}

?>
</html>

