<?php
include("contador.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contador de archivos</title>
</head>
<body>
Usted es el visitante n&uacute;mero <?php IncrementaContador(); ?>
<br />
<a href="archivos01.php">Ejemplo de Archivos 01</a>
<br />
<a href="archivos02.php">Ejemplo de Archivos 02</a>
<br />
<a href="archivos03.php">Ejemplo de Archivos 03</a>
<br />
<a href="archivos04.php">Ejemplo de Archivos 04</a>
<br />
<a href="archivos05.php">Ejemplo de Archivos 05</a>
</body>
</html>