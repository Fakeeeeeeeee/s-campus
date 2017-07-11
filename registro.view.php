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
<script src="js/ValidarRegistro.js" type="text/javascript"></script>
<script>
	function validarRegistro(){

	var verificar = true;
	var valNombre=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
	var valApellido=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
	var valEmail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
	var valClave=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/;	
	var nombre = document.getElementById("nombre");	
	var pass = document.getElementById("pass");
	var mail = document.getElementById("mail");


	if (!nombre.value){
            alert("El campo Nombre Completo es requerido.");
            nombre.focus();
            verificar = false;
	}
    else if (!valNombre.exec(nombre.value)){
            alert("Para registrar Nombre completo, solo ingrese letras y espacios.");
            nombre.focus();
            verificar = false;
    }
	 else if (!pass.value){
            alert("El campo Contraseña es requerido.");
            pass.focus();
            verificar = false;
	}
    else if (!valClave.exec(pass.value)){
            alert("El campo Contraseña debe contener letra(s) en MAY/MIN, numero(s) y una longitud de 6-15 caracteres");
            nombre.focus();
            verificar = false;
        }
	
	else if (!mail.value){
            alert("El correo electronico es requerido.");
            mail.focus();
            verificar = false;
	}
    else if (!valEmail.exec(mail.value)){
            alert("El correo electronico no es valido.");
            nombre.focus();
            verificar = false;
        }	
	
	
	if(verificar) {
		document.getElementById("registro").submit();
		}        
}

	function validar() {
		if (ver()==true) {
			document.getElementById("registro").submit();
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
 <h2>eslogan....</h2>
 </div>
 <div id="contenido">
 
 
 <div id="formulario" style="margin-left:150px; margin-right:150px">
        
        
        <form action="registro.php" method="post" id="registro" name="registro">
          
          <fieldset><legend>Complete los campos que aparecen a continuaci&oacute;n.</legend>
           <div align="center"><label for="nombre" > Nombre<br/> </label>
                  <input type="text" id="nombre" name="nombre"/>
                  </div><div align="center"></div>
                <div align="center"><label for="pass"> Contrase&ntilde;a<br /></label>
                  
                  <input type="password" id="pass" name="pass"/>
                  </div>
                
                <div align="center"><label for="mail">Correo  <br/></label>
                  <input type="text" id="mail" name="mail"/>
                  </div>
                <center><input type="button" id="Enviar" name="Enviar" value="Registrar" onclick="validarRegistro()"/></center>
              <p><a href="iniciosesion.php">¿Ya tienes cuenta?</a></p>
            </fieldset>                
  </form>
        
        
        
        
        </div> 
 
 <p>Todos los derechos reservados // <a>Smartcampus2017</a> <a href="http://www.guachipedia.com">guachipedia.com</a></p>
 
</body>
</html>
