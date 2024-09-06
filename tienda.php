<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jardineria Index </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">
        <!-- CSS PERSONAL -->
        <link rel="stylesheet" href="css/styles.css">
        <!---IMAGEN EN LA URL-->
        <link rel="shortcut icon" href="img/logo_3.png" type="image/x-icon">
        <!--ICONOS BOOSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    </head>
  <body>
    <!-- MENU  PRINCIPAL-->
    <?php
    include("include/cabezera.php");

    ?>


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
        </p>
    </div>


    <!--MODAL LOGIN -->
    <section class="vh-60" style="background-color:red; ">
        <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="background-color:red; ">
                <div class="modal-content">
                    <div class="container py-4">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-11 mb-5 mb-lg-0">
                                <div class="card cascading-right">
                                    <div class="card-body p-5 shadow-5 text-center">
                                        <h3 class="mb-5">Iniciar Session</h3>
                                        <i class="bi bi-person-circle" style="font-size: 5em;"></i>
                                        <form action="login.php" class="">
                                            <div class="form-outline mb-4">
                                                <input type="email" id="typeEmailX-2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="typeEmailX-2">Email</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="typePasswordX-2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="typePasswordX-2">Password</label>
                                            </div>

                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-start mb-4">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="form1Example3" />
                                                <label class="form-check-label" for="form1Example3"> Recordar Contraseña
                                                </label>
                                            </div>

                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar
                                                <i class="bi bi-box-arrow-in-right"></i>

                                            </button>

                                            <hr class="my-4">
                                            <hr class="my-4">

                                            <button class="btn btn-lg btn-block btn-primary"
                                                style="background-color: #dd4b39;" type="submit"><i
                                                    class="fab fa-google me-2"></i> Iniciar Session con
                                                google</button><br><br>

                                            <button class="btn btn-lg btn-block btn-primary"
                                                style="background-color: blue;" type="submit"><i
                                                    class="fab fa-google me-2"></i> Iniciar Session con
                                                Facebook</button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>

    <!-- MODAL DE REGISTRO USUARIO NUEVO -->
    <section class="text-center text-lg-start">
        <!-- Jumbotron -->
        <div class="modal fade" id="modal_registro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="container py-4">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <div class="card cascading-right"
                                    style="background: hsla(0, 0%, 100%, 0.55);  backdrop-filter: blur(30px);">
                                    <div class="card-body p-5 shadow-5 text-center">
                                        <h2 class="fw-bold mb-5">Registrate</h2>

                                        <form>
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="txt_nombre" class="form-control" />
                                                        <label class="form-label" for="txt_nombre">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="txt_apellidos" class="form-control" />
                                                        <label class="form-label" for="txt_apellidos">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 2 column grid layout with text inputs for  Email input and Telefono -->

                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="txt_correo" class="form-control" />
                                                        <label class="form-label" for="txt_correo">Correo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="txt_fono" class="form-control" />
                                                        <label class="form-label" for="txt_fono">Telefono</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" id="txt_pass" class="form-control" />
                                                <label class="form-label" for="txt_pass">Pass</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="txt_pass_conformacion"
                                                    class="form-control" />
                                                <label class="form-label" for="txt_pass_conformacion">Confirmar
                                                    Pass</label>
                                            </div>

                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="form2Example33" checked />
                                                <label class="form-check-label" for="form2Example33">
                                                    Subcribete para noticias y <strong>ofertas</strong>
                                                </label>
                                            </div>

                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                                Ser parte de la comunidad
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <img src="img/logo_3.png" class="w-100 rounded-3 shadow-4" alt="Logo" />
                            </div>
                        </div>
                    </div>
                    <!-- Jumbotron -->
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
