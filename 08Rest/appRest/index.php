<?php
require('rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root','asemun');

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/',function () {
    echo "API Rest";
});
$app->get('/hola/:nombre',function ($nombre) {
    echo "Hola ".$nombre;
});


$app->get('/productos/',function () {
    $productos = R::findAll('productos');
    $con = 0;
    foreach($productos as $clave => $row){
        $data[$con] = array('id' => $row['id'], 'nombre' => $row['nombre'], 'proveedor' => $row['proveedor'], 'precio' => $row['precio'], 'stock' => $row['stock']);
        $con++;
    }
    $dato=json_encode($data);
    header('Content-type: application/json');
    echo '{"productos":'.$dato.'}';
});

$app->get('/productos/:id',function ($id) {
    $data = R::getRow('SELECT * FROM productos WHERE id= ?',array($id));
    echo json_encode($data);
});


// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);
$app->run();
/*
http://coenraets.org/blog/2011/12/restful-services-with-jquery-php-and-the-slim-framework/
*/