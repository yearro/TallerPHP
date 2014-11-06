
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet</title>
<script type="text/javascript" src="funciones.js"></script>
<style type="text/css">
<!--
#login {
	background-image: url(imagenes/fondo_login.gif);
	background-repeat: no-repeat;
	height: 400px;
	width: 360px;
	left: 50%;
	top: 50%;
	font-family: Arial, Helvetica, sans-serif;
	color: #333333;
	font-size: 12px;
	font-weight: bold;
	margin:0 auto 0 auto;
}
#Mensaje_error{color:#CC0000;}
.error{display:block;}
.error2{display:none;}
#cargando{margin:0 auto; width:100px; text-align:center;}
-->
</style>
</head>

<body>
<div id="login">
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center"><img src="imagenes/logo1.gif" width="216" height="46" /><br />
    <br />
  </p>
  <form id="formlogin">
    <label>
    <div align="center">
      <p><label>Usuario:</label><br />
        <input name="usuario" type="text" id="usuario" size="30" />
        <br />
        <br />
    <label>Contraseña:</label><br />
    <input name="contra" type="password" id="contra" size="30" />
    <br />
    <br />
    	<button id="botonEnviar" onClick="validaFormLogin()" type="button">Entrar</button>
    <br />
      </p>
      <br />
    </div>
    </label>
  </form>
  <div id="Mensaje_error" class="error2">
    <div id="mensaje" align="center">a ver sdi funciona</div>
  </div>
  </div>
  <div id="cargando" class="error2"><img src="loading.gif" /></div>
</body>
</html>
