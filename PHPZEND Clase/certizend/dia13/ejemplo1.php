<?php
require_once('clase_conexion.php');
$a = new conex();
	
	//insert
	//$a -> consulta("INSERT INTO usuarios (nombre,apellidos,email,contra) VALUES ('Yeri','Armenta 2','una cosa','yacasitermino');");
	//delete
	//select
	$a -> consulta('select * from usuarios');
//	var_dump($a -> extrae_registro());
	/*foreach($c as $valor => $cantidad){
		echo "indice ".$valor."  ".$cantidad."<br>";
	}*/
	echo "<br>";
	
	
	if ($fila =$a -> extrae_registro()){
		do{
			echo $fila['nombre']."<br>";
	
		}while($a -> extrae_registro());
	}
//echo $a ->numero_filas();



	
//try{
//}
//catch (Exception $e){
 //var_dump($e -> getMessage());
//}


//throw new Exception('no seas mamila ya es tarde duermete');
?>
