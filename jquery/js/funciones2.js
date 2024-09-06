
// fadeOut  // show
// push ---<<<agrega un comentario a la lista
$(document).ready(function(){
    $("#alertaVlidacion").hide();

});
let listasComentarios=[];

function enviarComentarios(){
    // let nombre= document.getElementById('txt_nombre').value;
    // let comentario= document.getElementById('txt_comentario').value;
    // alert("Nombre: "+nombre + '\n'+ "Comentario: "  +comentario);

    let  nombre = $('#txt_nombre').val();
    let  comentario = $('#txt_nombre').val();
    if(nombre == "" || comentario == ""){
        $("#alertaVlidacion").fadeIn();
    }else{
        $('#').show();
        setTimeout(() => {
            $("")
            
        }, timeout);

        listasComentarios.push(nombre + '|' + comentario + '|'+obtenerFechaActual()  );
         mostrarComentarios();


        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Guardado',
            showConfirmButton: false,
            timer: 1500
          })
    }
}
function mostrarComentarios(){
    $('#ls_comentario').empty();
    for(let x = 0; x< listasComentarios.length; x ++){
        let comentario = listasComentarios[x].split('-');
        let nombre = comentario[0];
        let mensaje = comentario[1];

        $('#ls_comentario').append('<li class="list-group-item d-flex justify-content-between align-items-start"><div class="ms-2 me-auto"><div class="fw-bold">'+nombre+'</div>'+comentario+'</div><span class="badge bg-primary rounded-pill">'+listasComentarios[2]+'</span></li>');
    }

}

function obtenerFechaActual(){
    const FechaActual = new Date ();
    const fehcaFormatiada = FechaActual.toLocaleString();
    // return fehcaFormatiada;     

}