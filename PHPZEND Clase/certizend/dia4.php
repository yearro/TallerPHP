<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
// Operadores de asignacion por referencia
$a = 10;
$b = 20;
$b = &$a;
//$b = 20;
echo "El valor de a es $a";
echo "<br>El valor de b es $b";
$a = 322;

echo "<br>El valor de a es $a";
echo "<br>El valor de b es $b";
//Operadores de comparacion

$c = 20;
$d = 20; //Casos <,>,<=,>=,==,!=
($c > $d)?$cadena="<br>El valor de c es mayor que d.":$e="<br>El valor de d es mayor que c.";
echo $cadena;

$f = "20";  //Casos === y !===
($c === $f)?$cadena = "La variable c es identica a la variable f":$cadena = "La variable c no es identica a la variable f";
echo "<br>".$cadena;
echo "<br>".gettype($d);
echo "<br>".gettype($f);

//Operadores logicos
$h = "Si";
$i = "No";
(($h == "Si")and($i == "No"))?$cadena = "Verdadero.":$cadena = "Falso.";
echo "<br>".$cadena;

//Operador de ejecucion
$listado_archivos = exec('dir',$output); //Hacemos un listado de los ficheros del directorio actual
//echo $listado_archivos;
print implode('<br>',$output); //imprimir elementos de un array

$animales = array("perro","gato","tortuga");
$cont = 0;
while ($cont < count($animales))
{
	print '<br>'.$animales[$cont];
	$cont++;
}

//Operador de supresion de errores.
@include("ejpololo.php");

//$pruebilla = false or die("<br>prueba");
$variable = 10;
if ($variable == 10):
echo "Nueva estructura de control";
endif;
?>
</body>
</html>
