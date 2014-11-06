<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ZEND</title>
</head>

<body>
<?php
	// Muestra de como se pasan parámetros por get.
	echo "Variables pasadas mediante GET:<br>";
	foreach ($_POST as $indice => $valor) {
	echo "$indice : $valor<br>";
	}
	var_dump($_POST['gustos']);
	
	
?>
<!-- --	|>

</body>
</html>
