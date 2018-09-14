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
        <h1>
            <?php
            // Comentarios del codigo
            $PrimeraVariable = 2;
            $SegundaVariable = 5;
            $lenguaje="PHP";
            echo $PrimeraVariable." ".$PrimeraVariable."<br>".$SegundaVariable;
            ?>
        </h1>
        
        <p>
            <h2>
                <?php
                    // ----- Estructuras condicionales ----
                   if($PrimeraVariable<1)
                    {
                       echo 'Soy Menor';
                    }
                    else
                    {
                        echo 'Soy Mayor';
                    }
                    
                    switch ($lenguaje)
                    {
                        case "PHP":
                            echo 'PHP';
                            break;
                        case "JavaScript":
                            echo 'JavaScript';
                            break;
                        case "HTML5":
                            echo 'HTML5';
                            break;
                    }
                    //----- Arreglos ------
                ?>
            </h2>
        </p>
    </body>
</html>
