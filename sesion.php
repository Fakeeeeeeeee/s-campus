<?php session_start();

	if(isset($_SESSION['correo'])){
		header('Location: index.php');
		}
	
	$errores ='';
	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
	$correo = filter_var(strtolower($_POST['mail']), FILTER_SANITIZE_STRING);
	$clave = $_POST['pass'];
	
	try{
		$conexion =new PDO('mysql:host=mysql.hostinger.es;dbname=u168552087_bd','u168552087_admin','AFPzOfI80jEG');
		}catch(PDOException $e){
			echo "Error:". $e->getMessage();;
			}
	$stamement= $conexion->prepare('SELECT * FROM usuario WHERE mail_usuario= :mail AND pass= :pass');
	$stamement->execute(array(
	':mail' => $correo,
	':pass' =>$clave,
	));
	$resultado= $stamement->fetch();
	$tipo=$resultado['idperfil'];
	//var_dump($resultado);
	if($resultado !== false){
			$_SESSION['correo']= $correo;
		//header('Location: index2.php');
		switch ($tipo){
			case'1':
			header('Location: index.php');
			break;
			
			case'0':
			header('Location: Admin/index.php');
			break;
			}
			
			
			}
		}else{
			
			$errores .='<li>Datos Incorrectos</li>';
			}
	
	/*
else 
{ 
$admin=mysql_query("SELECT * FROM usuario WHERE tipo=0",$conexion); 
$verificar=@mysql_num_rows($admin); 
if($verificar==0) 
{ 
session_register("admin"); 
$admins=$_POST["mail_usuario"]; 
echo'Bienvenido '.$_SESSION["admin"]; echo' ADMINISTRADOR del portal.'; 
} 
else 
{ 
session_register("correo"); 
$users=$_POST["mail_usuario"]; 
echo'Bienvenido '.$_SESSION["correo"]; echo' USUARIO del portal.'; 
} 
} 
	*/
	
	
require 'iniciosesion.php';

?>


