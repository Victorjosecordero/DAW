<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices</title>
    <link rel="stylesheet" href="css/reset.css">
    <style>
        table{
            border:1px solid green;
            border-collapse:collapse;
            padding:2px;
        }
        table th{
            background-color:#0066CC;
            border:0;
            color:white
        }
        table tr:nth-child(even){
            background-color:#CCEEFF;
            border:0;
        }
        table tr:nth-child(odd){
            background-color:#CCCCCC;
            border:0;
        }
        div{
            width:25%;
        }
        h2,h3,h4{
            font-size:30px;
            font-weight:bold;
            margin-bottom:20px;
            margin-top:20px;
            text-decoration:underline;
        }
        
    </style>
</head>
<body>

<?php

//2) crea una array asociativa con los siguientes datos: portero-cech, defensa-Terry,medio-Lampard,delantero-torres
echo "<h2>Ejercicio 2</h2>";
$jugadores=array(
    'portero'=>'Cech',
    'defensa'=>'Terry',
    'medio'=>'Lampard',
    'delantero'=>'Torres'
);



foreach($jugadores as $key => $value){
    echo "<p>El ".$key." de mi equipo es ". $value."</p>";
}


echo "<h3>Ejercicio 4</h3>";

define("EUROPTS",166.386);
echo "<div>";
echo "<table>";
echo "<tr>";
echo "<th>";
    echo "Euros";
    echo "</th>";
    echo "<th>";
    echo "Pesetas";
    echo "</th>";
echo "<tr>";
for($i=1; $i<20; $i++){
    echo "<tr>";
    echo "<td>";
    echo $i;
    echo "</td>";
    echo "<td>";
    echo $i * EUROPTS;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

echo "<h3>Ejercicio 5</h3>";
/*
$nombres = array
(‘Carmen,’juan’,’Carlos’,’Antonio’,’Manuel’,’jorge’,’Camilo’,’Carla’,’Marta’, ’Carlos’).
a) Realiza un programa que recorra el array y cree un nuevo array sólo con los
nombres que comienzan por “C”.
Muestra ambos arrays, utilizando varias formas y funciones de visualización.
b) Ordena los dos array y muéstralos ordenados.
c)Busca Antonio, Carlos y Miguel en la primera matriz. Si algún nombre aparece más
de una vez, crear una matriz secundaria que indique dónde están en la primera matriz
y los muestre.
*/
$nombres = array("Carmen","juan","Carlos","Antonio","Manuel","jorge","Camilo","Carla","Marta", "Carlos");

function arrayConC($arr){
    $nuevaArray = array();
    $i=0;

    foreach($arr as $nom){
        if($nom[0]=="C"){
            $nuevaArray[$i] = array($nom);
            $i++;
           
        }
    }

    return $nuevaArray;
}

print_r(arrayConC($nombres));

echo "<br>";

function posicionNombre($arr){
    $contadorAntonio=0;
    $contadorcarlos=0;
    $contadorMiguel=0;
    $i=0;
    $m2=array();
    foreach($arr as $nom){
        if($nom== "Antonio"){
            $contadorAntonio++;
            if($contadorAntonio >=1){
                $m2[$arr[$i]];
            }
        }elseif($nom== "Carlos"){
            $contadorcarlos++;
            if($contadorcarlos >=1){
                $m2[$arr[$i]];
            }

        }elseif($nom== "Miguel"){
            $contadorMiguel++;
            if($contadorMiguel >=1){
                $m2[$arr[$i]];
        
            }

        }else{
            echo "nada";
        }

    }
    
}

posicionNombre($nombres);



?>
    
</body>
</html>