<?php
if($_POST){ 
	foreach($_FILES['Archivo'] as $id => $valor)
		echo $id.' => '.$valor.'<br>'; 
	if(is_uploaded_file($_FILES['Archivo']['tmp_name']))
		echo "Si se subio el archivo<br>";
	else
		echo 'No subio el archivo<br>';
	
	if (move_uploaded_file($_FILES['Archivo']['tmp_name'],$_FILES['Archivo']['name']))
		echo 'Si se pudo mover el archivo<br>';
	else
		echo 'No se pudo mover el archivo <br>';	
echo "Tama&ntilde;o de archivo = ".ini_get('upload_max_filesize').'<br>';	
}
?>
