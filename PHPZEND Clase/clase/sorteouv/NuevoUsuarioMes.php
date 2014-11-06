<?php
//require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
/*if ($_SESSION['Perfil'] != 1){
	header('location:inicio.php');
}*/
if ($_POST){
	$a = new conex();
	$a -> consulta("SELECT id FROM suv_usuario WHERE id = ".$_POST['EmpleadoMes']);
	if ($a -> numero_filas() == 1){
		$a -> consulta("UPDATE suv_config SET val_cnf = '".$_POST['EmpleadoMes']."' WHERE nom_cnf = 'empleado_del_mes_cnf'");
		ReDir('personas.php');
	}
	else{
		ReDir('index.php');
	}
}
else{
ReDir('index.php');
}


?>