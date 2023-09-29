<?php 
$i=1;
$i1=0;
$i2=0;
$tabla1=56;
$tabla2=129;
$tabla3=19;
$multiplo=0;

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
    //tabla de multiplicar con for y while

    for($i=0;$i <= 10;$i++){
        echo "$tabla1 X $i = " . ($tabla1 * $i) ."<br>";
        
    }
    echo"<br><br>";
    ?>
    <?php
     
    do{
        echo "$tabla2 X $i1 = " . ($tabla2 * $i1) ."<br>";
        $i1++;
        
    }
    while($i1<=10);
    echo"<br><br>";
    while($i2<=10){
        echo "$tabla3 X $i2 = " . ($tabla3 * $i2) ."<br>";
        $i2++;
    
    }
    echo"<br><br>";
       
    
    ?>
</body>
</html>