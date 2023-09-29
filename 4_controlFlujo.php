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

        //Sentencia if

        $edad=16;
        if($edad >= 18){
            echo "<p>Eres mayor de edad, tu edad es $edad.</p>";
        } 
        else{
            echo "<p>Eres menor de edad, tu edad es $edad.</p>";
        } 
    
        //ejercicio notas
        $nota=10.1;

        if($nota >= 0 && $nota <=5){
            echo "<p>!SUSPENSO!, tu nota es: $nota</p>";
        }
        elseif($nota >= 5 && $nota <=7){
            echo "<p>!APROBADO¡, tu nota es: $nota</p>";
        }
        elseif($nota>=7 && $nota<9){
            echo "<p>¡NOTABLE!, tu nota es: $nota.</p>";
        }elseif($nota>=9 && $nota<=10){
            echo "<p>¡Sobresaliente!, tu nota es: $nota.</p>";
        }else{
            echo "<p>¡NOTABLE!, tu nota es: $nota.</p>";
        }

        if($nota >= 0 && $nota <=10){
            if($nota >= 0 && $nota <=5){
                echo "<p>!SUSPENSO!, tu nota es: $nota</p>";
            }
            elseif($nota >= 5 && $nota <=7){
                echo "<p>!APROBADO¡, tu nota es: $nota</p>";
            }
            elseif($nota>=7 && $nota<9){
                echo "<p>¡NOTABLE!, tu nota es: $nota.</p>";
            }elseif($nota>=9 && $nota<=10){
                echo "<p>¡Sobresaliente!, tu nota es: $nota.</p>";
            }else{
                echo "<p>¡NOTABLE!, tu nota es: $nota.</p>";
            }
        }else{
            echo"<p>La nota es incorrexta</p>";
        }

        
    
    
        $nombre="Pepe";
    
    ?>




        <h3>IF INTEGRADO EN CODIGO HTML</h3>

        <?php 
         if($nombre == NULL) : ?>
            <p>¡Hola Desconocido!</p>
        <?php elseif( $edad== NULL) : ?>
            <p>¡Hola <?php echo $nombre ?>! no conozco su edad.</p>
        
        <?php else : ?>
                <p>¡Hola  <?php echo $nombre ?>! Tiene  <?php echo $edad ?> años.</p>
        <?php endif ?>
</body>
</html>