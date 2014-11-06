<?php
// Elementos de una expresion regular

$prueba = "casa";
if (eregi('ca.a',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
	
echo "<br>";
	
if (preg_match('/ca.a/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "perrossssssssss";
	
if (preg_match('/perros+/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "cloaca";
	
if (preg_match('/clo*aca/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "lente";
	
if (preg_match('/lentes?/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "abcccd";
	
if (preg_match('/abc{1,3}d/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "abccccccccd";
	
if (preg_match('/abc{1,}d/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "62AAA";
	
if (preg_match('/[5-9][1-5][ABC]{3}/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "@2AAA";
	
if (preg_match('/[^@][1-5][ABC]{3}/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "mexicana";
	
if (preg_match('/mexican(o|a)/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "zzzzzzzabcde  ss ff ghggt";
	
if (preg_match('/(abcde)+/',$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
echo "<br>";

/////////////////////////////////////////////////////////////

$prueba = "hola@hola.com";
$expresion = '/^[a-zA-Z]([a-zA-Z0-9]){2,20}\@([a-zA-Z0-9]){2,20}\.(com|net|gob)$/';	

if (preg_match($expresion,$prueba))
	echo "Las cadena coincide con el patron.";
else	
	echo "Las cadena no coincide con el patron.";
?>