<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
body{ text-align: center; padding: 0;}
#cont{ width: 693px; margin: 0 auto 0 auto; text-align: left; background-color:#FFF}
#encabezado{ height: 32px; margin-bottom: 40px; width: 693px;}
#contenido{ width: 500px; float: left; margin-bottom: 70px;}
#menu{ width: 180px; float: left; text-transform: uppercase}
#pie{ clear: both; height: 296px;}


a, Arial, Geneva, sans-serif; color:#797979;}
#cont{ width: 693px; margin: 0 auto 0 auto; text-align: left;}


#encabezado{ height: 32px; margin-bottom: 40px; width: 693px;}
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

#contenido{ width: 500px; float: left; margin-bottom: 70px;}
 
#contenido h2{ font-size: 18px; color: #464545; font-weight: normal }
#contenido h2 span{ color: #a7a7a7; } /*esto nos sirve para cambiar
 el color a gris en los titulos cuando colocamos la etiqueta span!*/
#contenido p{font-size: 13px;}
 
#menu{ width: 180px; float: left; text-transform: uppercase}
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
//if (!isset($_SESSION['correo'])) {
	//Si no, lo manda a registrarse
	//header('location: iniciosesion.php');
//}

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
        <li class="active"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="../bloques_libres.php">Salas</a></li>
        <li><a href="../horarios.php">Horarios</a></li>
        <li><a href="#">Solicitudes</a></li>
        <li><a href="Editor/index.php">Usuarios</a></li>
       <li><a href="#">Docentes</a></li> 
      </ul>
      <!--<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li>ADMINISTRADOR: <?php echo $_SESSION['correo']; ?></li>
        <li><a href="../cerrar.php">Cerrar sesion</a></li>
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
 <h2>BIENVENIDO ADMINISTRADOR</h2>
 <h4>Administrar Usuarios</h4>

 
 
 </div>
 <!--<div id="menu">
 <h3>Men&uacute;</h3>
 <ul>
 <li><a href="Editor/index.php">usuarios</a></li>
 <li><a href="../index.php">Salas</a></li>
 <li><a href="#">Horarios</a></li>
 <li><a href="#">Profesores</a></li>
 <li><a href="#">Solicitudes</a></li>
 <li><a href="#">Contacto</a></li>
 <li><a href="../cerrar.php">Cerrar Sesion</a></li>
 </ul>
 </div>-->
 <div id="pie">
 <p>Todos los derechos reservados // <a>Smartcampus2017</a></p>
 
 </div></div>
 </div>


</body>
</html>

















