<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Productos</title>
</head>
<style type="text/css">
body{
	background: url(img/carrito.jpg);
	background-attachment:fixed;
	}
</style>
<link rel="shortcut icon" href="img/logo.png" />
<?php
	include("menu/menu1.php");
	?>
<body>
<link rel="stylesheet" href="estilos/bootstrap.css">
   <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos y accede a un descuento</p>
        </div>
        <div class="container" id="lista-productos"> 
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">HP PAVILION</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/hp1.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">5000</span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR PLATEADO</li>
                            <li>256 GB DISCO SSD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ACER </h4>
                    </div>
                    <div class="card-body">
                        <img src="img/acer.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">3000</span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>16 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>1 TB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">LENOVO</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/lenovo.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">4000</span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>4 GB RAM</li>
                            <li>COLOR PLATEADO</li>
                            <li>1 TB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">APPLE</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/apple.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">5900</span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR GOLD</li>
                            <li>128 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">HUAWEI</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/huawei.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">5769</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>256 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SAMSUNG</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/samsung.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">2599</span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>4 GB RAM</li>
                            <li>COLOR BLANCO</li>
                            <li>64 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">LG</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/lg.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">4299</span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR PLATEADO</li>
                            <li>256 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ADVANCE</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/advance.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">869</span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>3 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>64 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">DELL</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/dell.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">5397</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>1 TB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
</body>
</html>