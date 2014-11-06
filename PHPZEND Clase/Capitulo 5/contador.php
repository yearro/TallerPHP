<?php
function EscribeContador($valor){
	if(($fp = fopen("contador.txt","wb",false)) === false){
		echo "No se puede abrir el archivo";
	}
	fwrite($fp, $valor."\n");
	fclose($fp);
}
function IncrementaContador(){
	if(file_exists("contador.txt")){
		if(is_readable("contador.txt")){
			if(is_file("contador.txt")){
				$valorActual = file_get_contents("contador.txt");
				$valorActual = str_replace("\n","",$valorActual);
				$valorActual = intval($valorActual);
				$valorActual++;
				EscribeContador($valorActual);
				echo $valorActual;
			}
		}
		else{
			chmod("contador.txt","+r");
			$valorActual = file_get_contents("contador.txt");
		}
	}
	else{
		touch("contador.txt");
		$valorActual = "0";
		echo $valorActual;
	}
}
?>