<?php
require_once('control.php');
require_once('clase_conexion.php');
$a = new conex();
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
  <div id="Titulo"><img src="imagenes/titulos/personas.gif" alt="" width="250" height="32" align="left" /></div>
  <div style=" margin:0px; border:#000000 solid 1px; height:1%; overflow:hidden; padding:5px; background:#FFFFFF;">
  <div style="border:#CCCCCC solid 1px; width:459px; float:left; padding:5px;">
  	<div class="personas_titulo1" id="personas_titulo1">
  		<img src="imagenes/titulos/empleado_mes.gif" alt="Empleado del mes" width="250" height="32" />
  	</div>
    <?php 
	$a -> consulta("SELECT img_usu FROM suv_usuario INNER JOIN suv_config ON suv_usuario.id = suv_config.val_cnf");
	$usuario = $a -> extrae_registro();
	$cadena = "<div id=\"Foto_Usuario2\"style=\"background:url(fotospersonal/".$usuario['img_usu'].") center no-repeat;\"></div>";
	echo $cadena;
	?>
    <div id="Mensaje_Empleado_del_Mes" class="sivisible">
    <?php
				$a -> consulta("SELECT val_cnf FROM suv_config WHERE nom_cnf='mensaje_empleado_del_mes_cnf';");
				$fila = $a -> extrae_registro();
				echo $fila['val_cnf'];
	?>
    </div>
    <!-- Esto hay que habilitarlo para que solo lo utilice el administrador. -->
    <?php
	if ($_SESSION['Perfil'] == 1) {
	?>
    <div id="Modifica_Mensaje_Empleado_Mes">
        <button id="botonEnviar" onClick="Habilita_Cambio_Frase_Empleado_Mes()" type="button">Modificar Mensaje</button>
    </div>
    <?php }	?>
    <div id="cargando_01" class="novisible"><img src="loading.gif" /></div>
    <div id="Mensaje_Empleado_del_Mes2" class="novisible">
    	<form id="FormActualizaEmpleadoMes">
     		<textarea id="TextEmpleadoMes"></textarea>
     		<div>
     			<button id="botonEnviar" onClick="Deshabilita_Cambio_Frase_Empleado_Mes()" type="button">Cancelar</button>
     			<button id="botonEnviar" onClick="Editar_Mensaje_Empleado_Mes()" type="button">Guardar</button>
            </div></form>
    </div>
    <form action="NuevoUsuarioMes.php" method="post" enctype="multipart/form-data">
    <div style="width:447px; border:#CCCCCC solid 1px; padding:5px; float:left; margin-top:5px;">
    <select id="EmpleadoMes" name="EmpleadoMes">
    <?php
	
	$a -> consulta("SELECT * FROM suv_usuario");
	for ($conta = 1; $conta <= $a ->numero_filas(); $conta++){
		$usuario = $a -> extrae_registro();
		$cadena = "<option value=\"".$usuario['id']."\">".$usuario['nom_usu']." ".$usuario['ape_usu']."</option>";
		echo $cadena;
	}
	?>
    </select>
    <input type="submit" style="cursor:pointer" value="Enviar" />
    </div></form>
    
  </div>
  
  <div style="border:#CCCCCC solid 1px; width:459px; float:left; margin-left:5px; padding:5px;">
  	<div class="personas_titulo2" id="personas_titulo2">
  		<img src="imagenes/titulos/notas.gif" alt="Notas" width="250" height="32" />
  	</div>
  </div>
  <div style="float:left; width:935px; border:solid 1px #CCCCCC; margin-top:5px; padding:5px;">
  	<div class="personas_titulo1" id="personas_titulo1">
  		<img src="imagenes/titulos/cumpleaños.gif" alt="" width="250" height="32" />
  	</div>
    
  </div>
  <div style="border:#CCCCCC solid 1px; width:459px; float:left; padding:5px; margin-top:5px;"> 
  <?php
	$mes = date('n');
	$a -> consulta("SELECT nom_usu,ape_usu,fn_usu FROM suv_usuario WHERE fn_usu LIKE '%-".$mes."-%'");
	$cadena = "";
	for ($conta = 1; $conta <= $a ->numero_filas(); $conta++){
		$usuario = $a -> extrae_registro();
		$dia = substr(strrchr($usuario['fn_usu'], '-'), 1); // Se extrae el dia de la fecha de nacimiento
		$dia = intval($dia,"integer"); // Se convierte a entero
		$cadena .= "<label>".$usuario['nom_usu']." ".$usuario['ape_usu']." ( dia ".$dia." )</label><br />";
	}
	echo $cadena;
	?>
  
  </div>
  <div style="border:#CCCCCC solid 1px; width:459px; float:left; margin-left:5px; padding:5px; margin-top:5px; height:250px;"></div>
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
