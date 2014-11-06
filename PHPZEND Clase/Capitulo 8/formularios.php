<?php
$dir = 'location:http://localhost/PHPZEND/Capitulo%208/index.php?mensaje=';
$cadena =<<<CAD
<form action="insert.php" method="post">
  				<fieldset id="formu_alta_libro">
    				<legend> Alta de Libros </legend>
    				Titulo: <input type="text" size="30" name="titulo" /><br />
    				Autor: <input type="text" size="30" name="autor" /><br />
    				Publicaci&oacute;n: <input type="text" size="30" name="publicacion" /><br />
                    Stock: <input type="text" size="30" name="stock" /><br />
                    <input type="submit" value="Agregar" />
  				</fieldset>
			</form>
CAD;
if($_GET['form']){
	if($_GET['id']){
	$indice = intval($_GET['form']);
	switch($indice){
		case 1:	require_once('clase_conexion.php');
				$nueacceso = new conex();
				$indice= intval($_GET['id']);
				$sql = "select * from libro where id=".$indice;
				$nueacceso -> consulta($sql);
				if($nueacceso->filas_afectadas() == 0){
					header($dir.'9');
					exit();
				}
				$fila = $nueacceso-> extrae_registro();
				$autor = $fila['autor'];
				$titulo = $fila['titulo'];
				$publicacion = $fila['publicacion'];
				$stock=$fila['stock'];
				$id=$fila['id'];
				
				
$cadena =<<<CAD
<form action="actualiza.php" method="post">
  				<fieldset id="formu_alta_libro">
    				<legend> Actualiza Libros </legend>
					<input type="hidden" name="id" value="$id">
    				Titulo: <input type="text" size="30" name="titulo" value="$titulo" /><br />
    				Autor: <input type="text" size="30" name="autor" value="$autor" /><br />
    				Publicaci&oacute;n: <input type="text" size="30" name="publicacion" value="$publicacion" /><br />
                    Stock: <input type="text" size="30" name="stock" value="$stock" /><br />
                    <input type="submit" value="Actualiza" />
  				</fieldset>
			</form>
			<a href="http://localhost/PHPZEND/Capitulo%208/">Agregar nuevo usuario</a>
CAD;
				break;
		default: header($dir.'8');
				 exit();
	}
	echo $cadena;	
	}
	else{
		header($dir.'9');exit();		
	}
}
else
	echo $cadena;
?>