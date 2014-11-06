<?php
$numero = 1235674.54566;
// Estados Unidos
setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $numero)."<br>";

//Italia
setlocale(LC_MONETARY, 'it_IT');
echo money_format('%.2n', $numero)."<br>";

//japon
setlocale(LC_MONETARY, 'ja_JP');
echo money_format('%i', $numero)."<br>";

// Formato de numeros

echo number_format($numero).'<br>';

echo number_format($numero,2).'<br>';

echo number_format(123456789123.456,1,'/','*').'<br>';

// formateo de un numero entero a un binario
printf("%b",5);
echo '<br>';

// formateo de entero a ASCII
printf("%c",64);
echo '<br>';

// formateo para redondeo
printf("%d",12334.3456);
echo '<br>';

// formateo en notacion cientifica 
printf("%e",12334.3456);
echo '<br>';

// formateo numero flotante
printf("%f",12334.3456);
echo '<br>';

// formateo octal
printf("%o",12334.3456);
echo '<br>';

// formateo en hexadecimal 
printf("%x",12334.3456);
echo '<br>';

// formateo en hexadecimal Mayusculas
printf("%X",12334.3456);
echo '<br>';

// Formateo de entradas.

$datos = "123 456 789";
$formato = "%d %o %x";
var_dump(sscanf($datos,$formato));
?>

