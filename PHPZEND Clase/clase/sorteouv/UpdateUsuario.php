<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
if ($_SESSION['Perfil'] != 1){
	header('location:inicio.php');
}
if($_POST){ // Verifica que exista un arreglo de tipo POST 
	//	foreach($_POST as $clave => $valor) $$clave=addslashes(trim(utf8_decode($valor))); 
	foreach($_POST as $clave => $valor) $$clave=ReCarac($valor); 
	// Crea variables con el nombre de los input que provienen del formulario
	// le quita los espacios en blanco y codifica la cadena a ISO-8859-1
	if (!ValLon($NomUsu, false, 1, 50)) ReDir('ActualizaUsuario.php?id='.$id.'&a=1');
	if (!ValLon($ApeUsu, false, 1, 100)) ReDir('ActualizaUsuario.php?id='.$id.'&a=2');
	if (!ValLon($CorreUsu, false, 1, 100)) ReDir('ActualizaUsuario.php?id='.$id.'&a=3');
	if (!ValCor($CorreUsu)) ReDir('ActualizaUsuario.php?id='.$id.'&a=4');
	if (!ValLon($ConUsu, false, 1, 32)) ReDir('ActualizaUsuario.php?id='.$id.'&a=5');
	if (!ValLon($date, false,1,10)) ReDir('ActualizaUsuario.php?id='.$id.'&a=11');
	$con_db = new conex();
	$con_db -> consulta("SELECT id,img_usu FROM suv_usuario WHERE email_usu = '".$CorreUsu."' and id <> ".$id);
	if ($con_db -> numero_filas() <> 0) {
		ReDir('ActualizaUsuario.php?id='.$id.'&a=12');
	}	
	// Eliminar el archivo de imagen /////////////////////////////////////////////////////////////
	$con_db -> consulta("SELECT img_usu FROM suv_usuario WHERE id = ".$id);
	$Elimina_Archivo = $con_db -> extrae_registro();
	if (!unlink('fotospersonal/'.$Elimina_Archivo['img_usu']))
		ReDir('ActualizaUsuario.php?id='.$id.'&a=12');
	/////////////////////////////////////////////////////////////////////////////////////////////
	$nombre_archivo = $HTTP_POST_FILES['FotoUsu']['name'];
	$tipo_archivo = $HTTP_POST_FILES['FotoUsu']['type'];
	$tamano_archivo = $HTTP_POST_FILES['FotoUsu']['size'];
	if(empty($nombre_archivo)) ReDir('ActualizaUsuario.php?id='.$id.'&a=7');
	if ($tamaño_archivo > 4194304) ReDir('ActualizaUsuario.php?id='.$id.'&a=8'); // Tamaño no mayor a 4 Mb
	if (!ValArcImg(extension($nombre_archivo))) ReDir('ActualizaUsuario.php?id='.$id.'&a=9'); 
	$nuevo_nombre_archivo = 'PIC'.date('yndGis').'.'.extension($nombre_archivo);
	
	if (move_uploaded_file($HTTP_POST_FILES['FotoUsu']['tmp_name'], 'fotospersonal/'.$nuevo_nombre_archivo)){
       $con_db -> consulta("UPDATE suv_usuario SET nom_usu = '".$NomUsu."', ape_usu = '".$ApeUsu."', email_usu = '".$CorreUsu."', contra_usu = '".md5($ConUsu)."', perfil_usu = '".$PerUsu."', img_usu = '".$nuevo_nombre_archivo."',fn_usu = '".$date."' WHERE id =".$id.";");
	   
		Redir('usuarios.php');
    }else{
      ReDir('ActualizaUsuario.php?id='.$id.'&a=10');
    }
}
else{
	ReDir('logout.php');
}
?>
