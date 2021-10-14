<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
</head>
<!---favicon!-->
<link rel="shortcut icon" href="img/logo.png" />
<!--menu!-->
<?php include("menu/menu1.php"); ?><br><br>
<style type="text/css">
body{
	background: url(img/carrito.jpg);
	background-attachment:fixed;
	}
</style>
<body>
<!--formulario registro -->
<center>
<form action="ctrjdc.php" method="post" id="form1">
<link rel="stylesheet" href="estilos/estilo.css">
<div class="group">
<p>
<strong><font face="arial" size=3 color="black">IDENTIFICACION</font></strong>
<input type="text" name="identificacion" id="identificacion" placeholder="Digite su identificacion" class="form-input" value="<?php echo $_REQUEST["identificacion"] ; ?>" >
</p>
<p>
<strong><font face="arial" size="3" color="black">NOMBRE</font></strong>
<input type="text" name="nombre" id="nombre"
placeholder="Escriba su nombre" class="form-input" value="<?php echo $_REQUEST["nombre"] ; ?>">
</p>
<p>
<strong><font face="arial" size="3" color="black">APELLIDO</font></strong>
<input type="text" name="apellido" id="apellido"
placeholder="Escriba su apellido" class="form-input" value="<?php echo $_REQUEST["apellido"] ; ?>">
</p>
<p>
<strong><font face="arial" size="3" color="black">SEXO</font></strong>
<select name="sexo" id="sexo" >
<option value="<?php echo $_REQUEST["sexo"] ; ?>" ><?php echo $_REQUEST["sexo"] ; ?></option>
<option>M</option>
<option>F</option>
</select>
</p>
<p>
<strong><font face="arial" size="3" color="black">CIUDAD</font></strong>
<input type="text" name="ciudad" id="ciudad"
placeholder="Escriba su ciudad" class="form-input" value="<?php echo $_REQUEST["ciudad"] ; ?>">
</p>
<p>
<strong><font face="arial" size="3" color="black">FECHA</font></strong>
<input type="date" name="fecha" id="fecha"
placeholder="fecha de pedido" class="form-input" value="<?php echo $_REQUEST["fecha"] ; ?>">
</p>
<p>
<strong><font face="arial" size="3" color="black">DIRECCION</font></strong>
<input type="text" name="direccion" id="direccion"
placeholder="Escriba su direccion" class="form-input" value="<?php echo $_REQUEST["direccion"] ; ?>">
</p>                          
<strong><font face="arial" size="3" color="black">PRODUCTO</font></strong>
<select name="producto" id="producto">
<option value="<?php echo $_REQUEST["producto"] ; ?>"><?php echo $_REQUEST["producto"] ; ?></option>
<option>Cable 2x1</option>
<option>Audifonos</option>
<option>Cargador Universal</option>
<option>Cable de cobre</option>
<option>Placa Bluetooh</option>
<option>Microfonos</option>
<option>Tornillo 1 Pulg</option>
<option>Luces RGB</option>
<option>Parlante 15 Pulg</option>
<option>Kit Panel solar</option>
<option>Estaño soldar</option>
<option>Flux</option>
<option>Cargador Universal</option>
<option>Audifonos Inalambricos</option>
<option>Cargador Universal</option>
<option>Bobina</option>
<option>Transformadores</option>
<option>Cables USB</option>
<option>Pantallas LCD</option>
<option>Testes</option>
<option>Cautin 30 whats</option>
<option>Twiter 200 whats</option>
<option>Resistencias 100k</option>
<option>Diodos</option>
</select>
</P>
<p>
<strong><font face="arial" size="3" color="black">CANTIDAD</font></strong>
<input name="cantidad" type="text" id="cantidad" placeholder="Digite cantidad" class="form-input" value="<?php echo $_REQUEST["cantidad"] ; ?>">
</p>
<p><input class="form-boton" name="opcion" type="submit" value="Guardar" />
<input class="form-boton" name="opcion" type="submit" value="Actualizar"/>
<input class="form-boton" name="opcion" type="submit" value="Consultar" />
<input class="form-boton" name="opcion" type="submit" value="Eliminar" />
</p>
</form>
</center>
<p>&nbsp;</p>
<!--pie de pagina -->
<div class="container"></div>
    <footer>
      <!-- Footer main -->
      <section class="ft-main">
        <div class="ft-main-item">
          <h2 class="ft-title">Sobre</h2>
          <ul>
            <li><a href="#">Precios</a></li>
            <li><a href="#">Costos</a></li>
            <li><a href="#">Carreras</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Recursos</h2>
          <ul>
            <li><a href="#">Documentos</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Libros</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Contactos</h2>
          <ul>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Ventas</a></li>
            <li><a href="#">Anunciar</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Mantengase Actualizado</h2>
          <p>Subscribe a nuestro boletin para recibir nuestras promociones.</p>
          <form>
            <input type="email" name="email" placeholder="Introdusca la direccion.">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </section>
<!-- Footer legal -->
      <section class="ft-legal">
        <ul class="ft-legal-list">
          <li><a href="#">Terminos &amp; Condiciones</a></li>
          <li><a href="#">Privacidad Policial</a></li>
          <li>&copy; 2021 Copyright JD.MM.VV.LE.</li>
        </ul>
      </section>
    </footer>
</body>
</html>