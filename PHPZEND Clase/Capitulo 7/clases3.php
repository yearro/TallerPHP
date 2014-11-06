<?php
class a{
	function test(){
		echo "Llamada desde la clase a<br>";
	}
	function func(){
		echo "Llamada desde la clase a<br>";
	}
}
class b extends a{
	function test(){
		echo "Llamada desde la clase b<br>";
	}
}
class c extends b{
	function test(){
	parent::test();
	}
}

class d extends c{
	function test(){
		b::test();
	}
}

$a = new a();
$b = new b();
$c = new b();
$d = new d();

//$a -> test();
//$b -> test();
//$b -> func();
//$c -> test();
$d -> test();

?>