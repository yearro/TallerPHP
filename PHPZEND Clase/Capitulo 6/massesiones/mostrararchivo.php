<?php
$fichero="ingreso.pdf";
$len = filesize($fichero);
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: application/pdf");
header("Content-Length: $len");
header("Content-Disposition: inline; filename=felipe.pdf");
readfile($fichero); ?>