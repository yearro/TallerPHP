<?php
////////////////////////// 

$i = 0;
while(true){
	if($i == 10){ 
		break;
	}
	$i++;
	echo $i." ";
}
echo "<br>Break rompe con el ciclo. <br>";

//////////////////////////

for ($i = 0; $i < 10; $i++){
	for($j = 0; $j < 10; $j++){ 
		if (($j + $i) == 12){
			echo "indice $i del primer For, indice $j del segundo For <br>";
			break 2;	
		}	
	}
}
echo "Rompe con dos ciclos. <br>";

//////////////////////////

for($i = 0; $i < 10; $i++){
	if($i > 3 && $i < 6)
		continue;
	echo $i;	
}

?>