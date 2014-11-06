<?php
session_start();
session_unset(); // Libera todo el espacio de la variable de las variables de sesion.
session_destroy(); // Destruye la session actual
header('location:index.php');
?>