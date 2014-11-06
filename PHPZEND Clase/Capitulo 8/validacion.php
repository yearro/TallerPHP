<?php
       //  Nombre funcion: valida_cadena
      //   Recibe: Cadena,Booleano (Si esta variable se 
	 //            permite en vacía),Entero (mínimo de caracteres),Entero (máximo de caracteres)
    //     Regresa: Booleano 
   //      Descripción: Verifica la longitud de la cadena (número de caracteres como máximo y como mínimo)
  // 					y si esta puede permanecer vacía, devuelve un tru si la cadena esta de acuerdo a lo 
 //						requerido y un falso si la cadena contiene algún error con respecto a su tamaño.  
function valida_cadena($valor, $permiteVacio, $minimo, $maximo){ 
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
?>