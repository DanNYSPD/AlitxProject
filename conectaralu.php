
<center> 
<br>
<br>
<br>
<br>
<br>
<br><body bgcolor="#ACFA58">
		<?php
			//conexión a la base de datos
			$con = mysqli_connect("localhost", "root", "", "u2cr");
			if (mysqli_connect_errno()){
				echo "No se pudo conectar a la base de datos" . mysqli_connect_error();


			}
			//obtiene valores del formulario
			$nombres = mysqli_real_escape_string($con, $_POST["nombres"]);
			$nocontrol = mysqli_real_escape_string($con, $_POST["nocontrol"]);
			$carrera = mysqli_real_escape_string($con, $_POST["carrera"]);
			$semestre = mysqli_real_escape_string($con, $_POST["semestre"]);
			$grupo = mysqli_real_escape_string($con, $_POST["grupo"]);
			$email = mysqli_real_escape_string($con, $_POST["email"]);
			$pass = mysqli_real_escape_string($con, $_POST["pass"]);
			

			//insertamos los valores del formulario en nuestra bd
			$sql = "INSERT INTO alumno (nombres,nocontrol,carrera,semestre,grupo,email,pass)
			VALUES ('$nombres', '$nocontrol','$carrera','$semestre','$grupo','$email','$pass')";

			if (!mysqli_query($con,$sql)) {
			 		die('<font color="black" size="5" align="center"> Error el n&uacute;mero de control ya existe</a></font><br />
						<br> <br><img src="img/doble.png"  WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3> <br> <br> <br> <br>
					<center> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br>
		<a href="index.html" title=""><img src="img/inic.png"  WIDTH=90 HEIGHT=60 BORDER=0 VSPACE=3 HSPACE=3></a> <br>
			<font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</font></center> <br> <br> <br>
		<a align="left" href="registroalu.html" title=""><font color="black" size="5">&#8656; VOLVER</font></a>');
			}	else

						echo ('<font color="black" size="5" align="center"> Registro Guardado Exitosamente</a></font><br />
						<br> <br><img src="img/correcto.png"  WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3
								<center> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br>
		<a href="index.html" title=""><img src="img/inic.png"  WIDTH=90 HEIGHT=60 BORDER=0 VSPACE=3 HSPACE=3></a> <br>
		<font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</font></center><br> <br> <br>
		<a align="left" href="registroalu.html" title=""><font color="black" size="5">&#8656; VOLVER</font></a>');
						
						
			
		?>
		<center> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> 
		<a href="index.html" title=""><img src="img/inic.png"  WIDTH=90 HEIGHT=60 BORDER=0 VSPACE=3 HSPACE=3></a> <br>
		<font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</font></center> 


	</body>
</html>