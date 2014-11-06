<?php
       // Nombre funcion: ReCarac
      //  Recibe: Cadena
     //   Regresa: Cadena
    //    Descripción: A la cadena que entra se le quitan los espacios en blanco al principio y al final de la cadena,
   //                 posteriormente se quitan los espaciosn en blanco innecesarios entre las cadenas de las que se 
  //                 compone la cadena original, por último sustituye toda la cadena por html y lo regresa el contenido.
 
function ReCarac($cadena){
	$cadena = trim($cadena); // Se eliminan espacios en blanco al principio y al final de la cadena.
	$cadena = preg_replace("/\s+/"," ",$cadena); // Se eliminan espacios en blanco innecesarios dentro de la cadena
	$cadena = htmlentities($cadena, ENT_QUOTES, 'UTF-8'); // Transforma todo el contenido a html
	return $cadena; // Regreso de la cadena ya modificada.
}
     // Nombre funcion: ValCor
    //  Recibe: Cadena (formato de correo electrónico)
   //   Regresa: Booleano 
  //    Descripción: Verifica si es correcta la estructura de un correo electrónico en caso de ser así 
 //                  devuelve un valor verdadero en caso contrario regresa un valor falso.
 
function ValCor($cadena){
   if (eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]", $cadena))
   		return FALSE;
	else 
		return TRUE;
}

      // Nombre funcion: ValLon
     //  Recibe: Cadena,Booleano (Si esta variable se permite en vacía),Entero (mínimo de caracteres),Entero (máximo de caracteres)
    //   Regresa: Booleano 
   //    Descripción: Verifica la longitud de la cadena (número de caracteres como máximo y como mínimo)y
  //                  si esta puede permanecer vacía, devuelve un tru si la cadena esta de acuerdo a lo requerido y un falso si
 //                   la cadena contiene algún error con respecto a su tamaño. 
 
function ValLon($valor, $permiteVacio, $minimo, $maximo){
	$cantCar=strlen($valor);
	if(empty($valor))
	{
		if($permiteVacio) return TRUE;
		else return FALSE;
	}
	else
	{
		if($cantCar>=$minimo && $cantCar<=$maximo) return TRUE;
		else return FALSE;
	}
}
// Redirecciona a donde se especifica y elimina el proceso.
function ReDir($lugar){
header('location:'.$lugar);
die();
}
// Obteniendo el tipo de extensión con la que se sube el archivo.
function extension($filename){
    return substr(strrchr($filename, '.'), 1);
}
function ValArcImg($ext){
	$ext = strtolower($ext);
	switch ($ext){
		case 'bmp': return TRUE;
					break;
		case 'jpg': return TRUE;
					break;
		case 'png': return TRUE;
					break;						
		case 'gif': return TRUE;
					break;
		default:    return FALSE; 	
					break;		
	}
}
function ValArc($ext){
	$ext = strtolower($ext);
	switch ($ext){
		case 'doc':  return TRUE;
					 break;
		case 'docx': return TRUE;
					 break;
		case 'zip':  return TRUE;
					 break;
		case 'rar':  return TRUE;
					 break;				 						
		case 'pdf':  return TRUE;
					 break;
		case 'txt':  return TRUE;
					 break;
		case 'xslx': return TRUE;
					 break;
		case 'xsl':  return TRUE;
					 break;
		case 'pptx': return TRUE;
		             break;
		case 'ppt':  return TRUE;
		             break;
		case 'ai':  return TRUE;
		             break;
		case 'bmp': return TRUE;
					break;
		case 'jpg': return TRUE;
					break;
		case 'png': return TRUE;
					break;						
		case 'gif': return TRUE;
					break;			 				 				 			 									
		default:     return FALSE; 	
					break;		
	}
}
?>