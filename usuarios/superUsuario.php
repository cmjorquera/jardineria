<!doctype html>
<html lang="en">
<head>
    <title>SUPER USUARIO</title>
    <?php
     include("../include/header.php");
     include("../class/conexion.php");
     ?>    <!-- incluye toda el head y sus dependencias /css/ boostrap/validaciones-->
</head>
<style>
/* modal bienvenido */
.swal2-popup {
  /* background-image: url('img/logo_seduc2.jpg'); */
  border: 5px solid black;
  border-radius: 20px;
  /* padding: 20px; */
  /* background-repeat: no-repeat;
  background-size: auto; */
  /* width: 900px; */
}
.swal2-title {
  background-color: #333;
  color: #fff;
  padding: 30px;
}

.swal2-input {
  border: 1px solid #ccc;
  /* margin-bottom: 20px; */
   border-radius: 20px;
   border-color: black;
    /* border-bottom-color: green; */
   background-color: white;
}
.swal2-input:focus {
  background-color: #CDE6E9;
}


.cuerpoMail{
  background-color:#C1E3E4;
}
#imagen_logo{
  width:100%;
  text-align:center;
  border-radius: 50%;
}
.footer{
  style="font-size:11px;
  line-height:1.2;
  color:#3d4348;
  text-align:center;
  padding-bottom:20px;
}
.footer_1{
  font-size:11px;
  line-height:1.2;
  color:#3d4348;
  text-align:center;
  padding-bottom:2px;
}
.footerr{
  width: 95%;
}
#candado{
    width:50px;
    height:80px;
}
.img_bienvenida {
    border: 2px solid red;
    border-radius: 50%;
    width:  14%;
    height: 30%;
    
}

.my-swal-image-borde:hover{
  box-shadow: 0px 0px 15px 15px #ec731e;
}









</style>

<body>
<?php
  include("../include/menuLateralUsuario.php")
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            Swal.fire({
                title: 'Bienvenido,' + '\n' + 'Cristian' + ' ' + 'jorquera',
                imageUrl: '../img/logo_3.png',
                imageWidth: 6000,
                imageHeight: 300,
                imageAlt: 'Imagen personalizada',
                confirmButtonText: 'Aceptar',
                customClass: {
                image: 'img_bienvenida'
          }
    })
    
})
        
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
