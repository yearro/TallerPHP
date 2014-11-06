<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
// Primera funcion
function prueba_1(){
 echo "Prueba de funciones 1";
}
prueba_1(); //llamada a la funcion
//Retorno de valores
function prueba_5(){
 return "<br>Prueba de funciones 2";
}
echo prueba_5();

function prueba_3($a){
	return $a." funciones 3";
}
echo "<br>".prueba_3("Prueba de");

function prueba_4($textprue4="<br>Prueba de funciones 4"){
	return $textprue4;
}
echo prueba_4();

function prueba_6($num){
	if($num == 1)return;
	else return "<br>Prueba de return.";
}

echo prueba_6(6);

//Errores en funciones
function prueba_2($nombre){
	return "Mi nombre es $nombre y estoy probando las funciones.";
}
$str_prueba_2 = prueba_2("Yeri Armenta Rodríguez");
echo '<br>'.$str_prueba_2;

//Prueba ambito de variables
$epav1 = "Cadena 1";
function funcprueambito()
	{
		define("PRUEBA","yeri@hotmail.com");
		$epav1 = "Cadena 2"; //La variable solo existe en el ámbito actual
		$epav2 = "Cadena 3";
	} 
echo "<br>$epav1";
echo "<br>La costante ".PRUEBA." es reconocida fuera de todos los ambitos.";
(isset($epav2))?$cadena = "<br>Si existe":$cadena = "<br>No existe";
echo $cadena;

//Prueba de variables estaticas

function PruVarEstati($num){
	//static $contador;
    $contador+=$num;
 echo "<br>$contador";
}
PruVarEstati(5);
PruVarEstati(5);

// Ejemplo de argumentos variables con argumentos por defecto

function fulanos($Persona,$ciudad = "Veracruz",$habit = "una lancha") {
return ("<br>$Persona vive en la ciudad de $ciudad dentro de $habit.") ;
}
echo fulanos("Fulano");
echo fulanos("Perengano","Cancun");
echo fulanos("Merengano","Xalapa","una cada")."<br>";

function fun_para_muchos(){
$na = func_num_args();
echo "$na<br>";
if($na!=0){
for($ind = 0; $ind <= $na-1; $ind++){
	echo func_get_arg($ind)."<br>";
}
}
else{
	echo "<br>No mandaron ningun parámetro.";
}

}
fun_para_muchos("hola1","hola2","hola3","hola4");

function elevado($numero,$indice) {
$resultado = $numero;
for ($x = 0; $x < $indice; ++$x) {
$resultado *= $numero;
}
$numero = $resultado;
return $numero;
}
$numero = 2;
$indice = 3;
echo $numero." elevado a ".$indice." es igual a ".elevado($numero,$indice) ."<br>";
echo $numero." elevado a ".$indice." es igual a ".elevado ($numero,$indice) ."<br>";

?>
</body>
</html>
