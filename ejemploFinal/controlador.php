<?php
// Instalación y configuración de RedBeanPHP //////////////////////
require('rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root','asemun');
//////////////////////////////////////////////////////////////////
$method = $_SERVER['REQUEST_METHOD'];
$resource = $_SERVER['REQUEST_URI'];
switch ($method) {
	case 'GET': 
		foreach($_GET as $clave => $valor) 
			$$clave = $valor;
		unset($clave);
		unset($valor);

		if (strcasecmp($devuelve,'productos') == 0){
			$productos = R::findAll('productos');
			$con = 0;
			foreach($productos as $clave => $row){
				$data[$con] = array('id' => $row['id'], 'nombre' => $row['nombre'], 'proveedor' => $row['proveedor'], 'precio' => $row['precio'], 'stock' => $row['stock']);
				$con++;
			}
			$dato=json_encode($data);
			header('Content-type: application/json');
			echo '{"productos":'.$dato.'}';
			exit();
		}

		if (strcasecmp($devuelve,'producto') == 0){
			$data = R::getRow('SELECT * FROM productos WHERE id= ?',array($id));
			echo json_encode($data);
			exit();
		}

	break;

	case 'POST':
		foreach($_POST as $clave => $valor)
			$$clave = $valor;
		unset($clave);
		unset($valor);
		
		try {
			$producto = R::dispense('productos');
			$producto->nombre=$nombreProd;
			$producto->proveedor=$nombreProv;
			$producto->precio=$precioPro;
			$producto->stock=$stockPro;
			R::store($producto);
			$data['suceso'] = true;
			$data['mensaje'] = "Producto Agregado";
		} catch (Exception $e) {
			$data['suceso'] = false;
			$data['mensaje'] = $e->getMessage();
		}
		echo json_encode($data);
	break;

	case 'PUT':
		parse_str(file_get_contents('php://input'), $arguments);
		foreach($arguments as $clave => $valor)
			$$clave = $valor;
		unset($clave);
		unset($valor);
		try {
			$producto = R::load('productos',$id);
			$producto->nombre=$nombreProd;
			$producto->proveedor=$nombreProv;
			$producto->precio=$precioPro;
			$producto->stock=$stockPro;
			R::store($producto);
			$data['suceso'] = true;
			$data['mensaje'] = "Producto actualizado";
		} catch (Exception $e) {
			$data['suceso'] = false;
			$data['mensaje'] = $e->getMessage();
		}
		echo json_encode($data);
	break;

	case 'DELETE':
		parse_str(file_get_contents('php://input'), $arguments);
		foreach($arguments as $clave => $valor)
			$$clave = $valor; 
		unset($clave);
		unset($valor);
		try {
			$producto = R::load('productos',$id);
			R::trash($producto);
			$data['suceso'] = true;
			$data['mensaje'] = "Producto eliminado";
		} catch (Exception $e) {
			$data['suceso'] = false;
			$data['mensaje'] = $e->getMessage();
		}
		echo json_encode($data);
	break;
}
?>