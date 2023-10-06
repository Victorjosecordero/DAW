<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print f</title>
    <style type="text/css">
        table,td,tr{
            border-radius:10px;
            border-collapse:collapse;
            border:solid 1.5px;
            margin:5px;
            padding:5px 15px;
            min-width: 80px;
            background:grey;
            color:white;
            
        }
    </style>
</head>
<body>
    
<?php 
    $number=9;
    $str="Beijing";
    printf("There are %u million bicycles in %s",$number,$str);
    echo'<h2>Datos personales</h2>';
    $nombre="Victor José Peña Cordero";
    $edad=22;
    $estatura=1.71;
    $direcc="Calle Bolonia";
    $localidad="Sevilla";
    $telefono=601767550;
    printf("<table>
    <tr>
    <td>Nombre: </td>
    <td>%s</td>
    </tr>
    <tr>
    <td>Edad:</td>
    <td>%d</td>
    </tr>
    <tr>
    <td>Estatura:</td>
    <td>%.2f</td>
    </tr>
    <tr>
    <td>Dirección:</td>
    <td>%s</td>
    </tr>
    <tr>
    <td>Localidad:</td>
    <td>%s</td>
    </tr>
    <tr>
    <td>Telefono:</td>
    <td>%d</td>
    </tr>
    </table>",$nombre,$edad,$estatura,$direcc,$localidad,$telefono);





?>
</body>
</html>