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
</body>
</html>