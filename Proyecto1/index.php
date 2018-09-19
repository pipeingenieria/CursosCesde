<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Operaciones con Arrays
        $lenguajes=['html','css','Javascript'];
        
        //agregar nuevos elementos al array
        $lenguajes[]='python';
        print_r($lenguajes);
        echo '<br>';
        echo '<pre>';
        var_dump($lenguajes);
        echo '</pre>';
        
        //----Creando Funciones en PHP --------
        function saludar(){
            echo '<h2>'."Que Hubo Perrooo".'</h2>';
        }
        saludar();
       
        //--- Funcion con parametros ----
        function usuario($nombres,$telefono){
            foreach ($nombres as $nombre){
                echo 'Nombre: '.$nombre.'<br>';
            }
            echo 'Telefono: '.$telefono.'<br>';
        }
        $nombres=['Juan','Felipe','Andres'];
        usuario($nombres,123456);
        
        ?>
    </body>
</html>
