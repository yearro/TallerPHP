<?php
include('adodb5/adodb.inc.php');	   # carga el codigo comun de ADOdb
$conn = &ADONewConnection('mysql');  # driver de conexion
$conn->PConnect('localhost','root','','test');# parametros de conexion
$sql = "delete from libro where id = 4";
if ($conn->Execute($sql) === false) {
	print 'error al eliminar: '.$conn->ErrorMsg().'<BR>';
}
?>