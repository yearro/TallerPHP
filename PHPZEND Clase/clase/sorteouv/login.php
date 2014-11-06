<?php
//echo md5('123456');
require_once('clase_conexion.php');
if (empty($_POST['usuario'])){
	$jsonObj ='{"resp":"0","error":"No se envi&oacute; un nombre de usuario."}';
	echo $jsonObj;
	exit();	
}
if (empty($_POST['contra'])){
	$jsonObj ='{"resp":"0","error":"No se envi&oacute; una contrase&ntilde;a v&aacute;lida."}';
	echo $jsonObj;	
	exit();
}

$odbc = new conex();
$odbc -> consulta("SELECT * FROM suv_usuario WHERE email_usu ='".$_POST['usuario']."' AND contra_usu ='".md5($_POST['contra'])."'"); 
if ($odbc -> numero_filas() == 0){
	$jsonObj ='{"resp":"0","error":"Nombre de usuario o contrase&ntilde;a no v&aacute;lidos."}';
}
else{
	$jsonObj ='{"resp":"1","error":"Usuario v&aacute;lido."}';
	$registro = $odbc -> extrae_registro();
	session_start();
	$_SESSION['SorteoUv'] = 'Si';
	$_SESSION['NombreUsuario'] = $registro['nom_usu']." ".$registro['ape_usu'];
	$_SESSION['Perfil'] = $registro['perfil_usu'];
	$_SESSION['ID'] = $registro['id'];
}
echo $jsonObj;
?> 