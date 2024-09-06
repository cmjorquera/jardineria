<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/funciones.js"></script>

    <!-- Incluir SweetAlert2 mediante CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">

</head>
<style>
    body{
        margin: 50px;
    }
    .form-control{
        color:red;
        border: 4px solid #C00;

    }
</style>
<body>

</body>
<div class="px-4">
    <div class="mb-3">
        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="txt_nombre" placeholder="Fernando Sepúlveda">
    </div>
    <div class="mb-3">
        <label for="txt_comentario" class="form-label">Comentario</label>
        <textarea class="form-control" id="txt_comentario" rows="3"></textarea>
    </div>
    <div class="alert alert-warning" role="alert" id="div_validacion">
        Debe completar todos los campos
    </div>
    <button type="button" class="btn btn-primary" id="btn_enviar" onclick="enviarComentario()">
        <span class="spinner-border spinner-border-sm" id="sp_loading" role="status" aria-hidden="true"></span>
        Enviar Comentario
    </button>

    <br />
    <br />
    <br />
    <ol id="miLista" class="list-group list-group-numbered">

    </ol>
</div>

</html>