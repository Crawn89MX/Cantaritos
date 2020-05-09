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

            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
                </ul>
              </div>
            @endif

            <form method="POST" action="{{ url("inicio") }}">
              @csrf
              <input value="1" name="id" hidden>
              <input value="0" name="total" hidden>
              <input value="{}" name="ordenes" hidden>
              <input value="0" name="disponibilidad" hidden>
              <input value="menu" name="ruta" hidden>
              <!--Botón-->
              <button type="submit" class="btn btn-default btn-xs"><b>Empezar pedidos</b></button>

            </form>
        </div>
      </center>
    </body>
</html>
