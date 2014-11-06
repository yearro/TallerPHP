<?php
$archivo="mnu_inicio.jpg";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"".$archivo."\"\n");
$fp=fopen($archivo, "r");
fpassthru($fp);
?>