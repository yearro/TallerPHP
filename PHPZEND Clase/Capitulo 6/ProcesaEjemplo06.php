<?php
setcookie("arreglo[0]","miembro 1");
setcookie("arreglo[1]","miembro 2");
setcookie("arreglo[2]","miembro 3");
setcookie("otraprueba","usuario",time()+86400); 
setcookie("prueba","usuario");
// setcookie("prueba","");
header('Location: Ejemplo06.php');
exit();
?>