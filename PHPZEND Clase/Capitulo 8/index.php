<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Administraci�n de libros.</title>
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
	<div id="wrapper">
    	<div id="header">
        	Sistema para Administraci&oacute;n de Libros		 
		</div>
	<div id="navigation">
    	Menu de navegacion		 
	</div>
	<div id="faux">
    	<div id="leftcolumn">
        	Columna Izquierda
        </div>
	    <div id="rightcolumn">
		    <?php
				require_once('formularios.php');
			?>
            <div><br />
            <?php
				require_once('mensajes.php');
			?>
            </div>
            <?php
            	require_once('select.php');	
			?>
		</div>	   
        <div id="footer">
			Pie de p&aacute;gina
        </div>
	</div>
</body>
</html>
