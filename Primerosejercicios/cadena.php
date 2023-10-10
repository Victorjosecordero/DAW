<?php

echo "<h2>Manejo de cadenas</h2><br>";
echo "Ejemplo 1<br>";



/*Recibe una cadena de caracteres que representa el nombre de un fichero y devuelve una
cadena con la extensión del fichero.
Ejemplo:
$extension = calcula_extension (“curriculum.pdf”);
devuelve en la variable $extension el valor “PDF”.*/

function calcula_extension($archivo){
    $limitador=".";
    $array=explode($limitador,$archivo);
    return $array[1];
}

$extension = calcula_extension('curriculum.pdf');

//echo "La extension es:" . $extension."<br>";



/*Recibe una cadena de caracteres que representa una extensión de fichero y devuelve una
cadena con el tipo de fichero que corresponde a dicha extensión (véase Tabla I).
Ejemplo: la llamada
devuelve en la variable $tipo el valor “Documento Adobe PDF”.*/



function tipo_fichero($exten){
    $extension_array=array("PDF"=>'Documento Adobe PDF',"TXT"=>'Documento de texto',"HTML"=>'Documento HTML',"HTM"=>'Documento HTML',"PPT"=>'Presentación Microsoft Powerpoint',"DOC"=>'Documento Microsoft Word','GIF'=>'Imagen GIF',"JPG"=>"Imagen JPG","ZIP"=>"Archivo comprimido ZIP");
    
    return $extension_array[$exten];

}


$tipo = tipo_fichero(strtoupper($extension));



echo "El fichero 'curriculum.pdf' es un archivo: $tipo";





echo "<h2>Manejo de cadenas</h2><br>";
echo "Ejemplo 2<br>";



?>