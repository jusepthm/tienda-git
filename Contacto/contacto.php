<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contacto</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body background="carrito.jpg" style="background-repeat: no-repeat; background-position: center;">
    
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> juadcarmona11@misena.edu.co</p>
                <p><span class="fa fa-mobile"></span> +57(324) 587-2019</p>
            </section>
        </section>

        <form action="" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names">

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email">

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje"></textarea>

                <input type="button" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
