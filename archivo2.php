<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prueba aplicaciones recursivas</title>
</head>
<body>
	<?php
	if ($_POST) {
		echo "<pre>";
		//var_dump($_POST);
		extract($_POST);
		echo $nombre;

	}elseif ($_GET) {
		echo "<pre>";
		var_dump($_GET);
	}else{?>
	<form action="#" method="POST">
		<label for="nombre">Nombre :</label>
		<input type="text" name="nombre" placeholder="Nombre" required><br>
		<label for="paterno">Apellido paterno :</label>
		<input type="text" name="paterno" placeholder="Apellido paterno" required><br>
		<label for="materno">Apellido materno :</label>
		<input type="text" name="materno" placeholder="Apellido materno" required><br>
		<input type="submit">
	</form>
	<?php
	}
	?>

	

</body>
</html>
