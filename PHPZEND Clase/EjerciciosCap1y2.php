<?php
// Ejercicio 1: Construir una funcion que eleve un numero "n" a la potencia "m"
// Ejercicio 2: Construir una funcion que realice lo siguiente:
//              cuando tenga dos numeros devuelva la suma de los dos numeros
//              cuando tenga tres numeros los multiplique
//              cuando tenga cuatro numeros diga cual es el mayor de todos
// Ejercicio 3: Construir una funcion que reciba como entrada un cierto valor n y genere como salida el valor de la serie: 1+2+3+4+...+n
// Ejercicios 4: Construir una funcion que reciba como entrada varios montos de depósito y despliegue la suma de ellos.



























function Suma_de_Montos($monto){
	static $suma_montos;
    $suma_montos+=$monto;
 	return $suma_montos;
}
echo "La suma del monto diario es: ".Suma_de_Montos(1000)."<br>";
echo "La suma del monto diario es: ".Suma_de_Montos(2040)."<br>";
echo "La suma del monto diario es: ".Suma_de_Montos(3500)."<br>";
echo "La suma del monto diario es: ".Suma_de_Montos(320)."<br>";

///////////////////////////////////////////

function secuencia_de_numeros($num){
	for($i = 1; $i <= $num; $i++){
		if($i== $num)
			$secuencia.= "$i";
		else
			$secuencia.="$i+";	
	}
	return $secuencia;
}
echo secuencia_de_numeros(8)."<br>";

///////////////////////////////////////////

function numeros(){
	$cantidad_parametros = func_num_args();
	switch($cantidad_parametros){
		case 2: return "La suma de ".func_get_arg(0)." + ".func_get_arg(1)." es ".func_get_arg(0) + func_get_arg(1);
				break;
		case 3: $cade = "La multiplicacion de ".func_get_arg(0)." X ";
				$cade.= func_get_arg(1)." X ".func_get_arg(2)." es igual a: ";
				$cade.= func_get_arg(0)*func_get_arg(1)*func_get_arg(2);
				return $cade;
				break;
		case 4: if(((func_get_arg(0) > func_get_arg(1)) and (func_get_arg(0) > func_get_arg(2))) and (func_get_arg(0) > func_get_arg(3)))
					$mayor = func_get_arg(0);		
				elseif( func_get_arg(1) > func_get_arg(2) and func_get_arg(1) > func_get_arg(3) )
				    $mayor = func_get_arg(1);
				elseif( func_get_arg(2) > func_get_arg(3) )
					 $mayor = func_get_arg(2);
				else
					$mayor = func_get_arg(3); 
				return "El numero mayor es: ".$mayor;
				break;
		default: return "No exiten funciones para esa cantidad de parametros";
	} 
}
echo numeros(132,23)."<br>";

///////////////////////////////////////////

function elevado($numero,$indice) {
	$resultado = $numero;
	for ($x = 1; $x < $indice; ++$x) {
		$resultado *= $numero;
	}
	$numero = $resultado;
	return $numero;
}

$numero = 3;
$indice = 3;
echo $numero." elevado a ".$indice." es igual a ".elevado($numero,$indice) ."<br>";
?>