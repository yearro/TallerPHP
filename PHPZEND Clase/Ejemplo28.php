<?php
// Desenredo de arreglos.
function funyare(){
	$vfe[] = "Juan Perez";
	$vfe[] = "correo@hotmail.com";
	$vfe[] = 2233445566;
	return $vfe;
}
list($nombre,$correo,$numero) = funyare();
echo "El nombre del alumno es $nombre , su email es $correo y ";
echo "su numero en caso de emergencia es $numero<br>";
?>