<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Tipos de datos en  PHP</h2>
    <?php
    
    // enteros, coma flotante(.), cadenas, booleano
    //tipos especiales: null y recurso
    // tipos compuestos: objeto

    $x=12;
    $y=3.56;
    $z="hola Pepe";
    $n=null;
    echo "$x $y $z $n";
    
    // la funcion print imprime igual que echo

    print("</br>");
    print($x ." ". $y);
    
    // var_dump devuelve el tipo de dato y valor de una variable

    echo "<p> var_dump($x) </p>";
    echo "<p> var_dump($y) </p>";
    echo "<p> var_dump($z) </p>";
    echo "<p>". var_dump($n) ."</p>";

    var_dump($n);
    
    ?>


    <h2>Operadores matematicos</h2>

    <?php 
    
    // SUMA+, RESTA-,MULTI*, DIVISION/, MODULO%, EXPOENENTE**

    $num1=3;
    $num2=2.5;
    
    echo '<br> Suma :             ' . ($num1 + $num2);   
    echo '<br> Resta :             ' . $num1 - $num2;   
    echo '<br> Multiplicacion :             ' . $num1 * $num2;   
    echo '<br> Division :             ' . $num1 / $num2;   
    echo '<br> Modulo :             ' . $num1 % $num2;   
    echo '<br> Exponente :             ' . $num1 ** $num2;  
    
    /******* */
    
    echo '<br>' . 3 * (5+2);

    echo "<h3> operadores de incremento y decremento </h3>";

    // es distinto que el operador este delante o detras de la variable

    $num1=3;
    $num2=2.5;

    echo "<br> incremento " . $num1++;
    echo "<br>-->      " . $num1;

    echo "<br> incremento " . ++$num1;
    echo "<br>-->      " . $num1;

    echo "<br> decremento " . $num1--;
    echo "<br>-->      " . $num1;

    echo "<br> decremento " . --$num1;
    echo "<br>-->      " . $num1;


    echo "<h3> operadores de cadena es el punto</h3>";

    $cad="HOLA ";
    $cad= $cad . "Amigos";
    echo "<br> ----> " . $cad;

    echo "<h3> operadores de comparacion o relacionales</h3>";

    $x=45;
    $y=3;
    $z="3";

    // Operador Ternario

    $resul = ($y==$z) ? 'son iguales' : 'Son distintos';
    echo "<br> ---> " . $resul;

    $resul = ($y===$z) ? 'son iguales' : 'Son distintos';
    echo "<br> ---> " . $resul;

    echo('<br>');
    echo($x < $y ? '$x es menor que $y' : '$y es menor que $x')


    
    
    ?>




</body>
</html>