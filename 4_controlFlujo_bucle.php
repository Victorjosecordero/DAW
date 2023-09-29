<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CONTROL DE FLUJO</h2>
    <?php 
    //bucles
    echo "<h4>numeros del 1 al 10</h4> ";
    for($i=1;$i <=10;$i++){
        echo "$i <br>";
    }

    echo "<h4>numeros del 1 al 10</h4> ";
    for($i=10;$i >=1;$i--){
        echo "$i <br>";
    }
    // Del 1 al 100 de 5 en 5

    echo "<h4>numeros del 1 al 10</h4> ";
    for($i=0;$i <=100;$i+=5){
        echo "$i <br>";
    }

    echo "<h4>numeros del 100 al 0</h4> ";
    for($i=100;$i >=0;$i-=5){
        echo "$i <br>";
    }
    
    
    ?>

    <h2>Sentencia for incrustada</h2>

        <form action="">
            <div>
                <h3>Indica 5 aficciones</h3>
                <?php for($i=1; $i <=5; $i++)  : ?>
                    <p>Introduce una aficción <?php echo $i?>:<input type="text" /></p>
                <?php endfor; ?>

            </div>
        </form>

        
    
</body>
</html>