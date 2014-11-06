<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
if($_POST){
if ($_SESSION['Perfil'] != 1) ReDir('inicio.php');
$conexion = new conex();
// Eliminar Archivo en el servidor
$conexion -> consulta("SELECT nom_arch FROM suv_archivo WHERE id_arch ='".$_POST['id']."'");
$Elimina_Archivo = $conexion -> extrae_registro();
unlink('archivos/'.$Elimina_Archivo['nom_arch']);
/////////////////////////////////////////////////////////////////////////////////////////////////////////
$conexion -> consulta("DELETE FROM suv_archivo WHERE id_arch ='".$_POST['id']."'");
if ($conexion -> filas_afectadas() <> 0) $jsonObj ='{"resp":"1","mensaje":"Archivo eliminado."}';
else $jsonObj ='{"resp":"0","mensaje":"Archivo no eliminado."}';
echo  $jsonObj;
die();
}
else{
ReDir('logout.php');
}
?>