<?php
class a {
	function metodo1($cad = "por el metodo tradicional."){
		echo "Llamada al metodo $cad <br>";
	}
	function metodo2(){
		$this -> metodo1("utilizando this");
	}
}
$a = new a();
$a -> metodo1();
$a -> metodo2();
