<?php
// Clasificacion de arreglos
$ae1 = array('a' => "Pedro", 'b' => "Juan",'c' => "Ana",'d' => "Bautista",'e' => "Cesar");
sort($ae1);
var_dump($ae1);
echo "<br>";

////////////////////////////////////

$ae2 = array('a' => "Pedro", 'b' => "Juan",'c' => "Ana",'d' => "Bautista",'e' => "Cesar");
asort($ae2);
var_dump($ae2);
echo "<br><br>";

////////////////////////////////////

$ae3 = array('a' => "Pedro", 'b' => "Juan",'c' => "Ana",'d' => "Bautista",'e' => "Cesar");
rsort($ae3);
var_dump($ae3);
echo "<br>";

////////////////////////////////////

$ae4 = array('a' => "Pedro", 'b' => "Juan",'c' => "Ana",'d' => "Bautista",'e' => "Cesar");
arsort($ae4);
var_dump($ae4);
echo "<br><br>";

////////////////////////////////////

$ae5 = array('z' => "Pedro", 'b' => "Juan",'h' => "Ana",'d' => "Bautista",'m' => "Cesar");
ksort($ae5);
var_dump($ae5);
echo "<br><br>";

////////////////////////////////////

$cartas = array(1,2,3,4);
shuffle($cartas);
var_dump($cartas);
echo "<br>";
////////////////////////////////////

$cartas2 = array('a' => 10,'b' => 12,'c' => 13);
$indices = array_keys($cartas2);
shuffle($indices);
foreach($indices as $var_ind)
	echo $cartas2[$var_ind];
echo "<br><br>";

////////////////////////////////////

$cola = array('dato 1','dato 2','dato 3','dato 4','dato 5','dato 6');
array_shift($cola);
array_pop($cola);
print_r($cola);
echo "<br>";
array_unshift($cola,"dato 7");
array_push($cola, "dato 10","dato 11","dato 12");
print_r($cola);


 ?>