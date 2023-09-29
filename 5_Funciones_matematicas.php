<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h4>Funciones Matematicas</h4>';
    echo '<h3>Ceil</h3>';
    //ceil redondea al numero mayo
    echo "<p>". ceil(5.10) . "</p>";
    echo "<p>". ceil(0.60) . "</p>";
    echo "<p>". ceil(-5.10) . "</p>";

    echo '<h3>Floor</h3>';
    //floor redondea al numero menor
    echo "<p>". floor(5.90) . "</p>";
    echo "<p>". floor(0.90) . "</p>";
    echo "<p>". floor(-5.90) . "</p>";

    echo '<h3>Round</h3>';
    //floor redondea al numero menor
    echo "<p>". round(5.10) . "</p>";
    echo "<p>". round(5.49) . "</p>";
    echo "<p>". round(5.5) . "</p>";
    

    echo '<h3>Round(num,decimales)</h3>';
    //floor redondea al numero menor
    echo "<p>". round(5.101231314,4) . "</p>";
    echo "<p>". round(5.49219786890,1) . "</p>";
    echo "<p>". round(5.589689756789,2) . "</p>";
    
    
    
    ?>
</body>
</html>