<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="HAPedit 3.1">
<title>Ejercicio Final</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{padding: 30px 0 0;background:#FFF;
    font: 100.01%/1.3 Verdana,Arial,sans-serif;text-align:center}
div#box{width: 18em;padding: 20px;margin:0 auto;
    background:#E6E6E6;color:#000}
h1{font: lighter 150% "Trebuchet MS",Arial sans-serif;color: #208BE1}
h1,p{margin:0;padding:10px 20px}
</style>
<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div#box","big");
}
</script>
</head>

<body>

<div id="box">
<form method="post" action="login.php">
	<h1>Acceso a usuarios</h1>
	<div>
    	<label>Usuario</label> <img src="multi-user.ico" />
    </div>
    <div>
    	<input type="text" name="UsuNom" />
    </div>
    <div>    
    <label>Contrase&ntilde;a</label><br /><input type="password" name="Contra" />
    </div>
    <div>
    <input type="checkbox" value="1" /> <label>Recordarme</label>
    </div>
    <input type="submit" value="Enviar" />
</form>
</div>
</body>
</html>




