<?php
try {
	echo "Linea de prueba 1.<br>";
	throw new Exception ("Error personalizado<br>");
	echo "Linea de prueba 2.<br>";
	
}catch (Exception $e) {
	echo $e->getMessage();
}
/////////////////////////////////////////////////////////////////
function manejo_Errores($e)
{
	echo $e->getMessage();
}
set_exception_handler("manejo_Errores");
throw new Exception("Otra forma de manejo de errores.");
echo "Este texto no se ve.<br>";
?>