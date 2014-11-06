<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
if ($_SESSION['Perfil'] != 1){
	header('location:inicio.php');
}
$cadena_depurada = ReCarac($_POST['NuevaFraseSemanal']);
$conexion = new conex();
$conexion -> consulta("UPDATE suv_config SET val_cnf = '".$cadena_depurada."' WHERE nom_cnf = 'frase_mes_cnf';");
echo $cadena_depurada;
?>
