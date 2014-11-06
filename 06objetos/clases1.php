<?php
class miClase {
	public $a = 5;
	function prueba(){

	}
}

$instobj1 = new miClase();
$instobj2 = $instobj1;
echo $instobj1 ->a."<br>";
$instobj2 -> a = 20;
echo $instobj2 ->a.'<br>';
echo $instobj1 ->a."<br>";

// public .- Desde cualquier parte
// protected .- Desde la misma clase y descendencia
// private .- Solo desde la misma clase que se define
// final .- Accesible desde cualquier parte pero sin sobreescritura