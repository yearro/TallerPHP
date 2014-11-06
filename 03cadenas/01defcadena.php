<?php
// Definición de cadenas
function muestra(){
	return "Buenos dias ! ! !";
}
$var = "Sabado";
echo "Hoy es $var muestra()<br>";
echo 'Hoy es $var muestra()<br>';
echo "Hoy es $var ".muestra().'<br>';

$cade1 = "Ejemplo de cadenas";
echo $cade1[0]."<br>";

$pru = array(1,2,3,4);
echo $pru{0}."<br>";

var_dump($cade1);

foreach($cade1 as $ind => $valor)
	echo $cade1{$ind};
echo "<br>";

$cade2 = "Ejemplo para calcular el tamaño de una cadena.";
echo strlen($cade1)."<br>";


for($i = 0; $i < strlen($cade2); $i++){
	echo $cade2{$i};
}
echo "<br>";

$formulario = <<<INICIO
		<form action="prueba.php" method="post">
		<input type="text" name="Nombre" value="Fulanito" />
		<br />
		<input type="submit" value="Enviar" />
		</form>
INICIO;
echo $formulario."<br>";
?>