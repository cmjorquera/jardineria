<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
    <h1>hola</h1>
    <div id="container" style="text-align:center;">
        <div class="item">
            <div class="col tarjeta" style="">
                <div class="p-12 border bg-danger">
                    <div class="card text-center" style="padding:5%;">
                        <div class="card-header imagen">
                            <h4><strong> Cortadora de pasto </strong></h4>
                        </div>
                         <div class="foto">
                            <img src="../img/maceteros.jpeg" alt="Descripci籀n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortac谷sped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducci車n en la mantenci車n de grandes extensiones de
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
                            <img src="../img/maceteros.jpeg" alt="Descripci籀n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortac谷sped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducci車n en la mantenci車n de grandes extensiones de
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
                            <img src="../img/maquinas.jpg" alt="Descripci籀n de la foto">
                        </div>        
                        <div class="card-body" style="width: 100%; height:100%;">
                            <h5 class="card-title">Cortadora de pasto a gasolina 50 cm 125 cc</h5>
                             <p class="card-text">
                                 El cortac谷sped a gasolina de Bauker fue desarrollado para 
                                 facilitar la conducci車n en la mantenci車n de grandes extensiones de
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













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
