<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>NexxToys</title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/30feac76d1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="estilos/style.css">
  <style>
    * {
      box-sizing: border-box;
    }

    .menu {
      float: left;
      width: 20%;
    }

    .menuitem {
      padding: 8px;
      margin-top: 7px;
      border-bottom: 1px solid #f1f1f1;
    }

    .main {
      float: left;
      width: 60%;
      padding: 0 20px;
      overflow: hidden;
    }

    .right {
      background-color: lightblue;
      float: left;
      width: 20%;
      padding: 10px 15px;
      margin-top: 7px;
    }

    @media only screen and (max-width:800px) {

      /* For tablets: */
      .main {
        width: 80%;
        padding: 0;
      }

      .right {
        width: 100%;
      }
    }

    @media only screen and (max-width:500px) {

      /* For mobile phones: */
      .menu,
      .main,
      .right {
        width: 100%;
      }
    }
  </style>
</head>

<body>


  <?php include('header.php') ?>


  <div>
    <div class="principal" style="width: -webkit-fill-available;">
      <div class="col-5" style="align-self: center;">
        <h1 class="f1">Descubre nuestras</h1>
      </div>
      <div class="col-4" style="align-self: center;">
        <button class="novedadesbtn" onclick="redireccionarMarcas()">novedades</button>
      </div>
    </div>
    <div class="wave single-featured-image-header" style="overflow: hidden;">
      <img src="imgs/principal.jpg" class="w3-image" style="width:100%">
    </div>
    <div style="text-align: -webkit-center;">
      <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <div>
          <h2>Nuestra compañia</h2>
          <p>
            Estamos en el negocio de los juguetes durante 32 años, con sede en Lima
            Perú. Trabajamos con más de 50 fábricas y sus propias marcas, algunas de
            las cuales han estado con nosotros desde 1990.
          </p>
          <p>
            También trabajamos con algunos de los países de América Latina (Zona
            Pacífico) con y sin elementos licenciados.
          </p>
          <button class="showbtn" onclick="redireccionarSomos()">
            Ver más
          </button>
        </div>
      </div>
      <div class="col-8">
        <hr class="featurette-divider">
      </div>
      <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2>Nuestros clientes</h2>
        <div class="grid-container">
          <div class="grid-item">
            <img src="logocadenas/plazavea.png" alt="">
          </div>
          <div class="grid-item">
            <img src="logocadenas/tottus.png" alt="">
          </div>
          <div class="grid-item">
            <img src="logocadenas/oeschele.png" alt="">
          </div>
          <div class="grid-item">
            <img src="logocadenas/ripley.png" alt="">
          </div>
          <div class="grid-item">
            <img src="logocadenas/metro.png" alt="">
          </div>
          <div class="grid-item">
            <img src="logocadenas/falabella.png" alt="">
          </div>
          <div class="grid-item">
            <img src="logocadenas/tailoy.png" alt="">
          </div>
          <div class="grid-item">
            <img src="logocadenas/wong.png" alt="">
          </div>
        </div>
        <p>
          En Nexx Toys creemos en la construcción de marcas y nos centramos en las
          estrategias de marketing que se añaden una a otra para ofrecer a nuestros
          clientes el apoyo que ellos merecen atendiéndolos de manera integral.
        </p>
      </div>
    </div>
  </div>
  <div>
    <div class="row novedad">
      <div class="col-6" style="align-self: center;">
        <img src="imgs/rbw.png" width="90%">
      </div>
      <div class="col-4" style="align-self: center;">
        <h1 class="newh1">Nuestras novedades</h1>
      </div>
    </div>
    <div class="wave">
      <img src="imgs/bannernina.png" class="w3-image wave" style="width: 100%;
      position: initial;">
    </div>
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <div class="" style="text-align-last: center;">

        <div class="grid-container-circle text-center">
          <div class="grid-item-circle">
            <img src="imgs/circulo3.jpg" alt="">
          </div>
          <div class="grid-item-circle">
            <img src="imgs/circulo2.jpg" alt="">
          </div>
          <div class="grid-item-circle">
            <img src="imgs/circulo1.jpg" alt="">
          </div>
          <div>
            <label>My little Pony</label>
          </div>
          <div>
            <label>Peppa pig</label>
          </div>
          <div>
            <label>Caterpillar</label>
          </div>
        </div>
      </div>
    </div>
    <div class="w3-container w3-content" style="max-width:800px" id="contact">
      <h2>Nuestras marcas</h2>
      <div class="wrapper">
        <div class="carousel">
          <div><img src="logomarcas/bildo.png"></div>
          <div><img src="logomarcas/centel.png"></div>
          <div><img src="logomarcas/funrise.png"></div>
          <div><img src="logomarcas/nikok.png"></div>
          <div><img src="logomarcas/bildo.png"></div>
          <div><img src="logomarcas/centel.png"></div>
          <div><img src="logomarcas/funrise.png"></div>
          <div><img src="logomarcas/nikok.png"></div>
        </div>
      </div>
    </div>

    <div class="col-4 brochuremsg">
      <h1 style="width: 68%;">Para descargar
        nuestro BROCHURE
        por favor llene sus
        datos. Gracias</h1>
    </div>
    <div class="row" style="margin-top: 5%">
      <div class="col-4" style="background-color: #7abb43;">
      </div>
      <div class="col-8" style="background-color: #6e2b8c;">
        <div class="secondbroc">
          <label for="" style="font-size: 3vw;">
            Para descargar
            nuestro BROCHURE
            por favor llene sus
            datos. Gracias
          </label>

        </div>
        <img src="imgs/nino.png" class="w3-image wave" style="width:60%;left:-32%;">
      </div>
    </div>
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <form>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label formy">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label formy">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="phone" class="col-sm-2 col-form-label formy">Teléfono</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" id="phone" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="empresa" class="col-sm-2 col-form-label formy">Empresa</label>
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

  <?php
  include('footer.php'); ?>
  </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script type="text/javascript">
    $('.carousel').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
            arrows: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        }

      ]
    });
  </script>
  <script>
    function redireccionarSomos() {
      window.location.href = "somos.php";
    }
    function redireccionarMarcas() {
      window.location.href = "marcas.php";
    }
  </script>

</body>

</html>