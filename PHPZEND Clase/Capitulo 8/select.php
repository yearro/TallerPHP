<?php
require_once('clase_conexion.php');
$acceso = new conex();
$sql = "select * from libro";
$acceso -> consulta($sql);
$cadena =<<<CAD
<table summary="Libros">
  <caption>Lista de libros disponibles</caption>
  <colgroup span="1" style="color:red;" />
  <colgroup span="3" style="color:blue;" />
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">titulo</th>
      <th scope="col">autor</th>
      <th scope="col">publicacion</th>
      <th scope="col">stock</th>
	  <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
CAD;
while($file = $acceso -> extrae_registro()){
	$cadena.= "<tr><th scope=\"row\">".$file[0]."</th>";
	$cadena.= "<td>".$file[1]."</td><td>".$file[2]."</td>";
	$cadena.= "<td>".$file[3]."</td><td>".$file[4]."</td>";
	$cadena.= "<td><a href=\"elimina.php?indice=".$file[0]."\">Elimina</a> ";
	$cadena.= "<a href=\"index.php?id=".$file[0]."&form=1\">Actualizar</a></td>";
	$cadena.= "</tr>";
}
$cadena.= "</tbody></table>";
echo $cadena;
?>