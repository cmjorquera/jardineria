<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <title>Ajax sencillo con mensaje de carga en jQuery</title>
</head>
<body>
  <p>
    <a href="#" id="enlaceajax">Haz clic!</a>
  </p>
  <div id="cargando" style="display:none; color: green;">Cargando...</div>
  <div id="destino"></div>

  <script>
    $(document).ready(function () {
      $("#enlaceajax").click(function (evento) {
        evento.preventDefault();
        $("#cargando").css("display", "inline");
        $("#destino").load("index.php", function () {
          $("#cargando").css("display", "none");
        });
      });
    });
  </script>
</body>
</html>