<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
if ($_SESSION['Perfil'] != 1){
	header('location:inicio.php');
}

$conexion = new conex();
$conexion -> consulta("SELECT * FROM suv_usuario WHERE id = ".$_GET['id']);
$Actualiza_Usuario = $conexion -> extrae_registro();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="funciones.js"></script>
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<style type="text/css">@import url("jscalendar/calendar-blue.css");</style>
<script type="text/javascript">
window.onload = function() {
  Calendar.setup({
    inputField: "fecha",
    ifFormat:   "%Y/%d/%m",
    button:     "selector"
  });
}
</script>
</head>

<body>
	<div class="cuerpo" id="Contenedor">
  		<div id="encabezado">
  			<div id="saludo">Bienvenido: <strong><?php echo $_SESSION['NombreUsuario'];?></strong></div>
    		<div id="perfil"><a href="#">Mi Perfil</a></div>
            <div id="cerrar"><a href="logout.php">Salir</a></div>
            <?php
			if ($_SESSION['Perfil'] == 1) {
			?>
            <div id="panel"><a href="usuarios.php">Panel de Administraci&oacute;n</a></div>
			<?php } ?>
  		</div>
  <div id="menu">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="inicio.php">INICIO</a>        </li>
      <li><a href="organizacion.php">ORGANIZACI&Oacute;N</a></li>
      <li><a href="personas.php">PERSONAS SUV</a></li>
      <li><a href="boletin.php">BOLET&Iacute;N</a></li>
      <li><a href="tips.php">TIPS</a></li>
      <li><a href="descargas.php">DESCARGAS</a></li>
      <li><a href="imagenes.php">IMAGENES</a></li>
      <li><a href="contacto.php">CONTACTO</a></li>
    </ul>
    <br />
</div>
  <div id="Titulo">Actualiza Usuario</div>
  <div id="wrapper">
  	<fieldset id="formulario_nuevo_usuario">
    	<legend>Registrar usuario</legend>
       <form name="ActualizaUsuario" id="ActualizaUsuario" method="post" enctype="multipart/form-data" action="UpdateUsuario.php">
       <div>
        	<label>Nombre </label>
            <input name="NomUsu" type="text" id="NomUsu" size="25" value="<?php echo $Actualiza_Usuario['nom_usu'];?>" />
            <input type="hidden" name="id" id="id" value="<?php echo $Actualiza_Usuario['id']; ?>" />
        </div>
        <div>
        	<label>Apellidos </label>
            <input name="ApeUsu" type="text" id="ApeUsu" size="25" value="<?php echo $Actualiza_Usuario['ape_usu'];?>" />
        </div>
        <div>
        	<label>Fecha de nacimiento </label>
            <input type="text" name="date" id="fecha" readonly="readonly" value="<?php echo $Actualiza_Usuario['fn_usu']; ?>" />
			<img src="jscalendar/img.gif" id="selector" /></div>
        <div>
        	<label>Correo Electr&oacute;nico </label>
            <input name="CorreUsu" type="text" id="CorreUsu" size="25" value="<?php echo $Actualiza_Usuario['email_usu']; ?>" />
        </div>
        <div>
        	<label>Contrase&ntilde;a </label>
            <input name="ConUsu" type="password" id="ConUsu" value="" />
        </div>
        <div>
        	<label>Tipo de cuenta </label>
            <select id="PerUsu" name="PerUsu">
            <?php
            if ($Actualiza_Usuario['perfil_usu'] == 1){
				$perfil = "<option value=\"1\" selected=\"selected\">Administrador</option>";
				$perfil .= "<option value=\"0\">Personal</option>";
			}
			else{
				$perfil = "<option value=\"1\">Administrador</option>";
				$perfil .= "<option value=\"0\" selected=\"selected\">Personal</option>";
			}
			echo $perfil;
            ?>
            </select>
        </div>
        <div>
        	<label>Fotograf&iacute;a </label>
            <input name="FotoUsu" type="file" size="25" id="FotoUsu">
        </div>
        <div>
        	<button id="botonEnviar" type="submit">Actualizar</button>
        </div>
        <?php
			if(!empty($_GET['a'])){
			$ce1 = '<div style="color:#FF0000"><label>';
			$ce2 = '</label></div>';
				switch ($_GET['a']){
					case 1: echo $ce1.ReCarac("Error: Nombre de usuario no válido.").$ce2; break;
					case 2: echo $ce1.ReCarac("Error: Apellidos del usuario no válidos.").$ce2; break;
					case 3: echo $ce1.ReCarac("Error: Email no válido.").$ce2; break;
					case 4: echo $ce1.ReCarac("Error: Email no válido.").$ce2; break;
					case 5: echo $ce1.ReCarac("Error: Contraseña no válida.").$ce2; break;
					case 6: echo $ce1.ReCarac("Error: El email ya está registrado.").$ce2; break;
					case 7: echo $ce1.ReCarac("Error: No seleccionó un archivo a subir.").$ce2; break;
					case 8: echo $ce1.ReCarac("Error: Tamaño del archivo no válido.").$ce2; break;
					case 9: echo $ce1.ReCarac("Error: Tipo de archivo no válido.").$ce2; break;
					case 10: echo $ce1.ReCarac("Error: No se pudo cargar el archivo.").$ce2; break;
					case 11: echo $ce1.ReCarac("Error: No se proporcionó una fecha.").$ce2; break;
					case 12: echo $ce1.ReCarac("Error: Existen más de 2 correos electrónicos iguales.").$ce2; break;
					default: echo "No este jugando."; break; 
					}
							
		}
		?>
     </form>       
    </fieldset>
    
  </div>
  <div id="footer">Content for  id "footer" Goes Here</div>
</div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
