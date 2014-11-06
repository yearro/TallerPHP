
1.- Hacer una funcion para encriptar mensajes por <br />
    el metodo Cesar. (solo letras minusculas)<br>
2.- Hacer una funcion con una aexpresion regular<br />
    para una direccion IP valida, una que valide el CURP<br />
    y otra que valide el RFC, validar que solo sean letras
    mayusculas.<br /><br />
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<?php
function encripta_cesar($mensaje){
	str_replace('ñ','&ntilde;',$mensaje);
	$cifrado = "";
	for($i = 0; $i < strlen($mensaje); $i++){
		switch($mensaje{$i}){
			case 'a': $cifrado.='d';break;
			case 'b': $cifrado.='e';break;
			case 'c': $cifrado.='f';break;
			case 'd': $cifrado.='g';break;
			case 'e': $cifrado.='h';break;
			case 'f': $cifrado.='i';break;
			case 'g': $cifrado.='j';break;
			case 'h': $cifrado.='k';break;
			case 'i': $cifrado.='l';break;
			case 'j': $cifrado.='m';break;
			case 'k': $cifrado.='n';break;
			case 'l': $cifrado.='&ntilde;';break;
			case 'm': $cifrado.='o';break;
			case 'n': $cifrado.='p';break;
			case '&ntilde;': $cifrado.='q';break;
			case 'o': $cifrado.='r';break;
			case 'p': $cifrado.='s';break;
			case 'q': $cifrado.='t';break;
			case 'r': $cifrado.='u';break;
			case 's': $cifrado.='v';break;
			case 't': $cifrado.='w';break;
			case 'u': $cifrado.='x';break;
			case 'v': $cifrado.='y';break;
			case 'w': $cifrado.='z';break;
			case 'x': $cifrado.='a';break;
			case 'y': $cifrado.='b';break;
			case 'z': $cifrado.='c';break;
			case ' ': $cifrado.=' ';break;
			}
	}
	return $cifrado; 
}

function valida_IP($IP){
	$IP_valida='/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/';	
	if (preg_match($IP_valida,$IP))
		return true;
	else
		return false;
}
function valida_RFC($RFC){
	$RFC = strtoupper($RFC);
	$RFC_valida = '/^[A-Z]{4}[0-9]{6}[A-Z0-9]{3}$/';	
	if (preg_match($RFC_valida,$RFC))
		return true;
	else
		return false;
}

function valida_CURP($CURP){
	$CURP = strtoupper($CURP);
	$CURP_valida = '/^[A-Z]{4}[0-9]{6}(H|M)[A-Z]{5}[0-9]{2}$/';
		
	if (preg_match($CURP_valida,$CURP))
		return true;
	else
		return false;
}
var_dump (valida_IP('178.0.0.225'));
echo '<br>';
var_dump (valida_IP('178.0.225'));
echo '<br>';
var_dump(valida_RFC('AERY800528QN5'));
echo '<br>';
var_dump(valida_CURP('PELJ630305HDFRPN02'));
echo '<br>';
$mensaje = 'hola como estas es un cifrado en cesar';
echo encripta_cesar($mensaje);
?>