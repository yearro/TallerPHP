<?php
// Ambito de una variable normal.
$a = "Variable de tipo cadena";
function pruebaFuncion(){
	$a = "Variable A de la funcion";
	$b = "Variable B de la funcion";
}
pruebaFuncion();
var_dump($a);
echo "<br>";
var_dump(isset($b));
echo "<br>";

// Variables globales
$z = "Otra variable de tipo cadena";
function pruebaFuncion2(){
	global $z;
	$z.= " y cambia de ambito gracias a la palabra Global";
	}
pruebaFuncion2();	
echo $z;
echo "<br>";

//Prueba ambito de variables
$epav1 = "Cadena 1";
function funcprueambito()
	{
		define("PRUEBA","yeri@hotmail.com");
		$epav1 = "Cadena 2";
		$epav2 = "Cadena 3";
	}
funcprueambito();	 
echo "$epav1<br>";
echo "La costante ".constant("PRUEBA")." es reconocida fuera de todos los ambitos.";
echo (isset($epav2))?"<br>Si existe \"epav2\"":"<br>No existe \"epav2\"";
echo "<br>";

//Prueba de variables estaticas
function PruVarEstati($num){
	static $contador;
    $contador+=$num;
 	return $contador;
}
echo PruVarEstati(5)."<br>";
echo PruVarEstati(5)."<br>";
?>