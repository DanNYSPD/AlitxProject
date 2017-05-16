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
			$usuario = mysqli_real_escape_string($con, $_POST["usuario"]);
			$email = mysqli_real_escape_string($con, $_POST["email"]);
			$grupo1 = mysqli_real_escape_string($con, $_POST["grupo1"]);
			$grupo2 = mysqli_real_escape_string($con, $_POST["grupo2"]);
			$grupo3 = mysqli_real_escape_string($con, $_POST["grupo3"]);
			$pass = mysqli_real_escape_string($con, $_POST["pass"]);
			

			//insertamos los valores del formulario en nuestra bd
			$sql = "INSERT INTO maestro (nombres, usuario,email,grupo1,grupo2,grupo3,pass)
			VALUES ('$nombres', '$usuario','$email'.'$grupo1','$grupo2','$grupo3','$pass')";

			if (!mysqli_query($con,$sql)) {
			 		die('<font color="black" size="5" align="center"> Error el nombre de usuario ya existe</a></font><br />
						<br> <br><img src="img/doble.png"  WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3> <br> <br> <br> <br>
								<center> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br><br> <br> 
		<a href="index.html" title=""><img src="img/inic.png"  WIDTH=90 HEIGHT=60 BORDER=0 VSPACE=3 HSPACE=3></a> <br>
		<font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</font></center><br> <br> <br>
		<a align="left" href="registrom.html" title=""><font color="black" size="5">&#8656; VOLVER</font></a>');
			}	else

						echo ('<font color="black" size="5" align="center"> Registro Guardado Exitosamente</a></font><br />
						<br> <br><img src="img/correcto.png"  WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3>
								<center> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br>
		<a href="index.html" title=""><img src="img/inic.png"  WIDTH=90 HEIGHT=60 BORDER=0 VSPACE=3 HSPACE=3></a> <br>
		<font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</font></center><br> <br> <br>
		<a align="left" href="registrom.html" title=""><font color="black" size="5">&#8656; VOLVER</font></a>');
			
		?>
		<center> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> 
		<a href="index.html" title=""><img src="img/inic.png"  WIDTH=90 HEIGHT=60 BORDER=0 VSPACE=3 HSPACE=3></a> <br>
		<font face="Century Gothic" color="gray"   size="2" >Plataforma Teoria de Conjuntos</font></center> 


	</body>
</html>