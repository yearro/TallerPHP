<?php
$var = 3;
$cadena = <<<IDF
Texto largo de varias líneas
que se imprime en la pantalla
utilizando HEREDOX

Las variables son interpretadas "$var"
 " Ejemplo de comillas dobles"
 'Ejemplo con comillas simples'
 Ejemplo de varias comillas  dobles " " " " " " " " " "
 Ejemplo de carias comillas simples ' ' ' ' ' ' ' ' ' '
IDF;
 echo $cadena;
?>