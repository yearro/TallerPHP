<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de una cookie</title>
</head>

<body>
<form action="ProcesaEjemplo06.php" method="get">
<label>Nombre</label><br /><input type="text" name="usuario" id="usuario" value="<?php echo $_COOKIE["prueba"];?>" /><br />
<label>Contrase&ntilde;a</label><br /><input type="password" name="contra" id="contra" /><br />
<input type="submit" value="Enviar" />
</form>
<?php
foreach ($_COOKIE["arreglo"] as $ind => $valor)
	echo $id." => ".$valor."<br>";
?>
</body>
</html>