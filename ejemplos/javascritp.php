<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--CSS-->
    <link rel="stylesheet" href="../css/css_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent" class="form-signin">
            <div class="fadeIn first">
                <img src="../../image/avatar_hombre.png" id="icon" alt="User Icon" />
            </div>
            <form id="formulario">
                <input type="text" id="usuario" class="fadeIn second" placeholder="usuario">
                <input type="text" id="pass" class="fadeIn third" placeholder="pass">
                <button id="btnLogin" class="btn btn-primary" type="submit">Entrar</button>
                <!--Alertas-->
                <div id="alerta1" class="alert alert-danger" role="alert">
                   USURIO Y PASS VACIOS
                </div>
                <div id="aler_usuVacio" class="alert alert-danger" role="alert">
                <i class="bi bi-emoji-neutral-fill"> USUARIO VACIOS</i> 
                </div>
                <div id="aler_passVacio" class="alert alert-danger" role="alert">
                <i class="bi bi-emoji-neutral-fill">CLAVE VACIA</i> 
                </div>
                <div id="alerta_Entrado" class="alert alert-primary alert-dismissible fade show" role="alert">
                <i class="bi bi-emoji-smile-fill"> Entrando.....</i>  
                </div>
                <div id="formFooter">
                    <a class="underlineHover" href="#">Olvidaste la Clave?</a>
                </div>
            </form>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $("#alerta1").hide();
        $("#alerta_Entrado").hide();
        $("#aler_usuVacio").hide();
        $("#aler_passVacio").hide();

        $("#formulario").submit(function(e) { // Todos los datos del formulario
            e.preventDefault(); //no recarga la pag
            user = $.trim($("#usuario").val());
            pass = $.trim($("#pass").val());
            if (user == "") {
                $("#aler_usuVacio").fadeTo(2000, 500).slideUp(500, function() {
                    $("#aler_usuVacio").slideUp(500);
                });
            }if (pass == "") {
                $("#aler_passVacio").fadeTo(2000, 500).slideUp(500, function() {
                    $("#aler_passVacio").slideUp(500);
                });
          
            }else{
                $("#alerta_Entrado").fadeTo(2000, 500).slideUp(500, function() {
                    $("#alerta_Entrado").slideUp(500);
                });
            }
        });
    });
    </script>





</body>

</html>