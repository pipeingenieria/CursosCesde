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
        // put your code here
        class Coche{
            public $ruedas;
            private $color;
            public $motor;
            //Constructor de la clase
            public function _construct(){
                $this->color='rojo';
                $this->ruedas=4;
            }
        }
        function arrancar(){
            echo "Estoy Arrancando";
        }
        
        $carro = new Coche();
        $carro->arrancar();
        echo $carro->ruedas;
        ?>
    </body>
</html>
