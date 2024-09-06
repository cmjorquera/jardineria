<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!--CSS DE BOOSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--ICONOS BOOSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <!---IMAGEN EN PESTAÑA-->
        <link rel="shortcut icon" href="../img/logo_3.png" type="image/x-icon">
    </head>

<body>
  <?php
    include("../include/menuLateralUsuario.php")
  ?>
    <!--MODAL-AGREGAR-->
    <div class="modal fade" id="agregarCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar-Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                    <button type="button" class="btn btn-primary">Crear Cliente</button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL-MODIFICAR-->
    <div class="modal fade" id="modificarCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar-Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                    <button type="button" class="btn btn-primary">Modificar Cliente</button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL-ELIMINAR-->
    <div class="modal fade" id="eliminarCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" style="border: red 5px solid;";>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border: red 5px solid;";>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimianr-Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                    <button type="button" class="btn btn-primary">Eliminar Cliente</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
