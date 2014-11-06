<?php
require 'RedBeanPHP/rb.php';

R::setup('mysql:host=localhost;dbname=pruebaORM','admin','1234');

$id = 1;
$usuario = R::load('usuarios',$id);
R::trash($usuario);

echo "<pre>";
var_dump($usuario);