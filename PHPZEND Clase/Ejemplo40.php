<?php
$cadena = "Acentos á é í ó ú";
$busqueda = array('á','é','í','ó','ú');
$reemplazo = array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;');
echo str_replace($busqueda,$reemplazo,$cadena).'<br>';

////////////////////////////////////////////

$cadena2 = "Cambiando vocales por R";
echo str_replace(array('a','e','i','o','u'),'R',$cadena2).'<br>';

////////////////////////////////////////////

echo substr_replace('Hola Carlos nada de nada','Felipe',5).'<br>';
echo substr_replace('La manzana esta podrida','sandia',3,7).'<br>';

////////////////////////////////////////////


$email = "fulanito@fulanitos.com"; 
$nombre_usuario = substr_replace($email,"",strpos($email,'@'));
echo $nombre_usuario.'<br>';

////////////////////////////////////////////


$cadena = "Cadena con muchos caracteres,";
$cadena.= " obteniendo sub cadenas de la cadena original";
echo substr($cadena, 0)."<br>";
echo substr($cadena, 6)."<br>";
echo substr($cadena, 18,10)."<br>";
echo substr($cadena, -9)."<br>";
echo substr($cadena, -15,6)."<br>";
echo substr($cadena, 7,-9)."<br>";


//Limpieza de cadenas
$cade8 = " cadena con varios espacios en blanco    " ;
echo $cade8." ".strlen(ltrim($cade8))."<br>";
echo $cade8." ".strlen(chop($cade8))."<br>";
echo $cade8." ".strlen(trim($cade8))."<br>";

// Cambio de todas mayusculas y minusculas
$cade10 = "Hay palabras en MAYUSCULAS y en minusculas<br>" ;
echo strtolower($cade10);
echo strtoupper($cade10);

//Mayusculas en una letra al inicio
$cadena = "habia una vez...<br>";
echo ucfirst($cadena);
$cadena2 = "linux user group";
echo "LUG significa " . ucwords($cadena2);
?>