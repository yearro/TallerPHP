<?php
$numero = $_COOKIE['visitante'];
$numero += 1;
setcookie("visitante",$numero,time()+86400,'/certizend/dia8/');
($numero == 1)?$cad="Bienvenido por primera ocación":$cad="Bienvenido tienes $numero de visitas.";
echo $cad;
?>
