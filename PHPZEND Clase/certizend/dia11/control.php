<?php
session_start(); //Se inicia la sesion
session_set_cookie_params(0,"/",$_SERVER['HTTP_HOST'],0);// Se controla que no haya cookies maliciosos, con el tiempo de vida de la cookie, el lugar donde la información es guardada, el dominio de la cookie y la conexion que tiene la cookie para transferirse.
if ($_SESSION['AutenSis1'] != 'Si'){
header('location:sesion1.php');
}

?>