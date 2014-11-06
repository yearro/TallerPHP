<?php
require_once('clase_conexion.php');
$con = new conex();
$con -> consulta("SELECT * FROM folios WHERE ".$_POST['banco']." = ".$_POST['referencia']);
$fila = $con -> extrae_registro();
$error = $con -> numero_filas();
if ($error < 1){
header ('location:error.php');
die();
}   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SORTEO UV: Ficha de Folios Electrónicos</title>
<style type="text/css">
<!--
#encabezado {
	font-family: "Times New Roman", Times, serif;
	font-size: 16pt;
	font-weight: bold;
	color: #000000;
	text-align: left;
	width: 100%;
}
.contenido {
	font-size: 11pt;
}
.label {
	float: left;
	padding: 2pt 20pt 2pt 0pt;
	clear: left;
	width: 40pt;
	font-weight: bold;
}
.dato {
	float: none;
	padding: 2pt 0pt 2pt 40pt;
	color: #006633;
	clear: right;
}
.texto1 {
	font-size: 7pt;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 8pt;
	color: #000000;
}
.titulo {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16pt;
	font-weight: bold;
}
#
-->
</style>
</head>

<body>
<div id="encabezado">
  <h1><img src="logo.gif" alt="" width="250" height="61" align="left" /></h1>
  <h1><span class="titulo">Sorteo de Colaboradores UV 2009</span><br />
    <span class="texto1">Permiso  SEGOB 200996439458</span></h1>
  <hr />
</div>
<div class="label" id="fecha1">Fecha:</div>
<div class="dato" id="fecha2">
<?php 
	setlocale(LC_TIME,"es_ES");//Se obtiene el tiempo local en español.
	$arreglo_dia_semana = array('Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','Sabado'); 
	// Arreglo de los dias de la semana
	echo $arreglo_dia_semana[strftime("%w" ,time())].' '.strftime("%e de %B de %Y." ,time()); //Impresion del formato de la fecha.
?>
</div>
<div class="label" id="Clave1">Clave:</div>
<div class="dato" id="Clave2"><?php echo $_POST['referencia']; ?></div>
<div class="label" id="Nombre1">Nombre:</div>
<div class="dato" id="Nombre2"><?php echo $fila['nombre']." ".$fila['paterno']." ".$fila['materno'];?></div>
<div class="label" id="Direccion1">Direccion:</div>
<div class="dato" id="Direccion2"><?php echo $fila['domicilio'];?></div>
<div class="label" id="Direccion3">Colonia:</div>
<div class="dato" id="Direccion4"><?php echo $fila['colonia'];?></div>
<div id="Texto">
  <p>Recuerda  que por cada 5 boletos vendidos del “2do. Gran Sorteo UV” el sistema  informático que registra a los Colaboradores asigna un folio de participación  para el “Sorteo de Colaboradores UV 2009” para que te puedas ganar uno de los  53 premios.</p>
  <p><strong>Lista  de Folios asignados para participar en el “Sorteo de Colaboradores UV 2009”</strong></p>
</div>
<div class="contenido" id="contenido">
	<?php 
		$con -> consulta("SELECT folio FROM folios WHERE nombre='".$fila['nombre']."' and paterno='".$fila['paterno']."' and materno='".$fila['materno']."' and domicilio='".$fila['domicilio']."'"); 
		$var = true;
					echo "<ul>";
		for ($conta = 1; $conta <= $con ->numero_filas(); $conta++) {
			$folios = $con -> extrae_registro();
			if ($var){
				echo "<li  style=\"background:#FFFFFF;width:200px\">".$conta."  ".$folios['folio']."</li>";
				$var = false;}
			else{
				echo "<li  style=\"background:#CCCCCC;width:200px\">".$conta."  ".$folios['folio']."</li>";
				$var = true;}
         	    }
		}
		echo "</ul>";
	?>
</div>
<div class="texto1" id="Pie de pagina">
  <hr />
  <p>Los premios con valor mayor o igual de 1,500  salarios mínimos general diario vigente en el Distrito Federal, serán  entregados en presencia de algún inspector de la Secretaría de Gobernación<em>, </em>de acuerdo al calendario que se  especifica dentro del permiso.<br />
    El resto de los premios se entregarán de manera  directa por autoridades de la Universidad Veracruzana  y su “Operador” la Fundación de la Universidad Veracruzana,  A.C., dentro de los veinte (20) días hábiles posteriores a la realización del  evento, concluyendo el día viernes 25 de diciembre de 2009. Los premios serán  entregados en el siguiente domicilio: Estanzuela No. 18, Fracc. Pomona, C.P.  91040, Xalapa Ver.<br />
    Los resultados serán publicados en el Diario de  Xalapa y en la siguiente dirección de Internet <a href="http://www.sorteouv.org.mx">www.sorteouv.org.mx</a>, el miércoles 2 de diciembre de 2009<br />
    <strong>Valor del  premio mayor: </strong>$111,370.00  (ciento once mil trescientos setenta pesos 00/100 M N.)<br />
  <strong>Mecánica  del sorteo: </strong>Formación  de números</p>
  <p>Los premios serán pagados de conformidad con lo      establecido en las bases del sorteo, de conformidad a lo señalado en el      artículo 121 del Reglamento de la Ley Federal de Juegos y Sorteos.<br />
Para cualquier aclaración o información a este      sorteo o resultados del mismo, comunicarse a los teléfonos: lada sin costo      01 800 2 SORTEO (76 78 36) y 01 (228) 841-5205 o acuda al siguiente      domicilio: Estanzuela  No. 18 Fracc.      Pomona, C.P. 91040, Xalapa, Veracruz. web: <a href="http://www.sorteouv.org.mx">www.sorteouv.org.mx</a>, correo: <a href="mailto:info@sorteouv.org.mx">info@sorteouv.org.mx</a>.<br />
En caso de queja derivada de este sorteo, favor      de acudir a la Dirección General       Adjunta de Juegos y Sorteos de la       Secretaría      de Gobernación ubicada en Hamburgo No. 135 Piso 12, Colonia Juárez,      Delegación Cuauhtémoc C.P. 06600, México, D.F., o bien comunicarse al      teléfono 01 (55) 5209-8800.

    </p>
  </p>
  <p><strong>Responsable del Sorteo</strong> Universidad  Veracruzana, Lomas del Estadio S/N Edificio A 5to piso oficina del Abogado  General, C.P. 91090, Xalapa, Veracruz. Tel 01(228)8421700 ext. 11717. <strong>Operador del Sorteo </strong>Fundación de la Universidad Veracruzana,  A.C.<br />
    <strong>Vigencia  del Permiso:</strong> Lunes 1 de junio al domingo 29 de noviembre de  2009. <br />
  <strong>Vigencia de la promoción:</strong> Lunes 1 de junio al sábado 28 de noviembre de    2009 </p>
</div>
</body>
</html>
