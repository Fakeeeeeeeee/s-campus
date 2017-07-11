<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
body{ text-align: center; padding: 0;}
#cont{ width: 743px; margin: 0 auto 0 auto; text-align: left; background-color:#FFF}
#encabezado{ height: 32px; margin-bottom: 40px; width: 743px;}
#contenido{ width: 590px; float: left; margin-bottom: 70px;}
#menu{ width: 80px; float: left; text-transform: uppercase}
#pie{ clear: both; height: 296px;}


a, Arial, Geneva, sans-serif; color:#797979;}
#cont{ width: 743px; margin: 0 auto 0 auto; text-align: left;}


#encabezado{ height: 32px; margin-bottom: 40px; width: 743px;}
/*los textos del encabezado lo dejamos para mas adelante
porque tenemos que hacer reemplazo de texto por imagen*/
#main-header {
    background: #333;
    color: white;
    height: 80px;
    
    width: 100%;
    left: 0;
    top: 0;
    position: fixed;
}   
    #main-header a {
        color: white;
    }
 
#contenido h2{ font-size: 18px; color: #464545; font-weight: normal }
#contenido h2 span{ color: #a7a7a7; } /*esto nos sirve para cambiar
 el color a gris en los titulos cuando colocamos la etiqueta span!*/
#contenido p{font-size: 13px;}
 
#pie{ clear: both; height: 296px;}
#pie h2{ font-size: 18px; color: #464545; font-weight: normal }
#pie h2 span{ color: #a7a7a7; }
#pie p{ text-align: center; font-size: 13px; padding-top: 10px; clear: both;}

#menu ul li{border-left: 4px solid #e93700; margin-top: 6px; padding: 2px 0 2px 4px; list-style:none; }
#menu ul li a{ font-size: 12px; color: #464545; text-decoration: none;}
#menu ul li a:hover{ color: #e93700 }
#menu ul{ margin:0; padding-left:80px; }
#menu h3 {color: #e93700; font-size: 18px; font-weight: normal; padding-left: 80px;}
#nav.navbar {
    background-color: #CC1414;
}<!--color barra-->
#nav.navbar ul.nav li {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}<!--cambiar tipo de letra-->
</style>

<?php session_start();

// Si está seteada la session 'usuario' 
if (!isset($_SESSION['correo'])) {
//Si no, lo manda a registrarse
	header('location: iniciosesion.php');
}

?>
<p>Bienvenido <?php echo $_SESSION['correo']; ?> .</p>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smartcampus</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<div id="cont">
 <div id="encabezado">
 <header id="main-header"><h1>Smartcampus</h1><!-- / #logo-header -->

    <nav class="navbar navbar-default" id="nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!--<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Inicio</a>
    </div>-->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
        <li ><a href="bloques_libres.php">Salas</a></li>
        <li class="active"><a href="horarios.php">Horarios</a></li>
        <li><a href="solicitudes_u.php">Solicitudes</a></li>
        <!--<li><a href="Admin/Editor/index.php">Usuarios</a></li>-->
       <li><a href="docentes_u.php">Docentes</a></li> 
      </ul>
      <!--<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li>USUARIO: <?php echo $_SESSION['correo']; ?></li>
        <li><a href="../cerrar.php">Cerrar sesi&oacute;n</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cerrar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- / nav -->

</header><!-- / #main-header -->
 </div>
 <div id="contenido">
 <h4>&nbsp;</h4>
 <h4>Horarios de clases</h4>
 <p>&nbsp;</p>

 <form action="">
 <table style="border:1px #333 solid;" class="table table-striped table table-hover">
	<tr>
		<td colspan="7" style="text-align:center;">Sala:
			<select name="sala">
			
			<?php
	$conn= new MySQLi("mysql.hostinger.es","u168552087_admin","AFPzOfI80jEG","u168552087_bd");

$sql = $conn->query("SELECT sala.idsala from sala where idsala=261 or idsala=223");
 while($getr = $sql->fetch_array()) {
	$sala = $getr[0];
	
	echo '<option value="'.$sala.'" ';
	
	if($_GET['sala']==$sala) {
		echo 'selected="selected"';
	}
	
	
	echo '>'.$sala.'</option>';
 }
	?>
			
			
				
			</select>
			<input type="submit" value="Buscar" />
		</td>
	</tr>
	<tr>
		<td style="font-size:12px;font-weight:bold;">Fecha</td>
		<td style="font-size:12px;font-weight:bold;">Nº Bloque</td>
		<td style="font-size:12px;font-weight:bold;">Bloque</td>
		<td style="font-size:12px;font-weight:bold;">Profesor</td>
		<td style="font-size:12px;font-weight:bold;">Asignatura</td>
		<td style="font-size:12px;font-weight:bold;">Sección</td>
		<td style="font-size:12px;font-weight:bold;"></td>

	</tr>
	
	
	
	<?php
	$conn= new MySQLi("mysql.hostinger.es","u168552087_admin","AFPzOfI80jEG","u168552087_bd");
	if($_GET['sala']) {
$sql = $conn->query('SELECT sala_bloque.fecha,bloque.idbloque,bloque.hora_inicio,bloque.hora_fin,profesor.nombre,asignatura.nombre, seccion.idseccion,clase.idclase FROM clase,sala_bloque,bloque,profesor,asignatura,seccion where sala_bloque.idsala_bloque=clase.sala_bloque_idsala_bloque and sala_bloque.bloque_idbloque=bloque.idbloque and clase.profesor_idprofesor=profesor.idprofesor and clase.asignatura_idasignatura=asignatura.idasignatura and clase.seccion_idseccion=seccion.idseccion and sala_bloque.sala_idsala="'.$_GET['sala'].'" order by sala_bloque.fecha');
 while($getr = $sql->fetch_array()) {
	$fecha = $getr[0];
	$idbloque = $getr[1];
	$bloque_i = $getr[2];
	$bloque_f = $getr[3];
	$profesor = $getr[4];
	$asignatura = $getr[5];
	$seccion = $getr[6];
	$idclase = $getr[7];
	
	echo '
		<tr>
			<td style="font-size:12px;">'.$fecha.'</td>
			<td style="font-size:12px;text-align:center;">'.$idbloque.'</td>
			<td style="font-size:12px;">'.$bloque_i.' - '.$bloque_f.'</td>
			<td style="font-size:12px;">'.$profesor.'</td>
			<td style="font-size:12px;">'.$asignatura.'</td>
			<td style="font-size:12px;">'.$seccion.'</td>
			<td style="font-size:12px;"><a href="http://smartcampus1.esy.es/modificar_horario.php?id='.$idclase.'">Modificar</a></td>
			<td style="font-size:12px;"><a href="horario_s.php?a=e&id='.$idclase.'&s='.$_GET['s'].'">Eliminar</a></td>
		</tr>
	';
 }}
	?>
 </table>
 </form>
 
 </div>
 <!--<div id="menu">
 <h3>Men&uacute;</h3>
 <ul>
 <li><a href="Admin/Editor/index.php">usuarios</a></li>
 <li><a href="bloques_libres.php">Salas Disponibles</a></li>
 <li><a href="horarios.php">Horarios</a></li>
 <li><a href="#">Profesores</a></li>
 <li><a href="#">Solicitudes</a></li>
 <li><a href="#">Contacto</a></li>
 <li><a href="../cerrar.php">Cerrar Sesion</a></li>
 </ul>
 </div>-->
 </div>
 </div>


</body>
</html>

















