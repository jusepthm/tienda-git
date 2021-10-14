<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<title>Tienda Online</title>
</head>
<style type="text/css">
body{
	background: url(../img/carrito.jpg);
	background-attachment:fixed;
	}
</style>
<body>
<div class="tit"><h2 style="color: #0000FF; "></h2>
	<div class="Ingreso">
	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">
<center>
		<table border="0">
		<td><label style="font-size: 17pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td>
		<td><label style="font-size: 17pt"><b>Contraseña: </b></label>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td>
		<td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Iniciar Sesion"></td>
			</tr></table>
		</form>
<br>
<!-- formulario registro -->
<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 24pt; color: #6c366;"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color:#6c366"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #6c366;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #6c366;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #6c366;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
    </div>
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
</center>
  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("validar_contra.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>	
</body>
</html>