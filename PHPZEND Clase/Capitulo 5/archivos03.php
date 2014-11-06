<?php
var_dump($descriptor = fopen("archivo03.txt","a"));
$cadena = "Insertando una linea al archivo\n";
//fputs($descriptor,$cadena);
fwrite($descriptor,$cadena);
fclose($descriptor);

//////////////////////////////////////////////

$localizacion_actual="";
$destino="";
copy($localizacion_actual,$destino);

//////////////////////////////////////////////

$nombre = "";
$nuevo_nombre = "";
rename($nombre,$nuevo_nombre);

//////////////////////////////////////////////

$nombre_archivo = "";
unlink($nombre_archivo);
?>