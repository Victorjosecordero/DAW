<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    Arrays en php
    </title>
</head>
<body>
    <?php 
    echo '<h2> Arrays en php</h2>';
    $dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
    echo $dias[0];
    echo '<br>';
    echo $dias[3];
    echo '<br>';
    print_r($dias);


    $ciudades[]="Madrid";
    $ciudades[]="Córdoba";
    $ciudades[]="Sevilla";


    print_r($ciudades);
    $dias=array(1=>'lunes',20=>'martes',8=>'miercoles',5=>'jueves',43=>'viernes',9=>'sabado','siesta'=>'domingo');

    print_r($dias);
    echo'<br>';

    echo 'Clave asociativa.<br>';
    $menu=array(
        'lunes'=>'pollo con patatas',
        'martes'=>'sopa de calabacín',
        'miercoles'=>'lentejas',
        'jueves'=>'arroz al horno',
        'viernes'=>'spaghetti carbonara',
        'sabado'=>'paella de verduras',
        'domingo'=>'pizza 4 quesos'
    );

    print_r($menu);
    echo'<br>';

    echo $menu['martes'];
    echo'<br>';

    $menu['viernes']='Salmorejo Jarote';
    echo $menu['viernes'];
    echo'<br>';







    $matriz[0][0] = 1;
    $matriz[0][1] = 14;
    $matriz[0][2] = 8;
    $matriz[0][3] = 3;

    $matriz[1][0] = 6;
    $matriz[1][1] = 19;
    $matriz[1][2] = 7;
    $matriz[1][3] = 2;

    $matriz[2][0] = 3;
    $matriz[2][1] = 13;
    $matriz[2][2] = 4;
    $matriz[2][3] = 1;



    for($i=0;$i < count($matriz);$i++){
        echo "<br>";
        for($j=0;$j < count($matriz[$i]);$j++){
            echo $matriz[$i][$j];
            echo "    ";
        }
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach($matriz as $filas){
        foreach($filas as $columnas){
            echo $columnas. "  ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>