<?php
echo "<pre>";
var_dump($_GET);
//echo $_POST["usuario"];





extract($_GET);
echo $usuario;