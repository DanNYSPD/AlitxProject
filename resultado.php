<HTML> 
<HEAD> 
<TITLE>Producto.php</TITLE> 
</HEAD> 
<BODY> 
<?php 
$nombre=$_POST['nombre']; 
$descripcion=$_POST['descripcion']; 
$categoria_id=$_POST['categoria_id']; 
include "conexionbd.php"; 
$guardar = mysql_query("INSERT INTO producto (nombre,descripcion,categoria_id) VALUES ('$nombre','$descripcion','$categoria_id');"); 

mysql_close(); 
?> 
<h1><div align="center">Registro Insertado</div></h1> 
<div align="center"><a href="formulario_producto.php">Ingresar otro registro</a></div> 
</BODY> 
</HTML> 