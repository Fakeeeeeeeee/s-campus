<?php

$link = mysqli_connect("mysql.hostinger.es", "u168552087_admin", "AFPzOfI80jEG");
mysqli_select_db($link, "u168552087_bd");
		
		$nombre= $_POST ['nombre'];
		$clave= $_POST ['pass'];
		$correo= $_POST ['mail'];		
		

//$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente

mysqli_query($link, "INSERT INTO usuario VALUES ('',1, '".$nombre."', '".$clave."','".$correo."')");

mysqli_close($link); // Cerramos la conexion con la base de datos

echo 'Los datos han sido insertados en la base de datos';

header('Location: iniciosesion.php');


require 'registro.view.php';
?>

