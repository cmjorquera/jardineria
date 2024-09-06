<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--SWEET-ALERT-->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <title>Document</title>
</head>

<body>
    <div class="d-grid gap-2 col-6 mx-auto">
        <span class="input-group-text" id="inputGroup-sizing-sm">NOMBRE</span>
        <input type="text" class="form-control" id="nombre"><br>
        <span class="input-group-text" id="inputGroup-sizing-sm">apellido</span>
        <input type="text" class="form-control" id="apellido">
        <button class="btn btn-primary" type="button" id="myButton">Enviar petición AJAX</button>
    </div>

    <script>
    $(document).ready(function() {
        $('#myButton').click(function() {
            $.ajax({
                url: 'consulta.php',
                type: 'post',
                dataType: 'json',
                data: {
                    nombre: 'nombre',
                    apellido: 'apellido'
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: 'Éxito',
                            text: response.message,
                            icon: 'success'
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response.message,
                            icon: 'error'
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: 'Error',
                        text: 'Ha ocurrido un error al procesar la petición',
                        icon: 'error'
                    });
                }
            });
        });
    });
    </script>


</body>
</html>