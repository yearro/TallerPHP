<?php
if($_POST){
	foreach($_POST as $id => $valor)
		$valor = htmlentities(trim($valor));
	require_once('validacion.php');
	$dir = 'location:http://localhost/PHPZEND/Capitulo%208/index.php?mensaje=';
	if(!valida_cadena($_POST['titulo'], false, 1, 255)){
		header($dir.'1');exit();}
	if(!valida_cadena($_POST['autor'], false, 1, 255)){
		header($dir.'2');exit();}
	if(!valida_cadena($_POST['publicacion'], false, 1, 255)){
		header($dir.'3');exit();}
	$stock = intval($_POST['stock']);
	require_once('clase_conexion.php');
	$acceso = new conex();
	$sql = "insert into libro(id,titulo,autor,publicacion,stock) ";
	$sql.= "values (0,'".$_POST['titulo']."','".$_POST['autor']."','";
	$sql.= $_POST['publicion']."',".$stock.")";
	$acceso -> consulta($sql);
	header($dir.'5');
	exit();
}
else{
	header('location:http://localhost/PHPZEND/Capitulo%208/');
	exit();
	}
?>