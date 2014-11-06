<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejemplos Certificacion ZEND</title>
</head>

<body>
<?php
// Ejemplo de como crear un arreglo con el contructor array
$ae1 = array(1,2,3,4);
$ae1 = array(1 => 'A',2 => 'B', 3 => 'C');
$ae1 = array('1a' => 1, 'b' => 2, 'c' => 3);
$ae1 = array();

//Ejemplo de como crear un arreglo con el contructor []
$ae2[]=1;
$ae2['A']="Otra cosa";
$ae2[] = 32;

// Ejemplos de arreglos multidimencionales
$ae3 = array();
$ae3[] = array('Hola',34 ,53);
$ae3[] = array(1,2,3,4,'Mundo');
echo $ae3[0][0]." ".$ae3[1][4]."<br>"; // Probar imprimir esto dentro de una cadena dinamica

// Ejemplo de transformar un arreglo en variables diferentes mediante el comando list y haciendolo por medio de una funcion
function funyare(){
	$vfe[] = "Yeri Armenta Rodríguez";
	$vfe[] = "yeri@hotmail.com";
	$vfe[] = 2233445566;
	return $vfe; //Cambiar los indices para verificar que solo sirve con arrglos numericos
}
list($var1,$var2,$var3) = funyare();
echo "Mi nombre es $var1, mi email es $var2 y mi numero es $var3 <br>";

//Ejemplo comando count en arreglos
$ae4 = array(1,2,3,4,array('A' => 'Uno', 'B' => 'Dos','C'));
echo "Elementos de la primera dimensión = ".count($ae4)."<br>";
echo "Elementos de la segunda dimensión = ".count($ae4[4])."<br>";

//Comparación de arreglos
$ae5 = array(1,2,3);
$ae6 = array (1 => 2, 2 => 3,0 => 1);
echo var_dump($ae5 == $ae6);
echo var_dump($ae5 === $ae6);
echo "<br>";

// Determnar si un elemento existe
$ae7 = array('a' => NULL, 'b' => 2);
isset($ae7['a'])?$caer = "Si existe el dato con isset.":$caer = "No existe el dato con isset.";
echo $caer."<br>";
array_key_exists('a',$ae7)?$caer = "Si existe el dato con array_key_exists.":$caer = "No existe el dato con array_key_exists.";
echo $caer."<br>";


// Ejemplo de determinar un cierto valor en un arreglo
in_array(2, $ae7)?$caer = "Si existe un 2 in_array.":$caer = "No existe un 2 in_array.";
echo $caer."<br>";

// Eliminar un dato del arreglo
unset($ae7['b']);
echo var_dump($ae7)."<br>";


// Ejemplos array_flip y array_reverse
$ae8 = array ('A','B','C',4);
echo var_dump($ae8)."<br>";
echo var_dump(array_flip($ae8))."<br>";
echo var_dump(array_reverse($ae8))."<br>";

// puntero de un array adelante
$ae9 = array(1,2,3,4,5,6,7,8,9);
function MuestraArreglo($arreglo){
	reset($arreglo);
	do{
		$valor = current($arreglo);
		echo "$valor <br>";
	}while (next($arreglo));
}
MuestraArreglo($ae9);

// puntero de un array atras
function MuestraArreglo2($arreglo){
	end($arreglo);
	do{
		$valor = current($arreglo);
		echo "$valor <br>";
	}while (prev($arreglo));
}
MuestraArreglo2($ae9);


foreach($ae9 as $indice => $valor){
echo "El indice $indice tiene el valor $valor <br>";
}

//ordenamiento
$ae10 = array('Manzana', 5 => 'Pera', 'Limon', 'Naranja', 8 => 'Sandia');
asort($ae10); //Ordena alfabeticamente
foreach($ae10 as $indice => $valor){
echo "$indice $valor <br>";
}

sort($ae10); //ordena por indice
foreach($ae10 as $indice => $valor){
echo "$indice $valor <br>";
}

natsort($ae10); //ordena alfabeticamente y asigna nuevos indices
foreach($ae10 as $indice => $valor){
echo "$indice $valor <br>";
}

rsort($ae10); //ordena alfabeticamente y asigna nuevos indices
foreach($ae10 as $indice => $valor){
echo "$indice $valor <br>";
}

?>

</body>
</html>