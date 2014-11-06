// JavaScript Document
function nuevoAjax()
{ 
	var xmlhttp=false; 
	try 
	{ 
		// No IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
	catch(e)
	{ 
		try
		{ 
			// IE 
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!="undefined") { xmlhttp=new XMLHttpRequest(); } 
	return xmlhttp; 
}

function validaFormLogin()
{
	document.getElementById("cargando").className = "error";
	form=document.getElementById("formlogin")
	var correo = form.usuario.value;
	var contra = form.contra.value;
	var ajax=nuevoAjax();
		ajax.open("POST", "login.php", true);
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4)
			{
				if(ajax.status==200){
					try{
						var objJson;
						objJson = eval("("+ajax.responseText+")");
						if (objJson.resp == 0){
								document.getElementById("Mensaje_error").className = "error";
								document.getElementById("mensaje").innerHTML = objJson.error;
						}
						else{
							   // alert('Redireccionar a la pagina');
							   document.location.href = "inicio.php";
						}
					}
					catch(e){
						alert(e.name + " - " + e.message);
						}
				} 
				
			}
		}
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send("usuario="+correo+"&contra="+contra);
	document.getElementById("cargando").className = "error2";		
}
function Habilita_Edicion_Mensaje_Urgente(){
	document.getElementById("HabEdiMenUrg").className = "novisible";
	document.getElementById("edita_mensaje_urgente").className = "sivisible";	
}
function Desabilita_Edicion_Mensaje_Urgente(){
	document.getElementById("HabEdiMenUrg").className = "sivisible";	
	document.getElementById("edita_mensaje_urgente").className = "novisible";	
}
function Habilita_Edicion_Editar_Frase_Mes(){
	document.getElementById("HabEdiFraSem").className = "novisible";
	document.getElementById("edita_frase_mes").className = "sivisible";	
}
function Desabilita_Edicion_Editar_Frase_Mes(){
	document.getElementById("HabEdiFraSem").className = "sivisible";	
	document.getElementById("edita_frase_mes").className = "novisible";	
}
function Editar_Frase_Semana(){
	document.getElementById("cargando_01").className = "sivisible";
	form=document.getElementById("FormActualizaFraseSemana");
	var NuevaFraseSemanal = form.TextFraseSemana.value;
	var ajax=nuevoAjax();
		ajax.open("POST", "EditaFraseSemana.php", true);
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4)
			{
				if(ajax.status==200){
					try{
						var Respue = ajax.responseText;
						document.getElementById("frase_del_mes").innerHTML = Respue;
						form.TextFraseSemana.value = "";
						document.getElementById("cargando_01").className = "novisible";
					}
					catch(e){
						alert(e.name + " - " + e.message);
						}
				} 
				
			}
		}
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send("NuevaFraseSemanal="+NuevaFraseSemanal);
		Desabilita_Edicion_Editar_Frase_Mes();
}

function Editar_Mensaje_Urgente(){
	document.getElementById("cargando_02").className = "sivisible";
	form=document.getElementById("FormActualizaMensajeUrgente");
	var NuevoMensajeUrgente = form.TextMensajeUrgente.value;
	var ajax=nuevoAjax();
		ajax.open("POST", "EditaMensajeUrgente.php", true);
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4)
			{
				if(ajax.status==200){
					try{
						var Respue = ajax.responseText;
						document.getElementById("inicio_urgente").innerHTML = Respue;
						form.TextMensajeUrgente.value = "";
						document.getElementById("cargando_02").className = "novisible";
					}
					catch(e){
						alert(e.name + " - " + e.message);
						}
				} 
				
			}
		}
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send("NuevoMensajeUrgente="+NuevoMensajeUrgente);
		Desabilita_Edicion_Mensaje_Urgente();
}
function EliminarUsuario(id_usuario) {
	var ajax=nuevoAjax();
		ajax.open("POST", "EliminaUsuario.php", true);
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4)
			{
				if(ajax.status==200){
					try{
						var Respue = ajax.responseText;
						var objJson;
						objJson = eval("("+ajax.responseText+")");
						if (objJson.resp == 1){
							 window.location="usuarios.php";
						}
						else{ alert(objJson.mensaje);}
					}
					catch(e){
						alert(e.name + " - " + e.message);
						}
				} 
				
			}
		}
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send("id="+id_usuario);
}
function ModificaUsuario(id_usuario){
	window.location="ActualizaUsuario.php?id="+id_usuario;	
	}
function DescargaArchivo(id_archivo){
	 window.location="archivos/index.php?id_archivo="+id_archivo;
	//alert(id_archivo);
//	window.open('archivos/index.php','_blank','width=100,height=100') ;
	}	
function EliminaArchivo(id_archivo){
	var ajax=nuevoAjax();
		ajax.open("POST", "EliminaArchivo.php", true);
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4)
			{
				if(ajax.status==200){
					try{
						var Respue = ajax.responseText;
						var objJson;
						objJson = eval("("+ajax.responseText+")");
						if (objJson.resp == 1){
							 window.location="descargas.php";
						}
						else{ alert(objJson.mensaje);}
					}
					catch(e){
						alert(e.name + " - " + e.message);
						}
				} 
				
			}
		}
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send("id="+id_archivo);
	
	}		

function Editar_Mensaje_Empleado_Mes(){
	document.getElementById("cargando_01").className = "sivisible";
	var NuevoMensajeEmpleadoMes = document.getElementById("TextEmpleadoMes").value;
	var ajax=nuevoAjax();
	ajax.open("POST", "EditaMensajeEmpleadoMes.php", true);
	ajax.onreadystatechange=function(){
			if (ajax.readyState==4)
			{
				if(ajax.status==200){
					try{
						var Respue = ajax.responseText;
						document.getElementById("Mensaje_Empleado_del_Mes").innerHTML = Respue;
						document.getElementById("TextEmpleadoMes").value = "";
						document.getElementById("cargando_01").className = "novisible";
						Deshabilita_Cambio_Frase_Empleado_Mes();
					}
					catch(e){
						alert(e.name + " - " + e.message);
						}
				} 
				
			}
		}
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send("NuevoMensajeUrgente="+NuevoMensajeEmpleadoMes);
		
}

function Habilita_Cambio_Frase_Empleado_Mes(){
	document.getElementById("Mensaje_Empleado_del_Mes").className = "novisible";
	document.getElementById("Mensaje_Empleado_del_Mes2").className = "sivisible";
	document.getElementById("Modifica_Mensaje_Empleado_Mes").className = "novisible";
}
function Deshabilita_Cambio_Frase_Empleado_Mes(){
	document.getElementById("Mensaje_Empleado_del_Mes").className = "sivisible";
	document.getElementById("Mensaje_Empleado_del_Mes2").className = "novisible";
	document.getElementById("Modifica_Mensaje_Empleado_Mes").className = "sivisible";
	
	}