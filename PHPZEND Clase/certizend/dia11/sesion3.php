<?php
session_start();
echo "Otra ves $nombre";
session_unset(); // Libera todo el espacio de la variable de las variables de sesion.
session_destroy(); // Destruye la session actual
?>