<?php
require "09CapaSeguridad.php";
//$_GET = sanitize($_GET);
//$_POST = sanitize($_POST);
$cadena_final = sanitize('<script>window.location = "http://www.google.com";</script> nada');
echo strlen($cadena_final)."<br>";
echo $cadena_final;

