<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambito</title>
</head>
<body>

<h3></h3>

<?php


    echo '<h3> Ambito de las variables </h3>';
    echo '<h3> variables locales y globales </h3>';
    $cad1= "hola"; // variable local al programa principal

    function mensaje_1(){
    }
    echo $cad1; // la variable no es visible dentro de la funcion
    //mensaje 1(); // error al Llamar a la funcion

    function mensaje_2(){
    }
    $num= 123; // variable local a la funcion
    mensaje_2();
    //echo $num; // no puedo ver la variable local a la funcion
    echo '<h3> puedo visualizar una variable local a una funcion declarandola como global </h3>';
    function mensaje_3(){
    }
    global $num1; // variable global a la funcion
    $num1= 456; // la asignacion tiene que ser separada
    echo $num1;
    mensaje_3();
    echo "<p> la variable global ahora es visible fuera de la funcion</p>"; echo $num1;
    //de esta forma no tiene sentido
    global $num2;
   
    function mensaje_4(){
    }
    $num2=888; // realmente es una variable local a la funcion
    mensaje_4();

    echo "<p>usar el array \$GLOBALS</p>";
    $nombre = "Pepe";
    $edad= 23;
    
    function mensaje_5(){
    // este array almaccena todas las variables declaradas en el programa. El indice es el nombre y el valor es el contenido
    echo $GLOBALS["nombre"] . "<br>";
    echo $GLOBALS["edad"] . "<br>";
    }
    mensaje_5();
    function test(){
        static $a=0;
        echo $a;
        $a++;
    }
    echo test().  "<br>";
    echo test().  "<br>";
    echo test().  "<br>";
    echo test().  "<br>";
    echo test().  "<br>";


    echo factorial(4). '<br>';

    function factorial($n){
        if($n==1){
            return 1;
        }else{
            return $n * factorial($n-1);
        }
    }

    $num1=4;
    $num2=2;

    function sumar($num1,$num2){
        $num1 = $num1 + 2;
        return $num1 + $num2;
    }
    echo 'Paso por referencia<br>';

    echo sumar($num1,$num2). '<br>';
    echo $num1. '<br>';

    function sumar2(&$num1,$num2){
        $num1 = $num1 + 2;
        return $num1 + $num2;
    }


    echo sumar2($num1,$num2). '<br>';
    echo $num1. '<br>';



?>
    
</body>
</html>