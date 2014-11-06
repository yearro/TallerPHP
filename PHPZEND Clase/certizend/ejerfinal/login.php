<?php
require_once('clase_conexion.php');
$conex = new conex();

if (empty($_POST['UsuNom']) and empty($_POST['Contra'])){ $conex -> pinta_error("Envio datos vac&iacute;os");}
if ((strlen(trim($_POST['UsuNom'])) == 0) or (strlen(trim($_POST['UsuNom'])) > 100) or 
(strlen(trim($_POST['Contra'])) == 0)) {$conex -> pinta_error("Error en el envio de los datos.");}

$conex -> consulta("select from usuarios where email = $_POST['UsuNom'] and contra = $_POST['Contra']");
//if ($conex -> 

session_name($_POST['UsuNom']);
session_start();



?>