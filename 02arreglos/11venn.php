<?php
$a = array(1,2,3);
$b = array(1,3,4);
var_dump(array_diff($a,$b));
echo "<br>";

///////////////////////////// 

$g = array('k1' => "cadena 1",2 => "cadena 2",'k2' => "cadena 3");
$h = array(1 => "cadena 4",'k2' => "cadena 5",'k1' => "cadena 6");
var_dump(array_diff_key($g,$h));
echo "<br>";

///////////////////////////// 

$c = array('a','b','c','d');
$d = array('a','c','d','e');
var_dump(array_intersect($c,$d));
echo "<br>";

///////////////////////////// 

$e = array('a' => 32,'b' => 67,'c' => 34,'d' => 32);
$f = array('e' => 78,'f' => 47,'g' => 59,'c' => 65);
var_dump(array_intersect_key($e,$f));
echo "<br>";
?>