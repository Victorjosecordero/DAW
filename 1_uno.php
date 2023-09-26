<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $nom="clase";
        echo 'Hola mundo que tal  ' . $nom;
        //comentario de una linea
        #comentario de una linea
        /*Comentario de bloque */
        echo "<p>";
        echo("esto es una función");
        echo("</p>");

        //CONSTANTES. Se escriben en mayusculas por consenso y no empienzan por $

        define('PI',3.14);
        echo "<p>" . PI . "</p>";

        $radio= 3.5;
        echo "<p> Area del circulo: " . 2*PI . "</p>";

        const EURO= 166.86;

        echo "<p>" . EURO . "</p>";

    
    ?>

    <hr>
    <?php
        echo "<h3>Variables con PHP </h3>";

        //php es no tipado, el tipo de una variable es de tipo de valor que recibe

        $x= 12;
        echo $x;
        echo "<br>";

        $x= 25.896; // coma flotante
        echo $x;
        echo "<br>";

        $x= "pepe"; // string
        echo $x;
        echo "<br>";


        //es distinto usar comillas simples o doble con las varibles.
        //si utilizas comillas dobles, sustituye la variable por su valor

        echo "$x = ". $x . "<br />";

        echo "El valor de $x es: $x <br />"; //no estoy concatenando nada

        echo 'El valor de $x es: $x <br />';
        echo '$x = '.$x . "<br />";

        echo "El valor de \$x es: $x <br />"; // escapo el nombre de la varibale y ya me sale el nombre



        // uso de comillas dobles y simples en un mismo texto
        echo "El caballo 'saltarin' se llama bucéfalo";
        echo "</br>";
        echo "El caballo \"saltarin\" se llama bucéfalo";
    ?>
</body>
</html>