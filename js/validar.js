//Creamos dos variables que tendrán las expresiones regulares a ser comprobadas
//Una para el correo y otra para verrficar solo letras
function validarFormulario() {
	
var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
var expr1 = /^[a-zA-Z]*$/;
var expr2= /^[0-9]/;
 
$(document.form).ready(function () {
    $("#boton").click(function (){ 
        var Nombre = $("#Nombre").val();
        var ApellidoPa = $("#ApellidoPa").val();
		var ApellidoMa= $("#ApellidoMa").val();
		 var NoControl = $("#NoControl").val();
		 var Semestre = $ ("#Semestre").val();
		 var Carrera = $("#Carrera").val();
		 var Grupo = $("#Grupo").val();
		 var Correo = $("#Correo").val();
		 var Usuario = $("#Usario").val();
        var Password = $("#Password").val();
        var Repass = $("#Repass").val();
 
       
        if(Nombre == "" || !expr1.form(Nombre)){
            $("#mensaje1").fadeIn("slow"); //Muestra mensaje de error
            return false;                  // con false sale de la secuencia
        }
        else{
            $("#mensaje1").fadeOut();   //Si el anterior if cumple, se oculta el error
 
            if(ApellidoPa == "" || !expr1.test(ApellidoPa)){
                $("#mensaje2").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje2").fadeOut();
                 
				 if(ApellidoMa || !expr1.test(ApellidoMa)){
                $("#mensaje2").fadeIn("slow");
                return false;
                    }
                      else{
                $("#mensaje2").fadeOut();
				 
				 if(NoControl == "" || !expr2.test(NoControl)){
                $("#mensaje2").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje2").fadeOut();
 
 
                if(Semestre == "" || !expr2.test(Semestre)){
                    $("#mensaje2").fadeIn("slow");
                    return false;
                }
				
				 else{
                $("#mensaje2").fadeOut();
 
 
                if(Carrera == "" || !expr2.test(Carrera)){
                    $("#mensaje2").fadeIn("slow");
                    return false;
                }
				else{
                $("#mensaje2").fadeOut();
 
 
                if(Grupo == "" || !expr.test(Grupo)){
                    $("#mensaje2").fadeIn("slow");
                    return false;
                }
				else{
                $("#mensaje2").fadeOut();
 
 
                if(Grupo == "" || !expr.test(Grupo)){
                    $("#mensaje2").fadeIn("slow");
                    return false;
                }
				
				else{
                $("#mensaje2").fadeOut();
 
 
                if(Correo == "" || !expr.test(Correo)){
                    $("#mensaje2").fadeIn("slow");
                    return false;
                }
				
				 else{
                    $("#mensaje3").fadeOut();
 
                    if(Password != Repass){
                        $("#mensaje4").fadeIn("slow");
					return false;
				}
                else{
                    $("#mensaje3").fadeOut();
 
                    if(Password != Repass){
                        $("#mensaje4").fadeIn("slow");
                        return false;
                    }
                }
            }
        }
 
    });//fin click
 
    /*Las siguientes funciones son una mejora al ejemplo anterior que mostré
     * Si el mensaje se mostró, el usuario tenía que volver a oprimir el boton
     * de registrar para que el error se ocultará (si era el caso).
     *
     *Con estas funciones de keyup, el mensaje de error se muestra y
     * se ocultará automáticamente, si el usuario escribe datos admitidos.
     * Sin necesidad de oprimir de nuevo el boton de registrar.
     *
     * La función keyup lee lo último que se ha escrito y comparamos
     * con nuestras condiciones, si cumple se quita el error.
     *
     * Es cuestión de analizar un poco para entenderlas
     * Cualquier duda, comenten
     * */
    $("#Nombre, #ApellidoPa, #ApellidoMa, #Carrera").keyup(function(){
        if( $(this).val() != "" && expr1.test($(this).val())){
            $("#mensaje1, #mensaje2").fadeOut();
            return false;
        }
    });
 
 
    $("#Correo, #Grupo").keyup(function(){
        if( $(this).val() != "" && expr.test($(this).val())){
            $("#mensaje3").fadeOut();
            return false;
        }
    });
      
	   $("#NoControl,#Semestre").keyup(function(){
        if( $(this).val() != "" && expr2.test($(this).val())){
            $("#mensaje1, #mensaje2").fadeOut();
            return false;
        }
    });
 
    var valido=false;
    $("#Repass").keyup(function(e) {
        var Password = $("#Password").val();
        var re_pass=$("#Repass").val();
 
        if(Password != Repass)
        {
            $("#Repass").css({"background":"#F22" }); //El input se pone rojo
            valido=true;
        }
        else if(Password == Repass)
        {
            $("#Repass").css({"background":"#8F8"}); //El input se ponen verde
            $("#mensaje4").fadeOut();
            valido=true;
        }
    });//fin keyup repass
 


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

					 
					 
					 
				 }
				 
				 });//fin ready
					 