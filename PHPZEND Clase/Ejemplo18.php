<?php
// Asignación simple
$a = 10;
$b = $a;
$b = 20;
echo $a."<br>";



// Asignación por referencia
$a = 10;
$b = &$a;
$b = 20;
echo $a;
?>