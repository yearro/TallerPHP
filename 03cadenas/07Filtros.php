<?php


// https://php.net/manual/es/filter.filters.php

$var="algun(correo)@eje\\mplo.com";
var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));

var_dump(filter_var($var, FILTER_SANITIZE_EMAIL));

var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));
$cadena = filter_var($var, FILTER_SANITIZE_EMAIL);
echo $cadena;

//$var = filter_var('true', FILTER_VALIDATE_BOOLEAN,array('flags' => FILTER_NULL_ON_FAILURE));
//var_dump($var);