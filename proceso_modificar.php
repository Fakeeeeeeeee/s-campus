<?php

	include("conexion.php");
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$id= $_REQUEST['id'];
	$query= "UPDATE fotoperfil SET  imagen='$imagen' WHERE id='$id'";
	$resultado =$mysqli->query($query);
	if ($resultado) {
		//echo "se inserto correctamente";
		header("location: datos_u.php");				
	}
	else{
		echo "no se puedo insertar";
	}

?>



