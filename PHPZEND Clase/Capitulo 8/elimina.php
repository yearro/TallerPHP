<?php
if($_GET){
	$dir = 'location:http://localhost/PHPZEND/Capitulo%208/index.php?mensaje=';
	$indice = intval($_GET['indice']);
	require_once('clase_conexion.php');
	$acceso = new conex();
	$sql= "delete from libro where id=".$indice;
	$acceso -> consulta($sql);
	if($acceso -> filas_afectadas() > 0){
		header($dir.'6');exit();
	}else{
		header($dir.'7');exit();
	}
}
?>