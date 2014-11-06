<?php
require_once('../control.php');
require_once('../clase_conexion.php');
require_once('../FuncionesValidacion.php');
if(!empty($_GET['id_archivo'])){
	$f = $_GET['id_archivo'];
	$conexion = new conex();
	$conexion -> consulta("SELECT nom_arch FROM suv_archivo WHERE id_arch = ".$f);
	if ($conexion -> numero_filas() == 0)
			ReDir('../descargas.php?a=6');
	$archivo = $conexion -> extrae_registro();
	header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"".$archivo['nom_arch']."\"\n");
    $fp=fopen($archivo['nom_arch'], "r");
    fpassthru($fp);
}
else{
	ReDir('logout.php');
}
?>