<!doctype html>
<html lang="en">
<head>
  <!--CSS DE BOOSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!--ICONOS BOOSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <!---IMAGEN EN PESTAÑA-->
  <link rel="shortcut icon" href="../img/logo_3.png" type="image/x-icon">
  <!--SWEET-ALERT-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--SWEET-ALERT-->
  <script src="../js/validaciones.js?id=<?php echo rand(); ?>"></script>
  <!--CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/login_ingresar.css">
  <!--JQUERY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
  <style>
  .tarjeta{
border: 5px solid red;
  }
    .foto img {
        width: 100%;
        height: 100%;
        border: 5px solid black;
        object-fit: cover;
        }
    .item{
        transition:  all 0.4s;
        cursor: pointer;
        /*border: 5px solid red;*/
        display: inline-block;
        width: calc(25% - 10px);
        height: 100px;
        background-color: #ccc;
        margin: 0 5px;
      }
    #container:hover > .item:not(:hover){
        transform: scale(0.9);
        opacity: 0.7;
        max-width: 960px;
        margin: 0 auto;
    }
</style>
<body>
  <?php
  include("include/cabezera.php");?>

    <!-- IMAGEN-PASTO -->
    <div id="imagen_pasto">
        <img href="img/logo_3.png">
        <p style="text-align: center;">
            <button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#modalLogin'>
                Inicio <br>
                <i class="bi bi-person"></i>
            </button>
            <button type='button' class='btn btn-dark' data-bs-toggle='modal'
                data-bs-target='#modal_registro'>Registrate <br>
                <i class="bi bi-ui-checks-grid"></i>
            </button>
            <a href="include/login_ingresar.php" class="btn btn-primary" tabindex="-1" role="button"
                aria-disabled="true">Login </a>

        </p>
    </div><br>
    <!-- CARRUSEL -->
    <div style="padding-left: 20px; padding-right: 20px; background-color:ffffff">
        <div id="carouselExampleInterval" class="carousel slide contenedor_carrusel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!--CONTIENE A OS 3 CARRUSELES-->
                <!-- PRIMER GRUPO DE IMAGENES -->
                <div class="carousel-item active" data-bs-interval="2500">
                    <div class="container">
                        <div class="row">
                            <div class="col columnas">
                                <img id="imagen" src="img/terraza.jpg" class="d-block w-10 circular--landscape"
                                    alt="Maseteros"><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a
                                            href="https://getbootstrap.com/docs/5.3/components/buttons/#examples">Terraza</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/maquinaria_jardienria.jpeg"
                                    class="d-block w-10 circular--landscape" alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/alerts/">Maquinaria</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/jardin.jpg" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/accordion/">Jardin
                                            -Tierra</a>
                                    </button>
                                </div>

                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/riego.jpeg" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/card/">Riego</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!--FIN COLUMNAS-->
                </div>
                <!-- SEGUNDA GRUPO DE IMAGENES -->
                <div class="carousel-item" data-bs-interval="2500">
                    <div class="container">
                        <div class="row">
                            <div class="col columnas">
                                <img id="imagen" src="img/semillas.jpeg" class="d-block w-10 circular--landscape"
                                    alt="Maseteros"><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/accordion/">Semillas
                                            -Tierra</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/maquinas.jpg" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/accordion/">Maquinaria</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/maseteros.jpg" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/accordion/">Maseteros</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/iluminacion.jpg" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a
                                            href="https://getbootstrap.com/docs/5.3/components/accordion/">Iluminacion</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!--FIN COLUMNAS-->
                </div>
                <!-- TERCER GRUPO DE IMAGENES -->
                <div class="carousel-item" data-bs-interval="2500">
                    <div class="container">
                        <div class="row">
                            <div class="col columnas">
                                <img id="imagen" src="img/semillas.jpeg" class="d-block w-10 circular--landscape"
                                    alt="Maseteros"><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/accordion/">Semillas
                                            -Tierra</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/maquinas.jpg" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/accordion/">Maquinaria</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/maquinas.webp" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="https://getbootstrap.com/docs/5.3/components/accordion/">Maseteros</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col columnas">
                                <img id="imagen" src="img/iluminacion.jpg" class="d-block w-10 circular--landscape"
                                    alt="..."><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-outline-success">
                                        <a
                                            href="https://getbootstrap.com/docs/5.3/components/accordion/">Iluminacion</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!--FIN COLUMNAS-->
                </div>
            </div> <!--FIN CAROUSELINNER-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carruselProductos"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carruselProductos"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button><br>
        </div>
    </div> <!--FIN CARRUSEL-->
    <br>
    
    <!---***********************************************************************->
    <!-- PRODUCTOS  1era FILA DE CON 3 PRODUCTOS-->
   <div id="container" style="text-align:center;">
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/maceteros.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/semillas.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/riego.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- PRODUCTOS 2era FILA DE CON 4 PRODUCTOS-->
   <div id="container" style="text-align:center;">
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/maceteros.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/semillas.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/riego.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       <div id="container" style="text-align:center;">
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/maceteros.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/semillas.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="img/riego.jpeg" alt="Descripci贸n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortacésped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducción en la mantención de grandes extensiones de
                            </p> 
                            <a href="https://www.w3schools.com/cssref/tryit.php?filename=trycss_margin-top"
                                class="btn btn-primary">
                                Me interesa
                            </a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p style="color:red;font-size:200%;"> $ 50.999 </p>
                            <del style="color:red;font-size:200%;"> $ 60.999 </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!---***********************************************************************->




    <!--MODAL LOGIN -->
   <?php include("include/login_ingresar_2.php") ?>
    <!-- MODAL DE REGISTRO USUARIO NUEVO -->
   <?php include("include/modal_registro_usuario.php") ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
