<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Verificación</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/estilos.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <style>
    *
    {
      color: Black;
    }
    h4
    {
      font-family: 'Arial Black';
      color: #289FB2;
    }
    h6
    {
      text-align: justify;
      font-family: 'Arial';
    }
    hr
    {
      color: Black;
      height:2px;
      background-color:  #289FB2;
      border: 1px solid color:  #289FB2;
    }
    body
    {
      background-color: #C6C6C6;
    }
  </style>
  </head>
  <body>
    <div class="idk" style="background-color: white; margin-right: 20% !important; margin-left: 20% !important; padding-right: 10% !important; padding-left: 10% !important;">
      <form method="POST" action="{{ url('verificar/verificado')}}">
        @csrf
        <!--$_get = $correo;-->
        <CENTER>
          <br>
          <img src="{{ asset ('Images/LogoCantaritos.jpg')}}" height="50%" width="50%">
          <br><br>
          <h4>¡COMENCEMOS!</h4>
          <input value="<?php echo $correo;?>" name="correo" hidden>
          <br>
          <h5>Tu cuenta Cantaritos está lista para ser usada</h5>
          <br>
          <hr><br>
          <h6>Hola usuario</h6>
          <br>
          <h6>Gracias por unirte al club Cantaritos, uno de los restaurantes mexicanos más reconocidos en la República Mexicana.</h6>
          <h6>Para comenzar con esta gran experiencia y utilizar tu cuenta de Cantaritos, da click en el botón para confirmar tu dirección de correo electrónico.</h6>
          <br>
          <h6>Para más información visita nuestra página: <a href="#">cantaritos.test</a></h6>
          <br>
          <img src="https://cdn.icon-icons.com/icons2/836/PNG/512/Facebook_icon-icons.com_66805.png" height="5%" width="5%" style="float: right !important;  padding-right: 5px;">
          <img src="https://cdn.icon-icons.com/icons2/1211/PNG/512/1491579583-yumminkysocialmedia02_83111.png" height="5%" width="5%" style="float: right !important;  padding-right: 5px;">
          <img src="https://cdn.icon-icons.com/icons2/2037/PNG/512/ig_instagram_media_social_icon_124260.png" height="5%" width="5%" style="float: right !important; padding-right: 5px;">
          <br><br>
          <button type="submit" class="btn btn-info">Activar cuenta</button>
        </CENTER>
      </form>
      <br><br>
    </div>
  </body>
</html>
