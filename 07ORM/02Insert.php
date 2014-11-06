<?php
require 'RedBeanPHP/rb.php';

R::setup('mysql:host=localhost;dbname=tallerPHP','fulanito','1234');

$usuario = R::dispense('usuarios'); // convenios
$usuario->nombre = 'Yeri';
$usuario->paterno = 'Armenta';
$usuario->materno = 'Rodríguez';
$usuario->edad=61;
$usuario = R::store($usuario);

var_dump($usuario);