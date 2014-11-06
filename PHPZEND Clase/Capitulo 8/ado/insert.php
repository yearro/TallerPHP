<?php
include('adodb5/adodb.inc.php');	   # carga el codigo comun de ADOdb
$conn = &ADONewConnection('mysql');  # driver de conexion
$conn->PConnect('localhost','root','','test');# parametros de conexion

$nombre = "Ingenieria de Software";
$autor = "Ian Sommerville";
$publi = "Pearson";
$stock = 12;

$sql = "insert into libro (id,titulo,autor,publicacion,stock)";
$sql.= " values(0,'$nombre','$autor','$publi',$stock)";
//$sql.= " values(0,\"$nombre\",\"$autor\",\"$publi\",$stock)";

if ($conn->Execute($sql) === false) {
	print 'error al actualizar: '.$conn->ErrorMsg().'<BR>';
}
?>