<?php
// Partes básicas de una funcion.
function mi_funcion(){}

// Primera funcion
function prueba01()
{
 echo "Prueba de funciones 1";
}
prueba01();

//Retorno de valores "RETURN"
function prueba02(){
 return "<br>Prueba de funciones 2";
}
echo prueba02()."<br>";

// Con return vacío
function prueba03($a){
	echo "hola $a";
	if ($a == "muchachos")
		return;
	echo " no se duerman";
	}
prueba03("muchachos");
echo "<br>";
prueba03("chicos");
	
// Valores concatenados
function prueba04($a){
	return $a." funciones 4";
}
echo "<br>".prueba04("Prueba de");
?>