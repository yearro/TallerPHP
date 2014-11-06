<?php
$i = 5;
while ($i < 10){
	echo $i." ";
	$i++;
}
echo ("<br>");

$i = 5;
do{
	echo $i." ";
	$i++;
}while($i < 10);
echo "<br>";

for($i=0; $i < 10; $i++){
	echo $i;
	}
echo "<br>";

// Sintáxis alternativa
$i = 0;
while ($i < 10):
	echo $i." ";
	$i++;
endwhile;

echo "<br>";

for($i=0; $i < 10; $i++):
	echo $i;
	endfor;
echo "<br>";
?>