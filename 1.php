<HTML>
<HEAD><meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.js"></script>
</HEAD>
<BODY BGCOLOR="#81BEF7">
<?php
require_once('php/ExamenService.php');
$objExamenService = new ExamenService();
$ok=false;
$objExamenEntidad = $objExamenService->obtenerExamen(1);
if($objExamenEntidad){
	if($objExamenEntidad->arrPreguntas){
		$arrPreguntas=$objExamenEntidad->arrPreguntas;
		if(count($arrPreguntas)>=10){
			$ok=true;
		}
	}
}
if(!$ok){
	die("No se pudo geenerar el examen");
}
$pregunta =$arrPreguntas;
$letras = array("A","B","C","D");
?>
<center>
<marquee width=90%>
<font color="white" size=20 face=Calibri> Ex&aacute;men.- Unidad II: Conjuntos y Relaciones
</h4></font></center></marquee>  <br><br>    
<blockquote><div align=justify>
<font color="white" size="4" face="calibri">
<FORM id="form"  NAME=cuestionario >

	<table border="1" id="tabla">
		
				<tr>
					<td> </td>
				</tr>
				
				<tr>
					<td>
							<input type="radio" name="res"/>							
					</td>
				</tr>
			
	</table>
	<br> 
	
	<center><!-- <input type="submit" value="RESULTADO"/> -->
			
	<br> <br> 
	
<center>
				<a href="index3.html" title=""><img src="img/ini.png"  WIDTH=110 HEIGHT=80 border="0"></a>
      </form><a href="menualu.php" title><img align="left" src="img/volver.png" width=130 height=100 border="0"></a></div>
 
            </div><div id="pie"><center>Plataforma Teoria de Conjuntos</div> 
        <!-- fin contenedor --></center>
			</FORM>
<button id="btnEnviar" onclick="enviarRespuesta()">qasa</button>
 
			<script type="text/javascript">
				$( document ).ready(function() {
					var idExamen=1;
    				//reaaloz perticion al servidor para llenar la tabla
    				var url="php/ExamenController.php";
					$.ajax({
				           type: "POST",
				           url: url,
				           data: {'operacion':'obtenerExamen','idExamen':idExamen},//$("#idForm").serialize(), // serializes the form's elements.

				           success: function(data)
				           {
				               //alert(data); // show response from the php script.
				               console.log(data);
				                data=jQuery.parseJSON(data);
				               if(data.codigo==200){
				               		//generarExamen(data);	
				               		console.log("generarExamen");
									var responseBody=data.responseBody;
									var idExamen=responseBody.idExamen;
									var version=responseBody.version;
									var arrPreguntas=responseBody.arrPreguntas;
									console.log(arrPreguntas);
									var tabla=$("#tabla");
									for(var i=0;i<arrPreguntas.length;i++){
										var rowPregunta=arrPreguntas[i];
										//var tr=$('<tr/>').appendTo(tabla);
										//tr.append('<td>');

										var trInput=$('<tr>').appendTo(tabla);
										trInput.append('<td>'+rowPregunta.descripcion+'</td>');
										//opciones:
										var trInputOpcion1=$('<tr>').appendTo(tabla);
										var inputRadio1='<input type="radio" name="'+rowPregunta.idPregunta+'">';
										trInputOpcion1.append('<td>'+inputRadio1+rowPregunta.opcion1+'</td>');

										var trInputOpcion2=$('<tr>').appendTo(tabla);
										trInputOpcion2.append('<td>'+inputRadio1+rowPregunta.opcion1+'</td>');
										var trInputOpcion3=$('<tr>').appendTo(tabla);
										trInputOpcion3.append('<td>'+inputRadio1+rowPregunta.opcion1+'</td>');
										//var trInputOpcion1=$('<tr>').appendTo(tabla);
										//trInputOpcion1.append('<td>'+arrPreguntas[i].opcion1+'</td>');
										//opciones:
										//$('<tr>'+arrPreguntas[i].opcion1+"</tr>").appendTo(trInput);
									}
				               }
				               
				               //console.log(data.responseBody);
				               //console.log(data.codigo);
				           }
				         });
				});
				function generarExamen(data) {
					console.log("generarExamen");
					var responseBody=data.responseBody;
					var idExamen=responseBody.idExamen;
					var version=responseBody.version;
					var arrPreguntas=responseBody.arrPreguntas;

					var tabla=$("#tabla");
					for(var i=0;i<arrPreguntas.length;i++){
						var tr=$('<tr>/').appendTo(tabla);
					}
				}
				function enviarRespuesta() {
					console.log("s");
					//alert("s");
					//var params = $("#tabla :input").serialize();
					var params0=$('table').find('input').serialize();
					var params=$('table').find('input').serializeArray();
					console.log(params0);
					console.log(params);
					//var respuestasE={'respuestas':params};
					//console.log(respuestasE);
					console.log("s");
					/*
					if(params.length<10){
						alert("no se ha contestado todo el examen");
						return;
					}
					*/
					enviarRepuestaD(params,1);


					/*var arr=$('table').find('input');
					for (var i=0; i<arr.length;i++){
						console.log(arr[i]);
					}
					*/	
					
				//	var str=$("#form").serialize();
					//console.log(str);

					//$("#form").children(".selected").css( "color", "blue" );
				}
				function enviarRepuestaD( datos,idExamen){
					var url="php/ExamenController.php";
					$.ajax({
				           type: "POST",
				           url: url,
				           data: {'respuestas':datos,'idExamen':idExamen},//$("#idForm").serialize(), // serializes the form's elements.
				           success: function(data)
				           {
				               //alert(data); // show response from the php script.
				               console.log(data);
				           }
				         });

				   // e.preventDefault(); // avoid to execute the actual submit of the form.
				}
				function myFunction() {
				    document.getElementById("demo").innerHTML = "Hello World";
				}
			</script>
</BODY>
</html>
