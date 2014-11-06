<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
if ($_SESSION['Perfil'] != 1){
	header('location:inicio.php');
}
if($_POST){ // Verifica que exista un arreglo de tipo POST 
	
	//foreach($_POST as $clave => $valor) $$clave=addslashes(trim(utf8_decode($valor))); 
	if(empty($_POST['DescripArch'])) ReDir('descargas.php?a=1');
	$DescripArch = ReCarac($_POST['DescripArch']);
	if(strlen($DescripArch) == 0) ReDir('descargas.php?a=1');
	
	$nombre_archivo = $HTTP_POST_FILES['ArcUsu']['name'];
	$tipo_archivo = $HTTP_POST_FILES['ArcUsu']['type'];
	$tamano_archivo = $HTTP_POST_FILES['ArcUsu']['size'];
	
	if(empty($nombre_archivo)) ReDir('descargas.php?a=2');
	if ($tamaño_archivo > 4194304) ReDir('descargas.php?a=3'); // Tamaño no mayor a 4 Mb
	if (!ValArc(extension($nombre_archivo))) ReDir('descargas.php?a=4'); 
	$nuevo_nombre_archivo = 'DOC'.date('yndGis').'.'.extension($nombre_archivo);
	if (move_uploaded_file($HTTP_POST_FILES['ArcUsu']['tmp_name'], 'archivos/'.$nuevo_nombre_archivo)){
		$con_db = new conex();
		$sql = "INSERT INTO suv_archivo (id_arch,nom_arch,des_arch) VALUES (0,'".$nuevo_nombre_archivo."','".$DescripArch."');";
		$con_db -> consulta($sql);
	   	Redir('descargas.php');
    }else{
      ReDir('descargas.php?a=5');
    }
}
else{
	ReDir('logout.php');
}
?>
