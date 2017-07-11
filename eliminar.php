<?php

	include("conexion.php");
	$id=$_REQUEST['id'];
	$query= "DELETE fotoperfil Where id='$id'";
	$resultado =$mysqli->query($query);
	if ($resultado) {
		//echo "se inserto correctamente";
		header("location: datos.php");				
	}
	else{
		echo "no se puedo eliminar";
	}

?>
