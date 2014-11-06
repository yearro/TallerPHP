<?php
include('adodb5/adodb.inc.php');	   # carga el codigo comun de ADOdb
$conn = &ADONewConnection('mysql');  # crea la conexion
$conn->PConnect('localhost','root','','test');# se conecta a la base de datos test

$recordSet = &$conn->Execute('select * from libro');
//var_dump($recordSet->fields);
echo "<br>";

if (!$recordSet) 
	print $conn->ErrorMsg();
else{
while (!$recordSet->EOF) {
	echo $recordSet->fields[0].' '.$recordSet->fields[1].' '.$recordSet->fields[2].'<BR>';
	//echo $recordSet->fields["titulo"].'<br>';
	$recordSet->MoveNext();
}
}
$recordSet->Close();
$conn->Close();
?>