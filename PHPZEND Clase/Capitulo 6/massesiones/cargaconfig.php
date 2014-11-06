<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carga configuracion</title>
</head>

<body>
<?php
$config = parse_ini_file("configuracion.ini",TRUE);
echo $config["Base__datos"]["servidor"]."<br>";
echo $config["Base__datos"]["password"]."<br>";
echo $config["Base__datos"]["base_datos"]."<br>";
echo $config["Preferencias"]["fuente"];
?>
</body>
</html>
