<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Una funcion que reciba un numero y devuelva si es par 0 impar
    
    function parOImpar($num) {
        if($num % 2 == 0){
            return "Par";

        }else{
            return "Impar";
        }
        
    }

    echo "<p>El numero es: ". parOImpar(22) ."</p>";
    

    // Una funcion que reciba 3 numeros y devuelva el menor
    
    function devolverMenor($n1,$n2,$n3){
        return min($n1,$n2,$n3);
    }
    
    echo "<p>El numero menor es: ". devolverMenor(7,3,9) ."</p>";

    //una funcion que recibe 3 numeros y los devuelve ordenadore de mayor a meno 

    function ordenarMayoraMenor($n1,$n2,$n3){
        
        $mayor=max($n1,$n2,$n3);
        $min=min($n1,$n2,$n3);
        $posicion;
        if($n1 < $mayor && $n1 > $min){
            $posicion=$n1;
            return $mayor ." ". $posicion ." ".$min. "<br>";

        }elseif($n2 < $mayor && $n2 > $min){
            $posicion=$n2;
            return $mayor ." ". $posicion ." ".$min. "<br>";
        }elseif($n3 < $mayor && $n3 > $min){
            $posicion=$n3;
            return $mayor ." ". $posicion ." ".$min. "<br>";
        }

    }
    echo ordenarMayoraMenor(122,87,7);
    echo ordenarMayoraMenor(7,122,87);
    echo ordenarMayoraMenor(87,7,122);
    echo ordenarMayoraMenor(7,122,87);
    echo ordenarMayoraMenor(122,7,87);
    echo ordenarMayoraMenor(7,87,122);
    
    //echo "<p>El orden de mayor a menor es: ". ordenarMayoraMenor(15,8,169) ."</p>";
    ?>

    

    
</body>
</html>