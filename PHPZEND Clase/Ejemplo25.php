<?php
// Funciones con parámetros por pre-establecidos
function fulanos($Persona,$ciudad = "Veracruz",$habit = "choza") {
return ("$Persona vive en la ciudad de $ciudad dentro de $habit.") ;
}
echo fulanos("Fulano")."<br>";
echo fulanos("Perengano","Cancun")."<br>";
echo fulanos("Merengano","Xalapa","una cada")."<br>";

// Propiedad func_num_args para funciones
function numero_de_parametros(){
	echo func_num_args()."<br>";
}
numero_de_parametros();

// Paso de argumentos por referencia
function pasoVarArg(&$arg){
	$arg = 53;
}
$arg = 10;
echo $arg."<br>";
pasoVarArg($arg);
echo $arg."<br>";

// Funcion que determina e imprime el valor de los argumentos dados

function fun_para_muchos(){
	$na = func_num_args();
	echo "$na<br>";
	if($na!=0){
		for($ind = 0; $ind < $na; $ind++){
			echo func_get_arg($ind)."<br>";
		}
	}
	else{
		echo "<br>No mandaron ningun parámetro.";
	}
}

fun_para_muchos("hola1","hola2","hola3","hola4");
?>