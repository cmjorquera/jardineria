<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>




</body>
<script>
Swal.fire({
    title: 'Ingrese su información',
    html: '<input id="nombre" class="swal2-input" placeholder="Nombre">' +
          '<input id="correo" class="swal2-input" placeholder="Correo electrónico">',
    focusConfirm: false,
    preConfirm: () => {
        return {
            nombre: document.getElementById('nombre').value,
            correo: document.getElementById('correo').value
        }
    }
}).then((result) => {
    if (result.value) {
        console.log('Nombre: ' + result.value.nombre)
        console.log('Correo: ' + result.value.correo)
    }
})
</script>

</html>