<?php

 /*   Ejercicio 1: Desarrollar una funcion sin parámetros a 
                   la que se envie un arreglo
                   e imprima todo el contenido de dicho arreglo.
				 
      Ejercicio 2: Como saber cual es el número menor, el mayor
	               y el promedio entre 
	               los elementos de un array.
	  
	  Ejercicio 3: Rotar un array n espacios. Por ejemplo, rotar 
	               el array (1,2,3,4,5) 
	               3 veces a la derecha, devolvería (4,5,1,2,3).	
	               funcion (arreglo,espacios) */
 
 $arreglo = array(1,4,27,9,32,4,10,43,76,5,23,57,1,6,8,34,67,87,2,4,5,9,3,43,76,98,2); 
 
 
 






























// Ejercicio 3
$prueba = array(1,2,3,4,5);

function recorre($a,$espacios){
	if ($espacios == count($a))
		return $a;
	if ( ($espacios > count($a)) and ($espacios) <= 0)
		return "Imposible recorrer.";
	$nuevo_arreglo = array();
	$i=0;
	foreach($a as $indice => $valor){
		if( ($indice + $espacios) >= count($a)){
			$nuevo_arreglo[$i] = $valor;
		    $i++;
		}
		else
			$nuevo_arreglo[$indice + $espacios] = $valor;
		
	}
	return $nuevo_arreglo;	
			
}
$prueba = recorre($prueba,5);
foreach($prueba as $ind => $val)
	echo "$ind => $val<br>";


// Ejercicio 1
function imprime_Arreglo(){
	$a = func_get_args(0);
	foreach($a[0] as $indice => $valor)
 		echo $indice." ".$valor."<br>";
	return;	
}

$arreglo2 = array(1,2,3,4);
var_dump($arreglo2);
echo "<br>";
imprime_Arreglo($arreglo2);
echo "<br>";


// Ejercicio 2
foreach($arreglo as $llave => $valor)
	$suma += $valor;
	
echo "El promedio es ".round($suma / count($arreglo),2)."<br>";
rsort($arreglo);
echo "El numero mayor es ".$arreglo[0]."<br>";
echo "El numero menor es ".$arreglo[count($arreglo)-1]."<br>"; 
var_dump($arreglo); 

?>