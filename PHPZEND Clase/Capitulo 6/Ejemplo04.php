<?php
function depuración() {
	echo "Variables GET<br>";
		foreach ($_GET as $indice => $valor) 
			echo "$indice: $valor<br>";
	echo "Variables POST<br>";
		foreach ($_POST as $indice => $valor) 
			echo "$indice: $valor<br>";
	echo "Variables COOKIES<br>";
		foreach ($_COOKIE as $indice => $valor)
			echo "$indice: $valor<br>";
	echo "Variables SESSION<br>";
		foreach ($_SESSION as $indice => $valor)
				echo "$indice: $valor<br>";
	echo "Variables SERVER-~<br>";
		foreach ($_SERVER as $indice => $valor)
			echo "$indice: $valor<br>";
}
depuración() ;
?>