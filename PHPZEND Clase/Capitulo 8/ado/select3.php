<?php
include('adodb5/adodb.inc.php');	   # carga el codigo comun de ADOdb
$conn = &ADONewConnection('mysql');  # crea la conexion
$conn->PConnect('localhost','root','','test');# se conecta a la base de datos test

$sql = 'select autor, id from libro';
$rs = $conn->GetAssoc($sql);
var_dump($rs);
echo "<br>";
foreach($rs as $id => $valor)
 echo $id." => ".$valor.'<br>';
?>