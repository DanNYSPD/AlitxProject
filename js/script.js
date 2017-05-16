function validarFormulario(){
	var verificar=true;
	var expRegNombres =/^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ]{1,}([\s][A-Za-zÁáÉéÍíÓóÚúÜüÑñ]{1,})+$/;
	var expRegPais = /^[a-záéíóúñ\s]*$/i;
	var expRegEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	var expRegpass=/^([0-9]\s*)*$/;	
	var formulario = document.getElementById("formulario");
	var nombres = document.getElementById("nombres");
	var nocontrol = document.getElementById("nocontrol");
	var carrera = document.getElementById("carrera");
	var semestre = document.getElementById("semestre");
	var grupo = document.getElementById("grupo");
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
	else if(!nocontrol.value){
	alert("Escriba su número de control por favor.");
	nocontrol.focus();
	verificar=false;
	return false;
	}
	else if(!carrera.value){
	alert("Escriba el nombre de su carrera");
	carrera.focus();
	verificar=false;
	return false;
	}
	else if(!semestre.value){
	alert("Escriba el semestre que cursa por favor.");
	semestre.focus();
	verificar=false;
	return false;
	}
	else if(!grupo.value){
	alert("Escriba el grupo de la materia.");
	grupo.focus();
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

