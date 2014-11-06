<?php
require_once('control.php');
require_once('clase_conexion.php');
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
  <div id="Titulo"><img src="imagenes/titulos/boletin.gif" alt="" width="250" height="32" align="left" /></div>
  
  <div id="contenido">
    <div id="boletin_texto">
      <h2>Ganar es grande Apoyar es Enorme<br />
      </h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
    </div>
    <div id="boletin_imagen">
      <div align="center"><img src="imagenes/personas_suv/muestra.png" alt="Boletín" width="260" height="260" /></div>
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
