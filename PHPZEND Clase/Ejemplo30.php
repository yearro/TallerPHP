<?php
//Comparación de arreglos
$a = array(1,2,3);
$b = array (1 => 2 , 2 => 3, 0 => 1);
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
?>