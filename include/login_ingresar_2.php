<section class="vh-60" style="background-color:red; ">
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex align-items-center justify-content-center" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wrapper fadeInDown">
                        <div id="formContent" class="form-signin">
                            <div class="fadeIn first">
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button> -->
                                <img src="img/avatar_3.png" id="icon" alt="User Icon" />
                            </div>
                            <form id="formulario" action="datos_login.php" method="post">
                                <input type="text" id="usuario" class="fadeIn second" placeholder="correo">
                                <input type="text" id="pass" class="fadeIn third" placeholder="pass">
                                <!-- <button id="btnLogin" class="btn btn-primary" type="submit">Ingresar</button> -->
                        </div>
                    </div>
                            <!--Alertas-->
                            <div id="alerta1" class="alert alert-danger" role="alert"style="text-align:center">
                                USURIO Y PASS VACIOSeeee
                            </div>
                            <div id="alert_formato_mail" class="alert alert-danger" role="alert" style="text-align:center">
                                FORMATO DE CORREO INCORRECTO
                            </div>
                            <div id="aler_usuVacio" class="alert alert-danger" role="alert" style="text-align:center">
                               USUARIO VACIOS
                            </div>
                            <div id="aler_passVacio" class="alert alert-danger" role="alert" style="text-align:center">
                               CLAVE VACIA
                            </div>
                            <div id="alerta_Entrado" class="alert alert-primary alert-dismissible fade show" role="alert" style="text-align:center">
                                 Entrando.....
                            </div>
                            <!--Alertas-->

                </div>
                <div class="modal-footer">
                    <button id="btnLogin" class="btn btn-primary" type="submit">Ingresar</button>
                    </form>
                </div>
                <div id="forrrmFooter" style="text-align:center;"><br>
                    <a class="underlineHover" href="#">Olvidaste la Clave?</a>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
$(document).ready(function() {
    $("#alerta1").hide();
    $("#alerta_Entrado").hide();
    $("#aler_usuVacio").hide();
    $("#aler_passVacio").hide();
    $("#alert_formato_mail").hide();
    $("#formulario").submit(function(e) { // Todos los datos del formulario
        e.preventDefault(); //no recarga la pag
        user = $.trim($("#usuario").val());
        pass = $.trim($("#pass").val());
        if (user == "") {
            $("#aler_usuVacio").fadeTo(2000, 500).slideUp(500, function() {
                $("#aler_usuVacio").slideUp(500);
            });
        } else if (!correo(user)) {
            $("#alert_formato_mail").fadeTo(2000, 500).slideUp(500, function() {
                $("#alert_formato_mail").slideUp(500);
            });
        } else if (pass == "") {
            $("#aler_passVacio").fadeTo(2000, 500).slideUp(500, function() {
                $("#aler_passVacio").slideUp(500);
            });

        } else {
            $("#alerta_Entrado").fadeTo(2000, 500).slideUp(500, function() {
                $("#alerta_Entrado").slideUp(500);
            });
            // Swal.fire({
            //     title: 'bienvenido'
            //
            // });
                window.location.href = 'https://qa.seduc.cl/JardineriaWeb/usuarios/superUsuario.php';
        }
    });
});
</script>
<script>
function correo(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        .test(email);
}
</script>
