<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
body{ text-align: center;}
#cont{ width: 693px; margin: 0 auto 0 auto; text-align: left; }
#encabezado{ height: 32px; margin-bottom: 40px; width: 693px;}
#contenido{ width: 500px; float: center; margin-bottom: 70px;}
#menu{ width: 180px; float: left; text-transform: uppercase}
#pie{ clear: both; height: 296px;}
#formulario{ background-color:#FFF}


a, Arial, Geneva, sans-serif; color:#797979;}
#cont{ width: 693px; margin: 0 auto 0 auto; text-align: left;}
#encabezado{ height: 32px; margin-bottom: 40px; width: 693px;}
/*los textos del encabezado lo dejamos para mas adelante
porque tenemos que hacer reemplazo de texto por imagen*/
#contenido{ width: 500px; float: left; margin-bottom: 70px;}
 
#contenido h2{ font-size: 18px; color: #464545; font-weight: normal;}
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

</style>
<script src="js/ValidarSesion.js" type="text/javascript"></script>
<script>
function validarSesion(){

	var verificar = true;
	var expRegNombre=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
	var expRegEmail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
	var expRegPass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/;
	var sesion = document.getElementById("sesion");
	var mail = document.getElementById("mail");
	var pass = document.getElementById("pass");


	if (!mail.value){
		alert("El campo Email es requerido.");
		mail.focus();
		verificar = false;
	}
		else if (!expRegEmail.exec(mail.value)){
			alert("El campo Email no es valido.");
			nombre.focus();
			verificar = false;
		}
	else if (!pass.value){
		alert("El campo Contraseña es requerido.");
		pass.focus();
		verificar = false;
	}
		else if (!expRegPass.exec(pass.value)){
			alert("El campo Contraseña debe contener letra(s) en MAY/MIN, numero(s) y una longitud de 6-15 caracteres");
			nombre.focus();
			verificar = false;
		}
	if(verificar == true){
		document.getElementById("sesion").submit();
	}
}

function validar() {
		if (ver()==true) {
			document.getElementById("sesion").submit();
			}
}


</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smartcampus</title>
</head>

<body>
<div id="cont">
 <div id="encabezado">
 <h1>Smartcampus</h1>
 <h2>hhhhhhhh</h2>
 </div>
 <div id="contenido">
 <h2>BIENVENIDO</h2>
 
 <div id="formulario" style="margin-left:150px; margin-right:150px">
        
        <form  action="sesion.php" method="post" id="sesion" name="sesion">
          <fieldset>
            <legend>Complete los campos que aparecen a continuaci&oacute;n.</legend>
            
              
              
                <div align="center"><label for="mail">
                  Correo  
                  </label> </div>
                  <div align="center">
                    <input type="text" id="mail" name="mail"/>
                  </div>
                
              
             
                <div align="center"><label for="pass">
                  Contrase&ntilde;a<br />
                  
                  </label></div>
                  <div align="center">
                    <input type="password" id="pass" name="pass"/>
                  </div>
                  <center><input type="button" id="enviar" name="enviar" value="Ingresar" onclick="validarSesion()"/></center>
                
            <p><a href="registro.view.php">¿No tienes cuenta?</a></p>
            
            
  </fieldset></form></div>
 
 <p>Todos los derechos reservados // <a>Smartcampus2017</a> <a href="http://www.guachipedia.com">guachipedia.com</a></p>
 
</body>
</html>
