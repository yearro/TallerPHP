<?php
if($_GET['mensaje']){
	$indice = intval($_GET['mensaje']);
	switch($indice){
		case 1: $cadmen = "Problemas con el campo titulo";break;
		case 2: $cadmen = "Problemas con el campo autor";break;
		case 3: $cadmen = "Problemas con el campo publicaci&oacute;n";break;
		case 4: $cadmen = "Problemas con el campo stock";break;
		case 5: $cadmen = "Libro agregado con &eacute;xito";break;
		case 6: $cadmen = "Libro eliminado.";break;
		case 7: $cadmen = "Libro no existe.";break;
		case 8: $cadmen = "Favor de no molestar.";break;
		case 9: $cadmen = "No hay un libro.";break;
		case 10: $cadmen = "Libro Actualizado.";break;
		
		default: $cadmen = "No este jugando con esto.";break;
		}
	echo $mensaje = "<div id=\"mensaje\">$cadmen</div>";
}
?>