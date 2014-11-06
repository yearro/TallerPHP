<?php
interface InterPrueba{
public function a();
public function b();
}
interface InterPrueba2{
public function c();
public function d();
}

class a implements InterPrueba,InterPrueba2{
function a(){}
function b(){}
function c(){}
function d(){}
}

abstract class PrueClasAbs {
	private $pru;
	abstract function func1();
	function func2(){
		echo "imprimiendo desde un ejemplo de funcion abstracta.<br>";
	}
}
class b extends PrueClasAbs{
function func1(){
	echo "Implementando funcion abstracta.<br>";
}

}
$a = new b();
$a -> func1();
$a -> func2();
?>