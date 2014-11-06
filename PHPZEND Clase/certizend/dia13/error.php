<?php
function pinta_error($cad){
echo <<<DHD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Error en la aplicaci&oacute;n</title>
</head>
<body style="text-align:center;">
<div style="width:400px; margin:0 auto 0 auto; border:#FF0000 solid 1px;">
<span style="color:#FF0000;">$cad</span>
</div>
</body>
</html>
DHD;
}
