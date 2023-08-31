<!DOCTYPE html>
<html>

<head>
    <title>NexxToys-Somos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos/general.css">

</head>

<body>


    <?php include('header.php') ?>

    <div>
        <div class="ontop">
            <div class="col-5" style="align-self: center;">
                <h1 class="f1-ontop" style="background-color: #70247f;">Quienes somos</h1>
            </div>
        </div>
        <div class="vertical single-featured-image-header" style="overflow: hidden;">
            <div class="box four"><img src="imgs/ninos-jugando-sobre-cesped.jpg" class="" style="width:100%"></div>

        </div>
    </div>

    <div>
        <div style="text-align: -webkit-center;">
            <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
                <div class="row">
                    <div class="col-6" style="background-color: #70247f; padding: 4%;">
                        <div class="title-somos">
                            <h1 class="subtitle-somos">Nuestra compañia:</h1>
                        </div>
                        <div class="p-somos">
                            <p>Estamos en el negocio de los juguetes
                                durante 32 años, con sede en Lima Perú.
                                Trabajamos con más de 50 fábricas y sus
                                propias marcas, algunas de las cuales
                                han estado con nosotros desde 1990.
                            </p>
                            <p>También trabajamos con algunos de los
                                países de América Latina (Zona Pacífico)
                                con y sin elementos licenciados.</p>
                        </div>
                    </div>
                    <div class="col-6" style="background-color: #80b72b; padding: 4%;">
                        <div class="title2-somos">
                            <h1 class="subtitle-somos">Ventas y marketing de juguetes:</h1>
                        </div>
                        <div class="p-somos">
                            <p>Con base en Perú y asistiendo en los
                                países de América Latina : Colombia,
                                Ecuador, Perú y Chile (excepcionalmente
                                Panamá, Brasil y Argentina).
                            </p>
                            <p>Perú está en una ubicación perfecta
                                (centro de América Latina) que nos da la
                                ventaja de visitar a nuestros clientes.
                                Además el puerto del Callao
                                es considerado el centro de la región.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div>
        <div style="text-align: -webkit-center;">
            <div class="w3-container w3-content w3-center w3-padding-32" style="max-width:800px" id="band">
                <h1 class="h1-sub">¿Quieres descargar nuestro</h1>
                <h1 class="h1-sub2">brochure?</h1>
                <p class="mini-title">Por favor llene sus datos en el siguiente formulario</p>
            </div>

        </div>
    </div>

    <div>
        <div class="row" style="text-align: -webkit-center;">
            <div class="col-5">
                <img src="imgs/nina2.png" alt="" style="width: 70%;height: 103%;">
            </div>
            <div class="col-6" style="align-self: center">
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label formy">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label formy">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label formy">Teléfono:</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="phone" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="empresa" class="col-sm-2 col-form-label formy">Empresa:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="empresa" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="empresa" class="col-sm-2 col-form-label formy"></label>
                        <div class="col-sm-6" style="text-align: -webkit-left;">
                            <button type="submit" class="showbtn">
                                Enviar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>

</html>