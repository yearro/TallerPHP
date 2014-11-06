<?php
session_start();
$nombre = "Yeri";
session_register("nombre");
echo "Bienvenido al sistema $nombre";
echo "<a href=\"sesion2.php\"> Siguiente pagina </a>";
$_SESSION['variable']=323232;
?>