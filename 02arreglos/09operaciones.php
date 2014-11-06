<?php
// Combinación de arreglos
$a = array("casa","silla","mesa","libro");
$b = array("gato","perro","caballo","pato");
var_dump(array_combine($a,$b));
echo "<br>";

// Combinacion multiple
$lado = array("cliente","servidor");
$tecnologias[] = array("javascript","css","AJAX","DOM");
$tecnologias[] = array("php","java",".net");
$mapa = array_combine($lado,$tecnologias);
var_dump($mapa);
echo "<br>";


// Iteración Pasiva.
function cambia_letras(&$a,&$b){
	$valor = strtoupper($valor);
}

$c = array("estas ","son ","letras ","minusculas");
array_walk($c,"cambia_letras");
var_dump($c);
?>