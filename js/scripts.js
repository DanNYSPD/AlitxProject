function validarFormulario(){
	var verificar=true;
	var expRegNombres =/^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ]{1,}([\s][A-Za-zÁáÉéÍíÓóÚúÜüÑñ]{1,})+$/;
	var expRegPais = /^[a-záéíóúñ\s]*$/i;
	var expRegEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	var expRegpass=/^([0-9]\s*)*$/;	
	var formulario = document.getElementById("formulario");
	var nombres = document.getElementById("nombres");
	var usuario = document.getElementById("usuario");
	var email = document.getElementById("email");
	var pass = document.getElementById("pass");
		
	if(!nombres.value){
	alert("Escriba sus nombres por favor.");
	nombres.focus();
	verificar=false;
	return false;
	}
	else if(nombres.value.split(" ").length < 2){
	alert("Esciba sus nombres completos por favor.");
	nombres.focus();
	verificar=false;
	return false;
	}
	else if(!expRegNombres.exec(nombres.value)){
	alert("Este campo admite letras de la a-zA-Z, ÁáÉéÍíÓóÚúÜüÑñ y no admite espacios en blanco al final.");
	nombres.focus();
	verificar=false;
	return false;
	}
	else if(!usuario.value){
	alert("Escriba un nombre de usuario por favor.");
	usuario.focus();
	verificar=false;
	return false;
	}
	else if(!email.value){
	alert("Escriba su correo electronico que cursa por favor.");
	email.focus();
	verificar=false;
	return false;
	}
	else if(!expRegEmail.exec(email.value)){
	alert("Escriba un email valido por favor.");
	email.focus();
	verificar=false;
	return false;
	}
	else if(!pass.value){
	alert("Escriba una contraseña por favor.");
	pass.focus();
	verificar=false;
	return false;
	}
	
	
	if(verificar==true){
	document.formulario.submit();
	}
}
function limpiarFormulario(){
	document.getElementById("formulario").reset();
}
function calcular(){
	var contadorChar= document.getElementById("contador-char").innerHTML=1000 -document.formulario.comentario.value.length;
}
window.onload=function(){
	var botonLimpiar=document.getElementById("limpiar");
	botonLimpiar.onclick=limpiarFormulario;
	var botonEnviar=document.getElementById("enviar");
	botonEnviar.onclick=validarFormulario;
}

