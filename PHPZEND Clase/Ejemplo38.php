<?php
// comparacion de cadenas
$cade1 = "123aa";
if ($cade1 == 123)
	echo "Las cadenas son iguales.<br>";
else
	echo "Las cadenas no son iguales.<br>";
echo (int) $cade1.'<br>';

////////////////////////////////////////////

if (strcmp($cade1,123) == 0)
	echo "Las cadenas son iguales.<br>";
elseif (strcmp($cade1,123) > 0)
    echo "La primera cadena es mas grande.<br>"; 
else
	echo "La segunda cadena es mas grande.<br>";	
	
	
////////////////////////////////////////////

$cade2 = "PRUEBA2";
$cade3 = "prueba2";
if(strcasecmp($cade2,$cade3) == 0) 
	echo "Las cadenas son iguales.<br>";
elseif (strcasecmp($cade2,$cade3) > 0) 
	echo "La primera cadena es mas grande.<br>";
else
	echo "La segunda cadena es mas grande.<br>";

////////////////////////////////////////////

$cade4 = "abcd1234";
$cade5 = "abcd5678";
echo strncasecmp($cade4,$cade5,4)."<br>";

////////////////////////////////////////////

$cade6 = "Comparacion de subcadenas";
echo substr_compare($cade6,"de",12,2)."<br>";

echo substr_compare($cade6,"cade",-7,4);

echo substr_compare($cade6,"subca",15,2);

echo substr_compare($cade6,"RACION",5,6,TRUE);

echo substr_compare($cade6,'sub',-10,4);

echo substr_compare($cade6,'para',2,4);

echo substr_compare($cade6,"nas",25,1);

?>