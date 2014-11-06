<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
if ($_SESSION['Perfil'] != 1){
	header('location:inicio.php');
}
// Desctrucción de las variables de sesion.
unset($_SESSION['NomUsu']);
unset($_SESSION['ApeUsu']);
unset($_SESSION['CorreUsu']);
unset($_SESSION['ConUsu']);

// Se crean algunas variables de sesión por si existe un error el usuario no tenga que volver a capturar todo.
$_SESSION['NomUsu'] = $_POST['NomUsu'];
$_SESSION['ApeUsu'] = $_POST['ApeUsu'];
$_SESSION['CorreUsu'] = $_POST['CorreUsu'];
$_SESSION['ConUsu'] = $_POST['ConUsu'];

if($_POST){ 
	// Verifica que exista un arreglo de tipo POST 
	foreach($_POST as $clave => $valor) $$clave=ReCarac($valor); 
	// Crea variables con el nombre de los input que provienen del formulario
	// le quita los espacios en blanco y codifica la cadena a ISO-8859-1
	if (!ValLon($NomUsu, false, 1, 50)) ReDir('usuarios.php?a=1');
	if (!ValLon($ApeUsu, false, 1, 100)) ReDir('usuarios.php?a=2');
	if (!ValLon($CorreUsu, false, 1, 100)) ReDir('usuarios.php?a=3');
	if (!ValCor($CorreUsu)) ReDir('usuarios.php?a=4');
	if (!ValLon($ConUsu, false, 1, 32)) ReDir('usuarios.php?a=5');
	if (!ValLon($date, false,1,10)) ReDir('usuarios.php?a=11');
	$con_db = new conex();
	$con_db -> consulta("SELECT id FROM suv_usuario WHERE email_usu = '".$CorreUsu."'");
	if ($con_db -> numero_filas() > 0) ReDir('usuarios.php?a=6'); // Se verifíca si el email ya existe.
	$nombre_archivo = $HTTP_POST_FILES['FotoUsu']['name'];
	$tipo_archivo = $HTTP_POST_FILES['FotoUsu']['type'];
	$tamano_archivo = $HTTP_POST_FILES['FotoUsu']['size'];
	if(empty($nombre_archivo)) ReDir('usuarios.php?a=7');
	if ($tamaño_archivo > 4194304) ReDir('usuarios.php?a=8'); // Tamaño no mayor a 4 Mb
	if (!ValArcImg(extension($nombre_archivo))) ReDir('usuarios.php?a=9'); // Verifica el tipo de extensión del archivo.
	$nuevo_nombre_archivo = 'PIC'.date('yndGis').'.'.extension($nombre_archivo);
	if (move_uploaded_file($HTTP_POST_FILES['FotoUsu']['tmp_name'], 'fotospersonal/'.$nuevo_nombre_archivo)){
	$con_db -> consulta("INSERT INTO suv_usuario (id, nom_usu, ape_usu, email_usu, contra_usu, perfil_usu, img_usu,fn_usu) VALUES (0,'".$NomUsu."','".$ApeUsu."','".$CorreUsu."','".md5($ConUsu)."','".$PerUsu."','".$nuevo_nombre_archivo."','".$date."');");
	   // Desctrucción de las variables de sesion.
		unset($_SESSION['NomUsu']);
		unset($_SESSION['ApeUsu']);
		unset($_SESSION['CorreUsu']);
		unset($_SESSION['ConUsu']);
		Redir('usuarios.php');
    }
	else{
      ReDir('usuarios.php?a=10');
    }
}
else
{
	ReDir('logout.php');
}

?>
