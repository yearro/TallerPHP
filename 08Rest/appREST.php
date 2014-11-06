<?php
$method = $_SERVER['REQUEST_METHOD'];
$resource = $_SERVER['REQUEST_URI'];
switch ($method) {
    case 'GET':
        break;
    case 'POST':
        $arguments = $_POST;
        break;
    case 'PUT':
        parse_str(file_get_contents('php://input'), $arguments);
        break;
    case 'DELETE':
        break;
}
echo json_encode($response,true);