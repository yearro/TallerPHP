<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejemplos Certificacion ZEND</title>
</head>

<body>
<?php
$a = array();
$a[] = array('Azul','Verde','Rojo');
$a[] = array(1,2,3,4,5);
$a[0] = array('cielo','electrico','naval');
echo count($a)."<br>";
$ae5 = array(1,2,3);
$ae6 = array (1 => '2', 2 => 3,0 => '1');
echo var_dump($ae5 == $ae6);
echo "<br>";
echo var_dump($ae5 === $ae6);
echo "<br>";

?>

</body>
</html>