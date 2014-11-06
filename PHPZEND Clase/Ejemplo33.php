<?php
// Ejercicio: Desplegar por medio 
//de un ciclo, el contenido del siguiente arreglo

$a = array("Esta ","es ","una "
,"iteracion ","normal ","sobre ","un ","arreglo.");





































$i = 0;
while($i < count($a)){
	echo $a[$i];
	$i++;
} 
echo "<br>";







































// Iteraciones sobre arreglos asociativos
$b = array ('a' => 1,'b' => 2,'c' => 3,'d' => 4,'e' => 5);




































// Forma de iteracion con punteros
reset($b);
while(key($b) != NULL){
	echo key($b)." ".current($b)."<br>";
	next($b);
}






// Ejercicio: Utilizar los punteros junto con
// la funcion count para iterar sobre el arreglo $b





























$i = 0;
while($i < count($b)){
	echo current($b);
	next($b);
	$i++;
} 
echo "<br>";






// Ejercicio: Realizar una iteración al reverso del arreglo $b

























echo "<br>";
end($b);
while (key($b) != NULL){
	echo key($b)." ".current($b)."<br>";
	prev($b);	
}































 
// Iteracion más accesible
echo "<br>";
$c = array ('a','b','c','d','e','f'); 
 foreach ($c as $indice => $valor)
 	echo $indice." ".$valor."<br>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 ?>