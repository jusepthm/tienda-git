<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:login/login.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!---favicon!-->
<link rel="shortcut icon" href="img/logo.png" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--titulo en favicon-->
<title>Tienda Online</title>
</head>
<style type="text/css">
body{
	background: url(img/carrito.jpg);
	background-attachment:fixed;
	}
</style>
 <body>
  <!--menu!-->
<?php include("menu/menu1.php");?>
<center>
<!--texto de bienvenida -->
<p style="border: ridge#0CC 2px;"><font size="4" color="black" face="arial"><marquee bgcolor="#fff"><strong>Te doy la más cordial bienvenida a mi pagina de comprar en la tienda online, un espacio donde intentaré presentar herramientas innovadoras de la Web 2.0 que pueden auxiliar a de diferentes niveles productos. Como pronto te darás cuenta, el proyecto se encuentra aún en fase prueba de desarrollo. Sin embargo, espero que ésta iniciativa vaya fortaleciéndose a medida que se agrege más contenidos en el mercado</strong></marquee>
</p>
<!--banner imagen y texto-->
<div class="cam-banner">
  <div class="img-top">
    <img src="img/logo.png" alt="" width="30%" />
  </div>
   <div class="cam-text">
    <div>
      <h1><b>Productos Principal</b></h1>
        <p>Importante llamar la atencion.</p><br />
          <a href="ctrjdc.php?opcion=0" class="button">
        <label class="btn-atencion">Comprar Ahora</label>
      </a>
    </div>
  </div>
</div>
<div class="text">
    <h3>Contenidos en linea</h3>
    <p>los productos ingresados en la plataforma son de ejemplos del sistema..</p>
</div>
 <img src="img/ilustracion1.svg" alt="" class="imagen-about-us">
       <div class="contenido-textos">
<!--Producto banner-->
<div class="banner-container">
    <div class="banner">
        <div class="carro">
          <img src="img/carro.png" alt="">
        </div>
<div class="content">
          <span>hasta</span>
            <h3>50% 0ff</h3>
              <p>la oferta finaliza depues de 5 dias</p>
              <a href="ctrjdc.php?opcion=0" class="button">
            <a href="ctrjdc.php?opcion=0" class="btn">ver oferta</a>
          </div>
         <div class="women">
       <img src="img/logo.png" alt="">
     </div>
   </div>
</div>
<!--Nuestros servicios--> 
     <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo"><font color="#FFFFFF" >Atencion</h2>
              <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                  <div class="contenido-textos">
                    <h3><span>1</span>Buenos Servicios</h3>
                      <p>La atención al cliente es reactiva a las necesidades de los clientes. Esto significa que la marca debe estar atenta y dispuesta a resolver los problemas del cliente en el momento que dice: «Tengo un problema».</p>                    <h3><span>2</span>Los mejores productos</h3>
                    <p>En esencia, la atención al cliente es transaccional: el cliente inicia y finaliza la interacción con el equipo de atención al cliente.</p>
<h3><span>3</span>Clientes</h3>
                    <p>La velocidad de respuesta por parte del equipo es esencial. Los clientes esperan una solución inmediata. De hecho, la pérdida de clientes se puede evitar si el problema en cuestión se resuelve en la primera interacción.</p>
                </div>
            </div>
        </section>
<!--portafolio-->         
        <section class="portafolio">
          <div class="contenedor">
              <h2 class="titulo">Diseñadores de la pagina</h2>
                <div class="galeria-port">
                   <div class="imagen-port">
                      <img src="img/juan.jpg" alt="">
                         <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                      </div>
                       <div class="imagen-port">
                         <img src="img/victor.jpg" alt="">
                           <div class="hover-galeria">
                             <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                      </div>
                    <div class="imagen-port">
                       <img src="img/img3.jpg" alt="">
                          <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                      </div>
                       <div class="imagen-port">
                          <img src="img/leiver.jpg" alt="">
                          <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                          </div>
                      </div>
                    </div>
                </div>
        </section>
<!--redes sociales -->
<div class="social">
 <ul>
  <li><a href="http://www.facebook.com/juan" target="_blank" class="icon-facebook"></a></li>
   <li><a href="http://www"  target="_blank" class="icon-twitter"></a></li>
    <li><a href="http://www" target="_blank" class="icon-instagram"></a></li>
     <li><a href="http://www" target="_blank" class="icon-google-plus"></a></li>
    <li><a href="http://www" target="_blank" class="icon-mail"></a></li>
   <li><a href="https://api.whatsapp.com/send?phone=573127189834"  target="_blank" class="icon-whatsapp"></a></li>
  <li><a href="http://www" target="_blank" class="icon-youtube"></a></li>
 </ul>
</div>
</form>
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
  </center>
<p>&nbsp;</p>
</body>  
</html>
