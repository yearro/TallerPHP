<?php
include('adodb5/adodb.inc.php');	   # carga el codigo comun de ADOdb
$conn = &ADONewConnection('mysql');  # driver de conexion
$conn->PConnect('localhost','root','','test');# parametros de conexion

$sql = "select * from libro where id = 5";

$recordSet=&$conn->Execute($sql);
if ($recordSet === false) {
	die ('error al seleccionar: '.$conn->ErrorMsg().'<BR>');
}
//var_dump($recordSet);
echo "<br>".$recordSet->_numOfRows;
echo '<br>';
echo ($recordSet->_numOfRows == 0)?"No hay registros":"Si hay registros";
echo '<br>';
if ($recordSet->_numOfRows != 0){
	echo $recordSet->fields["id"].'<br>';
	echo $recordSet->fields["titulo"].'<br>';
	echo $recordSet->fields["autor"].'<br>';
	echo $recordSet->fields["publicacion"].'<br>';
	echo $recordSet->fields["stock"].' Stock<br>';
	$cantidad = intval($recordSet->fields["stock"] - 2);
	$sql = "START TRANSACTION;";
	$sql.= "insert into prestamos(id,nombre,cantidad) ";
	$sql.= "values(0,'".$recordSet->fields["titulo"]."',$cantidad);";
	$sql.= "update libro ";
	$sql.= "set stock=$cantidad";
	$sql.= " where id=".$recordSet->fields["id"].";";
	$sql.= "COMMIT;";
	echo $sql.'<br>';


	/*if ($conn->Execute($sql) === false) {
		die ('error al seleccionar: '.$conn->ErrorMsg().'<BR>');
	}*/
	$link = mysql_connect('localhost','root','') or die ("No se pudo establecer la conexion");
	
	if(!mysql_select_db('test',$link))
			die ('No se pudo con la base de datos');
			
	$resultado = mysql_query($sql);
	if(!$resultado)
			echo 'No se pudo realizar la consulta';
	echo '<br>';
	var_dump($resultado);
}
?>
<?php
//$sql = "insert into libro (id,titulo,autor,publicacion,stock)";
?>