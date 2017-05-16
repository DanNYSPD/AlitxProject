<HTML>
<HEAD><meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.js"></script>
</HEAD>
<BODY BGCOLOR="#81BEF7">
<?php
$pregunta = array(
    0 => array(
		0 => "¿Qu&eacute; es un conjunto?",
		1 => array(
			0 => "Es la uni&oacute;n de todo elemento.",
			1 => "Se indican por medio de una letra mayúscula y los elementos de un conjunto por medio de letras minúsculas.",
			2 => "Es simplemente un grupo o colección de cualquier clase de objetos (números, letras, personas, libros,...).",
			3 => "Un grupo o colección de cualquier clase de objetos que no tienen ningún elemento en común."
		),
		
	),
	1 => array(
		0 => "Los objetos que conforman un conjunto se denominan:",
		1 => array(
			0 => "Cardinalidad.",
			1 => "Objetos.",
			2 => "Elementos.",
			3 => "Finito."
		)
	),
	2 => array(
		0 => "Elije el conjunto que corresponde a: {numeros enteros pares entre -5 y 11",
		1 => array(
			1 => "{-6, -4, 0, 2, 4, 6, 8, 10}.",
			2 => "-2, 0, 4, 6, 8, 10}.",
			3 => "{-4, -2, 0, 2, 4, 6, 8, 10}.",
			4 => "{-4, -2, 2, 4, 6, 8, 11}."
		)
	),
	 3=> array(
		0 => "¿Cuales son las operaciones con conjuntos?",
		1 => array(
			1 => "RUni&oacute;n , Asociaci&oacute;n , Reflexiva, Asimetrica.",
			2 => "Uni&oacute;n, Asociaci&oacute;n , Reflexiva, Intersecci&oacute;n.",
			3 => "Uni&oacute;n, Intersecci&oacute;n, Complemento , Diferencia..",
			4 => "Uni&oacute;n, Intersecci&oacute;n, Reflexiva , Diferencia.."
		)
	),
	 4=> array(
		0 => "{-15, -13,-11,...,-1}, ¿cuales son los n&uacute;meros que faltan en el conjunto?",
		1 => array(
			1 => "{-9,-7,-5,-3}.",
			2 => "{-9,-5,-3}.",
			3 => "{-14,-13,-11,-9,-7,-5}.",
			4 => "{-14,-12,-11,-9}."
		)
	),
	 5=> array(
		0 => "Si A= {x, y, z}, B={y, z} y C={z}. Elije la respuesta correcta de la siguiente operacion: A U(B U C)=:",
		1 => array(
			1 => "{z}.",
			2 => "{x,z}.",
			3 => "{y}.",
			4 => "{y,z}."
		)
	),
	 6=> array(
		0 => "¿Cual es el resultado de la interseccion n de los siguientes conjuntos: {3,4,5,6,7} &cap; {4,6,8,10}=? ",
		1 => array(
			1 => "{4,5}.",
			2 => "{4,6}.",
			3 => "{3,6}.",
			4 => "{6,7}."
		)
	),
	 7=> array(
		0 => "Si A={1,2,3,4,5,6}-B={2,3,6},¿cual es el resultado de la diferencia entre los conjuntos?:",
		1 => array(
			1 => "{2,4,6}.",
			2 => "{1,3,5}.",
			3 => "{2,3,6}.",
			4 => "{1,4,5}."
		)
	),
	 8=> array(
		0 => "¿Como se representa el producto cartesiano?",
		1 => array(
			1 => " A + B",
			2 => "A - B.",
			3 => " A / B.",
			4 => " A x B."
		)
	),
	 9=> array(
		0 => "Sean A = {1, 2} y B = {3, 4, 5} el producto cartesiano sera:",
		1 => array(
			1 => "<img src=\"img/pc.jpg\" >",
			2 => "<img src=\"img/pc2.jpg\" >",
			3 => "<img src=\"img/pc3.jpg\" >",
			4 => "<img src=\"img/pc4.jpg\" >"
		)
	),
	 10=> array(
		0 => "¿Sean los conjuntos A={2,3,4,5} y B={6,7,8}; y la relación R de A en B, tal «a es divisor de b». ¿Cual es la relacion R?",
		1 => array(
			1 => "R={(2,6);(2,8);(3,8);(4,8)}",
			2 => "R={(2,6);(2,8);(3,6);(4,8)}",
			3 => "R={(2,4);(2,8);(3,6);(4,8)}",
			4 => "R={((2,8);(3,6);(3,8);(4,8)}"
		)
	),
	 11=> array(
		0 => "Sean A={1,2,3,4}, B={r,s} y R={(1,r),(1,s),(2,s),(3,s)}, entonces ¿ Dom(R)= ?",
		1 => array(
			1 => "Dom(R)={1,2,3}.",
			2 => "om(R)={1,2,3,4}.",
			3 => "Dom(R)={1,s,3)}.",
			4 => "Dom(R)={2,4,s}."
		)
	),
	 12=> array(
		0 => "PSea A= {1,2,3,4} y B={r,s} además sea R={(1,r),(2,s),(3,r)}, ¿entonces Cod(R)= ?",
		1 => array(
			1 => "Cod(R)={1,r}.",
			2 => "Cod(R)={1,2,3}.",
			3 => "Cod(R)={2,s}.",
			4 => "Cod(R)={r,s}."
		)
	),
	 13=> array(
		0 => "Sea A = {1, 2, 3, 4} y definimos la relación, La relación vendrá dada por el conjunto
R = {(1, 1),(1, 2),(1, 3),(1, 4),(2, 2),(2, 4),(3, 3),(4, 4)}
y la matriz será, por tanto es: ",
		1 => array(
			1 => "<img src=\"img/m1.jpg\" >.",
			2 => "<img src=\"img/m2.jpg\" >.",
			3 => "<img src=\"img/m3.jpg\" >.",
			4 => "<img src=\"img/m4.jpg\" >."
		)
	),
	 14=> array(
		0 => "Sea X = { 1, 2, 3, 4 }<br>R = { (1;1), (1; 2), (1; 3), (1; 4), (2; 2),(2; 3), (2; 4), (3; 3), (3; 4), (4; 4) } <br>            
     El digr&aacute;fo correspondiente a esta relación es: ",
		1 => array(
			1 => "<img src=\"img/di.jpg\" >.",
			2 => "<img src=\"img/di2.jpg\" >.",
			3 => "<img src=\"img/di3.jpg\" >.",
			4 => "<img src=\"img/di4.jpg\" >."
		)
	),
	 15=> array(
		0 => "R= { (1;1), (1; 2), (1; 3), (1; 4), (2; 2),(2; 3), (2; 4), (3; 3), (3; 4), (4; 4) } <br>   <br>         
     La matriz de la relaci&oacute;n que corresponde es la siguiente: <br><img src=\"img/m5.jpg\"> <br>
	 Como todos los elementos de la diagonal principal son 1, se puede decir que la relaci&oacute;n es :",
		1 => array(
			1 => "Irreflexiva.",
			2 => "Simetrica.",
			3 => "Reflexiva.",
			4 => "Transitiva."
		)
	),
	 16=> array(
		0 => "Sea A = {1, 2, 3, 4} y R = {(1, 2),(1, 4),(2, 3),(2, 4),(3, 1),(4, 3)} una relaci&oacute;n
	 definidaen A. La matriz de la relaci&oacute;n que corresponde es la siguiente: <br><img src=\"img/m6.jpg\"> <br> 
	 Se puede decir que la relaci&oacute;n es: ",
		1 => array(
			1 => "Simetrica.",
			2 => "Reflexiva.",
			3 => "Asimetrica.",
			4 => "Irreflexiva."
		)
	),
	 17=> array(
		0 => "¿Con cual s&iacute;mbolo suele representarse una relacion binaria?",
		1 => array(
			1 => "&sim;",
			2 => "&sub;",
			3 => " &cap;",
			4 => " &and;"
		)
	),
	 18=> array(
		0 => "Dada la funcion : <br> <img src=\"img/fu.jpg\"> <br>¿Que clase de funcion es f?",
		1 => array(
			1 => "Biyectiva.",
			2 => "Inyectiva.",
			3 => "Sobreyectiva.",
			4 => "No es funcion."
		)
	),
	 19=> array(
		0 => "Dados los conjuntos: <br> <img src=\"img/fun.jpg\">
<br> Indica verdadero (V) o falso(F) seg&uacute; corresponda: <br> <br>
I.- {(1;1),(2;1),(3;2)} es sobreyectiva<br>
II.- {(1;2),(2;2),(1;3)} es inyectiva<br>
III.-{(1;2),(2;2),(3;1)} es sobreyectiva",
		1 => array(
			1 => "VVV.",
			2 => "VVF.",
			3 => "VFV.",
			4 => "FVF."
		)
	)
);

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
		<?php $pregAgregados = array(); ?>
	
		<?php for($preg = 0; $preg < 10; $preg++) { ?>
			<?php $randPreg = rand(0,19); ?>
			<?php if(!in_array($randPreg, $pregAgregados)) { ?>
				<?php $pregAgregados[$preg] = $randPreg; ?>
				<tr><td> <?php echo $preg+1; ?>. <?php echo $pregunta[/*$preg*/$randPreg][0]; ?></td></tr>
				
				<?php $resAgregados = array(); ?>
				
				<?php for($res = 0; $res < 4; $res++) { ?>
					<?php $randRes = rand(1,4); ?>
					<?php if(!in_array($randRes, $resAgregados)) { ?>
						<?php $resAgregados[$res] = $randRes; ?>
						<tr><td>
							<input type="radio" name="res<?php echo $randPreg;?>" value="res<?php echo $randPreg."_".$randRes;?>"/>
							<?php echo $letras[$res]; ?>. <?php echo $pregunta[/*$preg*/$randPreg][1][/*$res*/$randRes]; ?>
						</td></tr>
					<?php } else { ?>
						<?php $res = $res-1; ?>
					<?php } ?>
				<?php } ?>
			<?php } else { ?>
				<?php $preg= $preg-1; ?>
			<?php } ?>
		<?php } ?>
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
