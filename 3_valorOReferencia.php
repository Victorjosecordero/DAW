<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>Asignación por valor o por referencia a varaibles</h2>
<?php
    // Operacion de asignacion

    $y= ($x=23) + 2;

    echo "$x $y";
    print('</br>');


    //ejercicio de asignacion por valor o referencia

    $nom= 'Ana';
    $nom1= $nom;
    echo "$nom  $nom1";

    $nom1= 'Pepe';
    echo "<br> $nom $nom1";

    $nom2=&$nom; //asignacion de referencia, apunta a la posicion de memoria que la variable nom

    echo "</br> $nom $nom2";
    $nom='Luis';
    echo "</br> $nom $nom2";


    // funciones para sabeer longitud de un string

    echo '</br> Longitud de $nom    '. strien($nom);




    ?>
</body>
</html>