<?php
class a{
	public $a = 'Variable publica';
	protected $b = 'Variable protegida.';
	private $c = 'Variable privada.';
	function __construct(){
		echo var_dump(get_object_vars($this))."<br>";
		echo $this -> a.'<br>';
		echo $this -> b.'<br>';
		echo $this -> c.'<br>';
		//echo $this -> d.'<br>';
	}
}
class b extends a{
	function __construct(){
		echo var_dump(get_object_vars($this))."<br>";
		echo $this -> a.'<br>';
		echo $this -> b.'<br>';
		echo $this -> c.'<br>';
		
	}
}
class c{
	function __construct(){
		echo var_dump(get_object_vars($this))."Esta clase no tiene atributos definidos<br>";
		$a = new a;
		echo $a -> a;
		echo $a -> b;
		echo $a -> c;
	}
}
new a();
echo "<br>";
new b();
echo "<br>";
new c();
?>