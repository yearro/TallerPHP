<?php
// Ejemplos de arreglos multidimencionales
$ae3 = array();
$ae3[] = array('Hola',34 ,53);
$ae3[] = array(1,2,3,array('Un ','arreglo ' ,'dentro de ','otro arreglo', 100),'Mundo');
$ae3['a'] = 33;
$ae3[0][3] = "Se agrega una cadena en el nivel 0";
echo $ae3[0][0]." ".$ae3[1][4]."<br>";
var_dump($ae3);





























  //  Ejercicio imprime la suma de 53, 100 y 33, 
 //   por medio del lugar donde ocupan estos elementos
//    en el arreglo multidimencional











echo "<br>";
echo "Suma = ".$ae3[0][2] + $ae3[1][3][4] + $ae3['a'];
?>