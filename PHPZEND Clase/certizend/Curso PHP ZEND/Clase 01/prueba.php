<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
echo ("Hola \n mundo.");
echo (int)((0.1 + 0.7) * 10 /34);
echo "uno","dos","tres";
$YO = 25;
$Yo = 30;
echo $YO."<br>".$Yo;
define("Hola","Nada de nada");
echo "<br>".Hola;
$a = 10;
$b = $a; // by reference
$b = 20;
echo $a,$b;


?>
<input name="" type="checkbox" value="" />
</body>
</html>
