<?php
// Operadores de comparación relacionales
$c = 20;
$d = 20; //Casos <,>,<=,>=
var_dump($c >= $d);
echo "<br>";

// Operadores de comparacion de equivalencia e identidad
$z = "345";
$y = 345;
var_dump($z == $y);
var_dump($z === $y);
var_dump($z != $y);
var_dump($z !== $y);
echo "<br>";

// Operadores artiméticos
$e = 5;
$f = 3;
echo $e + $f."<br>";
echo $e - $f."<br>";
echo $e * $f."<br>";
echo $e / $f."<br>";
echo $e % $f."<br>";

// Operadores lógicos

$h = 23;
$g = 65;
$t = 8;
var_dump(($h > $g) and ($t != $g) );
echo "<br>";

$bol = false;
var_dump(!$bol);

// Operador de supresion de errores
@include("ejpololo.php");

//Operador de ejecucion
$listado_archivos = exec('ls',$output); //Hacemos un listado de los ficheros del directorio actual
//echo $listado_archivos;
var_dump($output); //imprimir elementos de un array

?>