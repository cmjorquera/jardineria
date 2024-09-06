<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <style>
        .circular--landscape {
        display: inline-block;
        position: relative;
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 50%;
      }
      .boton_siguiente{
            border-radius: 100%;
            color:red;
            background-color: red;
      }
      .columnas{
        box-sizing: border-box;
        margin: 0px;
        margin-tip: 25%;
        border-style:solid;
        border: solid 0px #C00;
      }
      #imagen{
        border: solid 5px #C00;
        margin-left: 25%;
        /* padding: 20px; */

      }

  </style>
  <body>
    <?php
       Include("../include/header.php");
    ?>
<br><br>

    <div id="carruselProductos" class="carousel carousel-dark slide">
      <div class="carousel-inner"> <!--CONTIENE A OS 3 CARRUSELES-->
<!-- PRIMER GRUPO DE IMAGENES -->
        <div class="carousel-item" data-bs-interval="500">
          <div class="container">
            <div class="row">
              <div class="col columnas">
                <img id="imagen" src="../img/maceteros.jpeg" class="d-block w-10 circular--landscape" alt="Maseteros"><br>
                <h5 style="text-align:center;">Maseteros</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/maquinaria_jardienria.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Maquinaria de Jardineria</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/tierra_semillas.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Semillas -Tierra</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/riego.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Riego</h5>
              </div>
            </div>
          </div> <!--FIN COLUMNAS-->
        </div>

<!-- SEGUNDA GRUPO DE IMAGENES -->
        <div class="carousel-item" data-bs-interval="500">
          <div class="container">
            <div class="row">
              <div class="col columnas">
                <img id="imagen" src="../img/maceteros.jpeg" class="d-block w-10 circular--landscape" alt="Maseteros"><br>
                <h5 style="text-align:center;">Maseteros</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/maquinaria_jardienria.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Maquinaria de Jardineria</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/tierra_semillas.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Semillas -Tierra</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/riego.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Riego</h5>
              </div>
            </div>
          </div> <!--FIN COLUMNAS-->
        </div>

<!-- TERCER GRUPO DE IMAGENES -->

        <div  class="carousel-item active" data-bs-interval="500">
          <div class="container">
            <div class="row">
              <div class="col columnas">
                <img id="imagen" src="../img/maceteros.jpeg" class="d-block w-10 circular--landscape" alt="Maseteros"><br>
                <h5 style="text-align:center;">Maseteros</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/maquinaria_jardienria.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Maquinaria de Jardineria</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/tierra_semillas.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Semillas -Tierra</h5>
              </div>
              <div class="col columnas">
                <img id="imagen" src="../img/riego.jpeg" class="d-block w-10 circular--landscape" alt="..."><br>
                <h5 style="text-align:center;">Riego</h5>
              </div>
            </div>
          </div> <!--FIN COLUMNAS-->
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carruselProductos" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carruselProductos" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
       </button>
    </div><br><br><br><br>



    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active columnas">
      <img src="../img/riego.jpeg" class="d-block w-20 circular--landscape" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item columnas">
      <img src="../img/maceteros.jpeg" class="d-block w-20 circular--landscape" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/logo_2.png" class="d-block w-20 circular--landscape" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
