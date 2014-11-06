<?php
include('adodb5/adodb.inc.php');	   # carga el codigo comun de ADOdb
$conn = &ADONewConnection('mysql');  # driver de conexion
$conn->PConnect('localhost','root','','test');# parametros de conexion
$sql = "update libro ";
$sql.= "set titulo='php architect', autor='Davey Shafik' ";
$sql.= "where id = 6";
if ($conn->Execute($sql) === false) {
	print 'error al actualizar: '.$conn->ErrorMsg().'<BR>';
}
?>