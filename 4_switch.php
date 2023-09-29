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
    $op="dog";
    ?>

    <?php switch($op):
       case "cat": ?>
            <p> "gato"</p>
            <?php break;?>
        <?php case 'dog': ?>
            <p> "perro"</p>
            <?php break;?>
        <?php case 'rabbit': ?>
            <p> "conejo"</p>
            <?php break;
        default:?>
        <p>"Palabra no encontrada en traductor"</p>

        <?php endswitch?>
        
    
    
   

        
    
</body>
</html>