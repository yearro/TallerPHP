<?php
class ClasePru {
function __construct(){
echo "Ejemplo del contructor<br>";
}
function AccesoMetd(){
 echo "Acceso a un metodo sin argumentos<br>";
}

function AccesoMetd2($cad = "Acceso a un m&eacute;todo con argumentos por defecto<br>"){
echo $cad;
}

function __destruct(){
 echo "El objeto est&aacute; eliminado..<br>";
}

}
//$instobj1 -> AccesoMetd2("Probando<br>");
$instobj1 = new ClasePru();
$instobj1 -> AccesoMetd();
$instobj1 -> AccesoMetd2();
$instobj1 -> AccesoMetd2("Probando<br>");

?>