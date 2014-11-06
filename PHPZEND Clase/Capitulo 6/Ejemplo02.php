<?php
$data = "Max & Ruby";
echo "<a href=\"Ejemplo01.php?name=".urlencode($data)."\"> Prueba </a>";
echo htmlentities('<script language="javascript"></script>');
?>