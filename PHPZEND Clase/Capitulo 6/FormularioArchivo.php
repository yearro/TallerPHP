<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Carga de archivos</title>
<style>
.ventana {margin-left:20px; margin-top:20px; padding:2px; border:#09F solid 1px; width:300px;}
</style>
</head>

<body>
<fieldset class="ventana">
	<legend>Subir Archivo</legend>
    <form method="post" enctype="multipart/form-data" action="SubeArchivo.php">
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576010485760" />
    <div>
    	<label>Archivo </label>
        <input name="Archivo" type="file" size="25">
    </div>
    <div>
    	<button type="submit">Enviar</button>
    </div></form>
</fieldset>
</body>
</html>