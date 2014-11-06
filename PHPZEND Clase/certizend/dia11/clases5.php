<?php
class a{
	public $a = 'Variable publica';
	protected $b = 'Variable protegida.';
	private $c = 'Variable privada.';
	function __construct(){
		echo var_dump(get_object_vars($this))."<br>";
	}
}
class b extends a{
	function __construct(){
		echo var_dump(get_object_vars($this))."<br>";
		//$this ->$a = 30;
	}
}
class c{
	function __construct(){
		$a = new a;
		echo var_dump(get_object_vars($a))."<br>";
		echo $a -> a;
		//echo $a -> b;
		echo $a -> c;
	}
}

$a = new a();
echo "<br>";
new b();
echo "<br>";
new c();



?>