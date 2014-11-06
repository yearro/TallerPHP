<?php
require('rb.php');
R::setup('mysql:host=localhost;dbname=suedb', 'root','');



$asignacion = R::find('grupos',' cint_grupo = ? AND sem_grupo = ?',array(5,1));

//$data=R::getRow('SELECT * FROM productos WHERE id= :id',arrary(':id'=>1);
//var_dump($data);
$result = count($asignacion);
echo $result;
/*$productos = R::findAll('productos');
//var_dump($productos);
$con = 0;
foreach($productos as $clave => $row){
	$data[$con] = array('id' => $row['id'], 'nombre' => $row['nombre'], 'proveedor' => $row['proveedor'], 'precio' => $row['precio'], 'stock' => $row['stock']);
	$con++;
}
$dato=json_encode($data);
header('Content-type: application/json');
echo '{"productos":'.$dato.'}';*/


			
// Agregar un registro
/*
$producto = R::dispense('productos');
$producto->nombre='Cereal';
$producto->proveedor="Fulano de Tal";
$producto->precio=12;
$producto->stock=25;
$id=R::store($producto);
*/

// Actualizar registro
/*
$producto = R::load('productos',1);
$producto->nombre='Cereal';
$producto->proveedor="Fulano de Tal";
$producto->precio=12;
$producto->stock=25;
R::store($producto);
*/

// Eliminar
/*
$producto = R::load('productos',1);
R::trash($producto);
*/

// Seleccionar todos y todo
/*
$productos = R::findAll();
echo $productos;
*/


?>