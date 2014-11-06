<?php
if($_POST){
	foreach($_POST as $id => $valor)
		$valor = htmlentities(trim($valor));
	require_once('validacion.php');
	$dir = 'location:http://localhost/PHPZEND/Capitulo%208/index.php?id=';
	$dir.= $_POST['id'].'&form=1&mensaje=';
	if(!valida_cadena($_POST['titulo'], false, 1, 255)){
		header($dir.'1');exit();}
	if(!valida_cadena($_POST['autor'], false, 1, 255)){
		header($dir.'2');exit();}
	if(!valida_cadena($_POST['publicacion'], false, 1, 255)){
		header($dir.'3');exit();}
	$stock = intval($_POST['stock']);
	
	require_once('clase_conexion.php');
	$acceso3 = new conex();
	$sql = "update libro set titulo='".$_POST['titulo']."',";
	$sql.= "autor='".$_POST['autor']."',publicacion='".$_POST['publicacion']."',stock=";
	$sql.= $stock." where id=".intval($_POST['id']);
	//echo $sql;
	$acceso3 -> consulta($sql);
	header($dir.'10');
	exit();
}
else{
	header('location:http://localhost/PHPZEND/Capitulo%208/');
	exit();
	}?>