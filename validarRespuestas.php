
<html>


    <link type="text/css" href="./css/sty.css" rel="stylesheet" />
<div id="menu"> 
		<ul>  <br> <br> <br>
	<center><img WIDTH=1050 HEIGHT=85 src="img/f5.png">
			<li class="current_page_item"><a href="index3.html">    <font color="black" face="Kristen ITC" size="4"><b>Inicio</a></li>
			<li class="current_page_item"><a href="recursosal.html">    <font color="black"face="Kristen ITC" size="4">Referencias</a></li>
            <li class="current_page_item"><a href="contactanosal.html">    <font color="black"face="Kristen ITC" size="4">Contacto</a></li>
			<li class="current_page_item"><a href="logout.html">    <font color="black" face="Kristen ITC" size="4">Cerrar Sesi&oacute;n</a></li> </font>
			
         			
</div>
	</div>
<center> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body bgcolor="white">
<?php

 require 'conexion.php';

$respuestas = array(3,3,3,3,1,4,2,4,4,1,2,1,4,3,1,3,3,1,1,3);
$sumatoria = 0;
for($preg = 0; $preg < 20; $preg++) {
	for($res = 1; $res < 5; $res++) {
		if(isset($_REQUEST["res".$preg."_".$res])) {
			if($respuestas[$preg] == $res) {
		
				$sumatoria = $sumatoria + 10;
			}
		}
	}
}
$promedio = $sumatoria;// / 10;
 
echo "Resultado del ex&aacute;men:<br/>"; 
echo $promedio;
echo " de 100";


 //$promedio = $_POST['promedio'];
 $sql = "INSERT INTO alumno (promedio) VALUES ('$promedio')";
    mysql_query($sql,$conexion);
	

?>
<br><br>
<br><br>
<br><br>
	<?php
//Enlace para cerrar la sesion
//echo('<a href="logout.php"><font color="white" size="5" align="right"> Cerrar Sesion</a></font><br />');
?>
<br> 
				<footer>

 <a href="menualu.php" title><img align="left" src="img/volver.png" width=90 height=100 border="0"></a>
<center><a href="index3.html" title=""><img src="img/ini.png" height=100 width=90 border="0"></a>
<br>
<div id="pie"><font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</div></font>

        </div>
</footer>