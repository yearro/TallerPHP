<?php
echo "Creando archivo".'<br>';
$archivo = fopen('archivo01.txt',"r");
if (!filesize('archivo01.txt') <= 0){
	$archivo2 = fread($archivo,filesize('archivo01.txt'));
	echo $archivo2;
}
else
	echo "El archivo se encuentra vacio.";
fclose($archivo);
?>