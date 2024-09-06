$(document).ready(function () {
    $("#div_validacion").hide();
    $('#sp_loading').hide();
});

let listaComentarios = [];

function enviarComentario() {
    // JS
    // let nombre = document.getElementById("txt_nombre").value;
    // let comentario = document.getElementById("txt_comentario").value;

    // alert(nombre + " - " + comentario);

    // JQUERY
    let nombre = $('#txt_nombre').val();
    let comentario = $('#txt_comentario').val();

    if (nombre == '' || comentario == '') {
        $('#div_validacion').fadeIn();
        Swal.fire({
            title: 'Información',
            text: 'Todos los campos son obligatorios',
            icon: 'warning',
            confirmButtonText: 'OK'
        });
    } else {
        $('#div_validacion').hide("slide");
        $('#sp_loading').fadeIn();

        setTimeout(() => {
            listaComentarios.push(nombre + "-" + comentario + "-" + mostrarFechaActual());
            mostrarComentarios();
            $('#sp_loading').fadeOut();
            $('#txt_nombre').val('');
            $('#txt_comentario').val('');

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Guardado',
                showConfirmButton: false,
                timer: 1500
            });
        }, 3000);

    }
}

function mostrarComentarios() {
    $("#miLista").empty();

    for (let x = 0; x < listaComentarios.length; x++) {
        let comentario = listaComentarios[x].split('-');
        $("#miLista").append('<li class="list-group-item d-flex justify-content-between align-items-start"> <div class="ms-2 me-auto"> <div class="fw-bold">' + comentario[0] + "</div>" + comentario[1] + '</div> <span class="badge bg-primary rounded-pill">' + comentario[2] + '</span> </li>')
    }
}

function mostrarFechaActual() {
    const fechaActual = new Date();
    const anio = fechaActual.getFullYear();
    const mes = ("0" + (fechaActual.getMonth() + 1)).slice(-2);
    const dia = ("0" + fechaActual.getDate()).slice(-2);

    const hora = fechaActual.getHours().toString().length == 2 ? fechaActual.getHours() : "0" + fechaActual.getHours();
    const minutos = fechaActual.getMinutes().toString().length == 2 ? fechaActual.getMinutes() : "0" + fechaActual.getMinutes();
    const segundos = fechaActual.getSeconds().toString().length == 2 ? fechaActual.getSeconds() : "0" + fechaActual.getSeconds();
    const fechaFormateada = dia + "/" + mes + "/" + anio + "  " + hora + ":" + minutos + ":" + segundos;
    return fechaFormateada;
}