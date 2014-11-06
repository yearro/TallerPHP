<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ZEND</title>
</head>

<body>
<?php
// ejercicio cadena como arreglo.
$cade1 = "Ejemplo de cadenas";
echo $cade1{0}."<br>";

//cadena y arreglos

$cade2 = array("NADA",array(1,2,3));
echo $cade2[0]{1};

// Ejemplo Heredox
$formulario = <<<INICIO
		<form action="prueba.php" method="post">
		<input type="text" name="Nombre" value="Fulanito" />
		<br />
		<input type="submit" value="Enviar" />
		</form>
INICIO;

echo $formulario."<br>";

//Ejemplo tamaño de la cadena
$cade3 = "Ejemplo para calcular el tamño de una cadena.";
echo strlen($cade3)."<br>";

//Posición de los caracteres
$cade4 = "Esta cadena tiene muchas letras";
echo "La primera ocurrencia de 'a' es ==========" . strpos($cade4, "a")."<br>";
echo "La primera ocurrencia de 'a' es ==========" . strrpos($cade4, "a")."<br>";
echo "La primera ocurrencia de 'm' es " . strpos($cade4, "m")." <br>";


//Posición de varios caracteres
echo "La primera ocurrencia de 'tiene' es " .
strpos($cade4,"tiene") . "<br>";

//Posición de los caracteres empezando por el último
echo "La primera ocurrencia de 'a' es " . strrpos($cade4, "a")."<br>";
echo "La primera ocurrencia de 'm' es " . strrpos($cade4, "m")." <br>";

//Comparación entre cadenas. ctrcmp()
$cade5 = "Prueba"; 
$cade6 = "Prueba";
if(strcmp($cade5,$cade6) == 0) echo "Las dos cadenas son iguales.<br>";
elseif (strcmp($cade5,$cade6) < 0) echo "La cadena 1 es menor que la cadena 2.<br>";
else echo "La cadena 1 es mayor dque la cadena 2.<br>";

//Busqueda de caracteres
$cade7 = "Esta cadena tiene muchas letras";
echo "La primera ocurrencia de 'cadena' es: " .strstr ($cade7,"le") . "<br>";
//Devuelve la cadena completa
echo substr($cade7, 0);
echo "<br>";
//Desde el carácter 12 hasta el final
echo substr($cade7, 12);
echo "<br>";
//Devuelve 6 caracteres desde el carácter 18
echo substr($cade7, 18,6);
echo "<br>";
//Devuelve los 6 últimos caracteres
echo substr($cade7, -6);
echo "<br>";
//Desde la posición 26, contando desde atrás, 6 caracteres
echo substr($cade7, -26,6);
echo "<br>";
//Empezando en el carácter 4 y terminando en el 7 desde atrás
echo substr($cade7, 4,-7);
echo "<br>";

//Limpieza de cadenas
$cade8 = " cadena con varios espacios en blanco " ;
echo $cade8." ".strlen(ltrim($cade8))."<br>";
echo $cade8." ".strlen(chop($cade8))."<br>";
echo $cade8." ".strlen(trim($cade8))."<br>";

//Reemplazar cadenas
$cade9 = "Esta cadena tiene muchas letras.<br>";
$cade9 = str_replace("Esta","Este",$cade9);
echo str_replace("cadena","conjunto",$cade9);

// Cambio de todas mayusculas y minusculas
$cade10 = "Hay palabras en MAYÚSCULAS y en minúsculas<br>" ;
echo strtolower($cade10);
echo strtoupper($cade10);

//Mayusculas en un letra al inicio
$cadena = "había una vez...<br>";
echo ucfirst($cadena);
$cadena2 = "linux user group";
echo "LUG significa " . ucwords($cadena2);

?>
</body>
</html>
