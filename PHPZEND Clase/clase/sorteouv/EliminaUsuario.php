<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
if($_POST){
if ($_SESSION['Perfil'] != 1) ReDir('inicio.php');
if ($_SESSION['ID'] == $_POST['id']) ReDir('inicio.php');
$conexion = new conex();
// Eliminar Imagen del Usuario
$conexion -> consulta("SELECT img_usu FROM suv_usuario WHERE id ='".$_POST['id']."'");
$Elimina_Archivo = $conexion -> extrae_registro();
unlink('fotospersonal/'.$Elimina_Archivo['img_usu']);
/////////////////////////////////////////////////////////////////////////////////////////////////////////
$conexion -> consulta("DELETE FROM suv_usuario WHERE id ='".$_POST['id']."'");
if ($conexion -> filas_afectadas() <> 0) $jsonObj ='{"resp":"1","mensaje":"Usuario eliminado."}';
else $jsonObj ='{"resp":"0","mensaje":"Usuario no eliminado."}';
echo  $jsonObj;
die();
}
else{
ReDir('logout.php');
}
?>