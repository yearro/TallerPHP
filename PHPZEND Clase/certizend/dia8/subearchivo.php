<?php
//datos del arhivo
$nombre_archivo = $HTTP_POST_FILES['userfile']['name'];
$tipo_archivo = $HTTP_POST_FILES['userfile']['type'];
$tamano_archivo = $HTTP_POST_FILES['userfile']['size'];

foreach($HTTP_POST_FILES['userfile'] as $ind => $val){
echo "Indice $ind valor = $val <br>";
}
if (is_uploaded_file($HTTP_POST_VARS['userfile']['tmp_name'])){
	echo "Si subio el archivo";
}

//compruebo si las características del archivo son las que deseo
/*if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "doc")) && ($tamano_archivo < 500000))) {
    echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{*/
    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){
       echo "El archivo ha sido cargado correctamente.";
    }else{
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
//} */
?>