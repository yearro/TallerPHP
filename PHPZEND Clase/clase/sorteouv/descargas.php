<?php
require_once('control.php');
require_once('clase_conexion.php');
require_once('FuncionesValidacion.php');
$conexion = new conex();
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
  <div id="Titulo"><img src="imagenes/titulos/descargas.gif" alt="" width="250" height="32" align="left" /></div>
  <div id="wrapper">
  <?php
  	if ($_SESSION['Perfil'] == 1){
	?>
  	<fieldset id="formulario_nuevo_usuario">
    	<legend>Subir Archivo</legend>
     <form name="AltaNuevoArchivo" id="AltaNuevoArchivo" method="post" enctype="multipart/form-data" action="NuevoArchivoDescarga.php">
        <div>
        	<label>Archivo </label>
            <input name="ArcUsu" type="file" size="25" id="ArcUsu">
        </div>
        <div>
        	<label>Descripci&oacute;n </label>
            <textarea id="DescripArch" name="DescripArch"></textarea>
        </div>
        <div>
        	<button id="botonEnviar" type="submit">Registrar</button>
        </div>
        <?php
			if(!empty($_GET)){
			$ce1 = '<div style="color:#FF0000"><label>';
			$ce2 = '</label></div>';
				switch ($_GET['a']){
					case 1: echo $ce1.ReCarac("Error: Tiene que describir el archivo que sube.").$ce2; break;
					case 2: echo $ce1.ReCarac("Error: No ha seleccionado un archivo.").$ce2; break;
					case 3: echo $ce1.ReCarac("Error: Tamaño del archivo no válido.").$ce2; break;
					case 4: echo $ce1.ReCarac("Error: Tipo de archivo no válido.").$ce2; break;
					case 5: echo $ce1.ReCarac("Error: Al intentar subir el archivo.").$ce2; break;
					case 6: echo $ce1.ReCarac("Error: No existe el archivo especificado.").$ce2; break;
					default: echo "No este jugando"; break; 
					}		
		}
		?>
     </form> 
    </fieldset>
    <?php } ?>
    
    
    <div id="Consulta_Usuarios">
    <?php 
	$a = new conex();
	$a -> consulta("SELECT * FROM suv_archivo");
	for ($conta = 1; $conta <= $a ->numero_filas(); $conta++){
		$archivo = $a -> extrae_registro();
		
		$cadena = "<div id=\"NomArchivo\">";
		$cadena .= "<span id=\"SpaTitulo\"><span id=\"SpaNombre\">".$archivo['nom_arch']."</span></span>";
		$cadena .= "</div>";
		$cadena .= "<div id=\"DesArchivo\">";
		$cadena .= $archivo['des_arch'];
		$cadena .= "</div>";
		$cadena .= "<div id=\"Mnu_Edicion_Usuario\">";
		$cadena .= "<input type=\"button\"  class=\"difcur\" value=\"Descargar\" onclick=\"DescargaArchivo(".$archivo['id_arch'].");\" /> ";
		if ($_SESSION['Perfil'] == 1){
		$cadena .= "<input type=\"button\" class=\"difcur\" value=\"Eliminar\" onclick=\"EliminaArchivo(".$archivo['id_arch'].");\"/>";
		}
		$cadena .= "</div>";
		echo $cadena;
	}
	?>
    </div>
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
