<?php 
	include("php/validarSession.php");
	if(!esAlumno()){
	//	echo "No eres maestro";
		header("Location:php/error.php"."?"."msjError=NO TIENE PERMISO DE ALUMNO");
	}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Menú Alumno</title>
    <meta charset="utf-8">
	
	
    <link type="text/css" href="./css/sty.css" rel="stylesheet" />
</head>
 

<BODY background="gray">

<div id="menu"> 
		<ul>  <br> <br> <br>
	<center>
   <img WIDTH=1050 HEIGHT=85 src="img/f5.png">
			<li class="current_page_item"><a href="index3.html">    <font color="green" face="Courier new" size="5"><b>Inicio</a></li>
			<li class="current_page_item"><a href="recursosal.html">    <font color="green" face="Courier new" size="5">Referencias</a></li>
            <li class="current_page_item"><a href="contactanosal.html">    <font color="green" face="Courier new" size="5">Contacto</a></li>
			<li class="current_page_item"><a href="logout.php">    <font color="green" face="Courier new" size="5">Cerrar Sesi&oacute;n</a></li> </font>
			
         			
</div>
	</div>
   
    <div id="envoltura"> <br>
        <div id="contenedor"> <br><br><br>
 <center> <b> <font face="Courier new"size="6" color="black">Menú Alumno</a> <b></br> </font>
 
 
            <div id="cuerpo"> 
 
                <form id="form-login" action="#" method="post" >
				

			 <br>
	
			  
          <br>
 
                   <div id="pie"><font face="Courier new" size="5" color="#FACC2E">TEMARIO </div></font></a><a href="unidad2.html" title=""> <img src="img/co.jpg" border="0"></a>  
					<br>
					<br>
					
					<div id="pie"><font face="Courier new" size="5" color="#FACC2E">ACTIVIDADES </div></font></a><a href="actividades.html" title=""> <img src="img/at.jpg" border="0"></a>   
					
					<br>
					<br>
					
					<div id="pie"><font face="Courier new" size="5" a color="#FACC2E">GLOSARIO</div></font> <a href="glosario.html" title=""><img src="img/glosario.jpg" border="0"></a>
					
					<br>
					<br>
							
					
					<div id="pie"><font face="Courier new" size="5" a color="#FACC2E">EXAMEN</div></font> <a href="1.php" title=""><img src="img/e.jpg" border="0"></a>
					
					
					<br> 
			
					<?php
//Enlace para cerrar la sesion
//echo('<a href="logout.php"><font color="blue" size="5" align="right"> Cerrar Sesion</a></font><br />');
?>
<br> <br>
					
					<footer>

<center><a href="index3.html" title=""><img src="img/ini.jpg" height=80 width=100 border="0"></a>
<br>
<div id="pie"><font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</div></font>

        </div>
</footer>
    </div>
 
</body>
 
</html>

