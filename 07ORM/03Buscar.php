<?php
require 'RedBeanPHP/rb.php';

R::setup('mysql:host=localhost;dbname=pruebaORM','admin','1234');

$usuarios  = R::find('usuarios', 'edad > 49');
//$usuarios = R::getAll('select * from usuarios where edad>:num',[':num'=>49]);
//$usuarios = R::getAll('select * from usuarios where edad>?',[49]);

foreach($usuarios as $usuario) {
	echo $usuario['id']."<br>";
	echo $usuario['nombre']."<br>";
	echo $usuario['paterno']."<br>";
	echo $usuario['materno']."<br>";
	echo $usuario['edad']."<br>";

	// Manera alterna
	echo $usuario->id."<br>";
	echo $usuario->nombre."<br>";
	echo $usuario->paterno."<br>";
	echo $usuario->materno."<br>";
	echo $usuario->edad."<br>";
}