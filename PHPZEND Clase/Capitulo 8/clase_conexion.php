<?php
class conex {
	public $conexion;
	public $resul_consul;

	function __construct(){
		$config = parse_ini_file("config.ini",TRUE);
		$this -> conexion = @mysql_connect($config["Base_Datos"]["servidor"],$config["Base_Datos"]["usuario"],$config["Base_Datos"]["password"]) or $this -> pinta_error('No se estableci&oacute; la conexi&oacute;n con el servidor.');
		if(!@mysql_select_db($config["Base_Datos"]["base_datos"],$this -> conexion))
			$this -> pinta_error('No se encontro la base de datos.');
	}
	function consulta($consul){
		$this -> resul_consul = mysql_query($consul);
		if(!$this -> resul_consul)
			$this -> pinta_error('No se pudo realizar la consulta.');
	}
	
	function extrae_registro(){
		if ($fila = @mysql_fetch_array($this -> resul_consul)){
			return $fila;
		} else {
			return false;
		}
	}
	
	function numero_filas()
	{
		return @mysql_num_rows($this -> resul_consul);
	}
	
	function filas_afectadas()
	{
		return @mysql_affected_rows($this -> conexion);
	}
	
	function ultima_fila()
	{
		return @mysql_insert_id($this -> conexion);
	}
	
	function __destruct(){
		@mysql_close($this -> conexion);
		/*echo "cerro la conexion";*/
	}
	
	function pinta_error($cad){
echo <<<DHD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Error en la aplicaci&oacute;n</title>
</head>
<body style="text-align:center;">
<div style="width:400px; margin:0 auto 0 auto; border:#FF0000 solid 1px;">
<span style="color:#FF0000;">$cad</span>
</div>
</body>
</html>
DHD;
	exit();
}	
	

}