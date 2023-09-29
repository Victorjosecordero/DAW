<?php 
//declaracion de variables
$j=0;
$canti=5;
$z=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    //Setencia while

    echo '<h3>bucle While</h3>';
    echo '<h4>numeros de 1 al 10</h4>';

    $i=1;
    while($i <= 10){
        echo $i++ . " ";
    }
    
    
    
    ?>


    <h3> Bucle While incrustado</h3>
    <form action="">
        <div>
            <p>
                Introduce <?php echo $canti?> aficiones
            </p>
            <?php while($j++ < $canti) : ?>
                <p>Introduce aficicion:  <?php echo $j?><input type="text" name="" id=""/></p>
            <?php endwhile; ?>
            <p><input type="submit" value="ok"></p>
        </div>
    </form>


    <?php
        //Sentenci do while
        echo '<h3>bucle While</h3>';
        echo '<h4>numeros de 1 al 10</h4>';
    
        do{
            echo $z++ . " ";
        }
        while($z <= 10);

    ?>

<h3> Bucle Do While incrustado</h3>
    <form action="">
        <div>
            <p>
                Introduce <?php echo $canti?> aficiones
            </p>
            <?php while($j++ < $canti) : ?>
                <p>Introduce aficicion:  <?php echo $j?><input type="text" name="" id=""/></p>
            <?php endwhile; ?>
            <p><input type="submit" value="ok"></p>
        </div>
    </form>
</body>
</html>