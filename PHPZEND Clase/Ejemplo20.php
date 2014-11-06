<?php
$var = 34;

// selectiva simple
if ($var == 3) echo "Este es un if simple <br>";


// selectiva doble
if($var == 5)
	echo "Verdadero en selectiva doble";
else
	echo "Falso en selectiva doble";
echo "<br>";

// selectiva  multiple
if($var == 5)
	echo "Verdadero en selectiva doble";
elseif ($var == 10)
	echo "Falso en selectiva doble";
elseif ($var == 20)
	echo "Falso en selectiva doble";
elseif ($var == 30)
	echo "Falso en selectiva doble";
elseif ($var == 40)
	echo "Falso en selectiva doble";
elseif ($var == 50)
	echo "Falso en selectiva doble";
else
	echo "Otra cosa";
echo "<br>";


//  Operador ternario
($var != 20)? "Si es diferente.<br>":"No es diferente.<br>";

//  selectiva de casos

$var = 5;
switch($var){
	case 1: echo "El valor de var es 1";
	break;
	case 2: echo "El valor de var es 2";
	break;
	case 3: echo "El valor de var es 3";
	break;
	case 4: echo "El valor de var es 4";
	break;
	case 5: echo "El valor de var es 5";
	break;
	default: echo "No es ningun numero de la lista.";
}
?>