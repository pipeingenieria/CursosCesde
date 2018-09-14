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
        
        <h2>
            <?php
                // ----- Estructuras condicionales ----
               if($PrimeraVariable<1)
                {
                   echo 'Soy Menor'."<br>";
                }
                else
                {
                    echo 'Soy Mayor'."<br>";
                }

                switch ($lenguaje)
                {
                    case "PHP":
                        echo 'PHP'."<br>";
                        break;
                    case "JavaScript":
                        echo 'JavaScript'."<br>";
                        break;
                    case "HTML5":
                        echo 'HTML5'."<br>";
                        break;
                }
                //----- Arreglos ------
                $arreglo =[2,'Hola',5];
                echo $arreglo[1]."<br>"; 

                $variable=array("css","Jquery","PHP","MySql");
                echo $arreglo[2]."<br>"; 
            ?>
        </h2>
        <h1>
            <pre>
                <h3>
                    <?php
                        print_r($arreglo);
                        var_dump($arreglo);
                        $dato1=  array_pop($arreglo);
                                
                        //ARREGLOS ASOCIATIVOS
                        $usuario=array('nombre'=>"Felipe",'Apellidos'=>"Hernandez",'cedula'=>123456);
                        echo $usuario."<h1>".$usuario['nombre']."</h1>";
                        echo 'ppppppppppppp'."<br>";
                        
                        $existe=in_array('', array_values($usuario));
                        var_dump ("Existe".$existe);
                        
                        //RECORRIENDO ARREGLOS --- ForEach
                        
                        foreach($usuario AS $user){
                            echo $user."<br>";
                        }
                    ?>
                </h3>
            </pre>
        </h1>
        </p>
    </body>
</html>
