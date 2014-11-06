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
  <div id="Titulo"><img src="imagenes/titulos/inicio.gif" alt="" width="250" height="32" align="left" /></div>
  <div id="wrapper">
  	<div id="faux">
   	  <div id="columna_izq">
      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu risus odio, nec suscipit turpis. In sollicitudin mauris at nulla placerat eu pharetra tellus auctor.</p>
    	</div>
      <div id="columna_der"><!-- Se abre la columna derecha --->
      	<!-- Se abre la frase del mes --->
      	<div id="titulo_columna_derecha"><img src="imagenes/titulos/frase.gif" alt="Frase del mes" width="250" height="32" /></div>
        <div id="cargando_01" class="novisible"><img src="loading.gif" /></div>
        <div id="frase_del_mes" class="sivisible">
          <?php
				$conexion -> consulta("SELECT val_cnf FROM suv_config WHERE nom_cnf='frase_mes_cnf';");
				$fila = $conexion -> extrae_registro();
				echo $fila['val_cnf'];
			?>
        </div>
<?php
	    	if ($_SESSION['Perfil'] == 1) {?>
     		<div id="HabEdiFraSem" class="sivisible">
            <button id="botonEnviar" onClick="Habilita_Edicion_Editar_Frase_Mes()" type="button">Editar</button>
            </div>
		<?php } ?>
     	<div id="edita_frase_mes" class="novisible">
     		<form id="FormActualizaFraseSemana">
     		<textarea id="TextFraseSemana"></textarea>
     		<div>
     			<button id="botonEnviar" onClick="Desabilita_Edicion_Editar_Frase_Mes()" type="button">Cancelar</button>
     			<button id="botonEnviar" onClick="Editar_Frase_Semana()" type="button">Guardar</button>
            </div></form>
     	</div><!-- Se cierra la frase del mes --->
        
        <!-- Se abre la noticia urgente --->
        <div id="titulo_columna_derecha"><img src="imagenes/titulos/urgente.gif" alt="Urgente" width="250" height="32" /></div>
        <div id="cargando_02" class="novisible"><img src="loading.gif" /></div>
        <div id="inicio_urgente">
    		<?php
				$conexion -> consulta("SELECT val_cnf FROM suv_config WHERE nom_cnf='urgente_cnf';");
				$fila = $conexion -> extrae_registro();
				echo $fila['val_cnf'];
			?>
    	</div>
        <?php
	    	if ($_SESSION['Perfil'] == 1) {?>
     		<div id="HabEdiMenUrg" class="sivisible">
            <button id="botonEnviar" onClick="Habilita_Edicion_Mensaje_Urgente()" type="button">Editar</button>
            </div>
		<?php } ?>
        <div id="edita_mensaje_urgente" class="novisible">
     		<form id="FormActualizaMensajeUrgente">
     		<textarea id="TextMensajeUrgente"></textarea>
     		<div>
     			<button id="botonEnviar" onClick="Desabilita_Edicion_Mensaje_Urgente()" type="button">Cancelar</button>
     			<button id="botonEnviar" onClick="Editar_Mensaje_Urgente()" type="button">Guardar</button>
            </div></form>
         </div>
        <!-- Se cierra la noticia urgente --->
     </div> <!-- Se cierra la columna derecha --->
     
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
