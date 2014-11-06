<?php

// Tamaño de un arreglo
$a = array(1,2,3,4,array('A' => 'Uno', 'B' => 'Dos','C'));
echo "Elementos de la primera dimension = ".count($a)."<br>";
echo "Elementos de la segunda dimension = ".count($a[4])."<br>";

// Saber si un elemento es de un tipo especifico de formato.
echo is_array($a[4])?"Es un arreglo.<br>":"No es un arreglo.<br>";
echo is_integer($a[0])?"Es un entero.<br>":"No es un entero.<br>";

//Determinar si un elemento existe
$b = array('a' => NULL, 'b' => 2);

echo isset($b['b'])?"Si existe dentro del arreglo.<br>":"No existe dentro del arreglo.<br>";
echo isset($b['c'])?"Si existe dentro del arreglo.<br>":"No existe dentro del arreglo.<br>";

echo isset($b['a'])?"Si existe dentro del arreglo.<br>":"No existe dentro del arreglo.<br>";
echo is_null($b['a'])?"Si existe dentro del arreglo.<br>":"No existe dentro del arreglo.<br>";

echo in_array(NULL,$b)?"Si existe dentro del arreglo.<br>":"No existe dentro del arreglo.<br>";
echo array_key_exists ('a', $b)?"Si existe la llave dentro del arreglo.<br>":"No existe la llave dentro del arreglo.<br>";


// Para saber si una variable es nula.
$ver = NULL;
echo is_null($ver)?"Si existe el dato nulo.<br>":"No existe el dato nulo.<br>";

$c = array(1,2,3,4,5);
var_dump($c);
echo "<br> Eliminando elemento del arreglo.<br>";
unset($c[3]);
echo in_array(4,$c)?"Si se encuentra en el arreglo.<br>":"No se encuentra en el arreglo.<br>";
var_dump($c);
?>