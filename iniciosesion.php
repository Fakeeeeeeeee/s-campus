<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<style type="text/css">
*{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  font-family:arial;
}
body{background:url("http://www.galaxiastudio.com/wp-content/uploads/2014/03/2252.jpg")#FF9000}
h1{
  color:#AAA173;
  text-align:center;
  font-faimly:icon;
}
h3{
  color:#AAA173;
  text-align:center;
  font-faimly:icon;
}

.login-form{
  width:350px;
  padding:40px 30px;
  background:rgba(235,235,205,0.7);
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
  margin:50px auto;
}
.form-group{
  position: relative;
  margin-bottom:15px;
}
.form-control{
  width:100%;
  height:50px;
  border:none;
  padding:5px 7px 5px 15px;
  background:#fff;
  color:#666;
  border:2px solid #E0D68F;
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
}
.form-control:focus, .form-control:focus + .fa{
  border-color:#10CE88;
  color:#10CE88;
}
.form-group .fa{
  position: absolute;
  right:15px;
  top:17px;
  color:#999;
}
.log-status.wrong-entry {
  -webkit-animation: wrong-log 0.3s;
  -moz-animation: wrong-log 0.3s;
  -ms-animation: wrong-log 0.3s;
  animation: wrong-log 0.3s;
}
.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
  border-color: #ed1c24;
  color: #ed1c24;
}
@keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
@-ms-keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
@-moz-keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
@-webkit-keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
.log-btn{
  background:#0AC986;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
}

.link{
  text-decoration:none;
  color:#9D8E79;
  display:block;
  text-align:right;
  font-size:12px;
  margin-bottom:15px;
}
.link:hover{
  text-decoration:underline;
  color:#8C918F;
}
.alert{
  display:none;
  font-size:12px;
  color:#f00;
  float:left;
}

</style>

<script>
 Document$(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });
	
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
<div id="formulario" style="margin-left:150px; margin-right:150px">
        
        
        <form  action="sesion.php" method="post" id="sesion" name="sesion">
<div class="login-form">
     <h1>Smartcampus</h1>
     <h3>Login</h3>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Mail " id="mail" name="mail">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="pass" name="pass">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <!-- <a href="registro.view.php">¿No tienes cuenta?</a> -->
     <input type="button" class="log-btn" id="enviar" name="enviar" value="Ingresar" onclick="validarSesion()"/>
    
   </div>
</form></div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>


</body>
</html>