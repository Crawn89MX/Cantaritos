<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Formulario inventario </title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="stylesregister.css" >
    <link rel="stylesheet" type="text/css" href="Fuentes/stylesheet.css" >
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>
    <!-- Brand/logo -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
      <ul class="navbar-nav">
        <li class="nav-brand">
          <form class="form-inline my-2 my-lg-0">
            <img src="Images/logo.jpg" class="imagen" width="280px" height="50px">
          </form>
    </nav>

    <nav class="navbar navbar-default" role="navigation">
        <!-- El logotipo y el icono que despliega el menú se agrupan
             para mostrarlos mejor en los dispositivos móviles -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Logotipo</a>
        </div>
      
        <!-- Agrupar los enlaces de navegación, los formularios y cualquier
             otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Enlace #1</a></li>
            <li><a href="#">Enlace #2</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Menú #1 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Acción #1</a></li>
                <li><a href="#">Acción #2</a></li>
                <li><a href="#">Acción #3</a></li>
                <li class="divider"></li>
                <li><a href="#">Acción #4</a></li>
                <li class="divider"></li>
                <li><a href="#">Acción #5</a></li>
              </ul>
            </li>
          </ul>
      
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
      
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Enlace #3</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Menú #2 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Acción #1</a></li>
                <li><a href="#">Acción #2</a></li>
                <li><a href="#">Acción #3</a></li>
                <li class="divider"></li>
                <li><a href="#">Acción #4</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

    <!-- Form -->
    <div class="container">
      <div class="register">
        
      </div>
    </div>
  </body>
</html>

