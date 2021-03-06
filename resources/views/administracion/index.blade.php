<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<title>Cantaritos</title>
    <link rel="stylesheet" href="{{ asset("Fuentes/stylesheet.css") }}">
    <link rel="stylesheet" href="{{ asset("css/estilos.css") }}">
    <link rel="stylesheet" href="{{ asset("css/app.css")}}">
  	<link rel="stylesheet" href="{{asset("css/estilos.css")}}">
    <style>
      body
      {
        background-image: url("{{asset("Images/background.jpg")}}");
        background-size: cover;
        background-position: 0px -125px;
      }
      .imagen
      {
        -webkit-filter: invert(100%);
        filter: invert(100%);
        padding-top: 225px;
      }
      .btn-default
      {
        background-color: white;
        color: black;
      }
    </style>
  </head>

  <body>

      <center>
        <div class="container">
            <!-- Bienvenida -->
            <img src="{{ asset("Images/bienvenida.png")}}" class="imagen" width="350px"><br>

            <!--Botón-->
            <button type="button" class="btn btn-default btn-xs"><b>Empezar pedidos</b></button>
        </div>
      </center>
    </body>
</html>
