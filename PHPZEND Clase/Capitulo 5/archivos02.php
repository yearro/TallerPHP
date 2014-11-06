<?php

$control = fopen("miarchivo.txt","w+");  
if($control == false)  
  echo("No se ha podido crear el archivo.").'<br>';    

//////////////////////////////////////////////

var_dump($archivo = fopen('archivo02.txt',"r"));
if (!filesize('archivo02.txt') <= 0){
	$linea_numero = 1;
	while(!feof($archivo)){
		$linea = fgets($archivo,10);
		echo 'Linea numero '.$linea_numero. ' su valor es '.$linea.'<br>';
		$linea_numero++;
	}
}
else
	echo "El archivo se encuentra vacio.";
fclose($archivo);
echo '<br>';

//////////////////////////////////////////////

$pagina_inicio = file_get_contents('http://www.ejemplo.com/');
echo $pagina_inicio;

//////////////////////////////////////////////

echo file_exists("archivo02.txt")?"Si existe.<br>":"No existe.<br>";

//////////////////////////////////////////////

echo is_readable("archivo02.txt")?'Existe y es legible.<br>':'No existe o no es legible.<br>';

//////////////////////////////////////////////

echo is_file("archivo02.txt")?'Es un archivo.<br>':'No es un archivo.<br>';

//////////////////////////////////////////////

echo is_writable("archivo02.txt")?'Existe y es escribible.<br>':'No existe o no es escribible.<br>';
echo  permisos_de_archivo('archivo02.txt').'<br>';
var_dump(chmod('archivo02.txt',0644));

function permisos_de_archivo($a){
	$permisos = fileperms($a);
	if (($permisos & 0xC000) == 0xC000){ $info = 's';
		} elseif (($permisos & 0xA000) == 0xA000) { $info = 'l';
		} elseif (($permisos & 0x8000) == 0x8000) { $info = '-';
		} elseif (($permisos & 0x6000) == 0x6000) { $info = 'b';
		} elseif (($permisos & 0x4000) == 0x4000) { $info = 'd';
		} elseif (($permisos & 0x2000) == 0x2000) { $info = 'c';
		} elseif (($permisos & 0x1000) == 0x1000) { $info = 'p';
		} else { $info = 'u'; }
	$info .= (($permisos & 0x0100) ? 'r' : '-');
	$info .= (($permisos & 0x0080) ? 'w' : '-');
	$info .= (($permisos & 0x0040) ?
             (($permisos & 0x0800) ? 's' : 'x' ) :
             (($permisos & 0x0800) ? 'S' : '-'));
	$info .= (($permisos & 0x0020) ? 'r' : '-');
	$info .= (($permisos & 0x0010) ? 'w' : '-');
	$info .= (($permisos & 0x0008) ?
             (($permisos & 0x0400) ? 's' : 'x' ) :
             (($permisos & 0x0400) ? 'S' : '-'));
	$info .= (($permisos & 0x0004) ? 'r' : '-');
	$info .= (($permisos & 0x0002) ? 'w' : '-');
	$info .= (($permisos & 0x0001) ?
             (($permisos & 0x0200) ? 't' : 'x' ) :
             (($permisos & 0x0200) ? 'T' : '-'));
	return $info;
}
?>