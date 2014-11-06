<?php
session_start();
$_SESSION['AutenSis1'] = 'Si';
$_SESSION['NomUsu'] = 'Yeri Armenta';
echo "Bienvenido al sistema ".$_SESSION['NomUsu'];
echo "<br><a href=\"sesion2.php\"> Siguiente pagina </a>";
?>