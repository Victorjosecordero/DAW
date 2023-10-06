<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Funciones definidas por el usuario</h3>
    <?php

        echo"<h4> FUNCIONES </h4>";

        function saludo($nom)  {
            echo "<p>¡Hola $nom!</p>";
        }
        saludo("Pepe");


        echo "<h4>Ejemplo 2</h4>";

        function producto($valor1,$valor2){
            return $valor1 * $valor2;
        }
        echo "<p>Productos de 2 numeros es: ". producto(2,3) . "</p>";





        function suma($n1,$n2,$n3){
            return $n1 + $n2 + $n3;
        }

        $val=[4,6,1];
    
        echo "<p>La suma es:". suma(...$val)."</p>";

        $val2=[1,2,3,4,5];
    
        echo "<p>La suma es:". suma(...$val2)."</p>";// coje solo los 3 primeros


        function sum(...$numeros){
            $acc=0;
            foreach($numeros as $n){
                $acc += $n;
            }
        return $acc;
        }
        echo sum(1,2,3,4);
    
    
    ?>
</body>
</html>