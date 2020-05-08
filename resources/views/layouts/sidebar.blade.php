<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Menú Cantaritos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


	    <!-- Font Awesome JS -->
	    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


                <link rel="stylesheet" href="{{ asset("css/comensales.css") }}">
                <link rel="stylesheet" href="{{ asset("Fuentes/stylesheet.css") }}">
                <link rel="stylesheet" href="{{ asset("css/estilos.css") }}">
                <link rel="stylesheet" href="{{ asset("css/app.css")}}">
        

          <!-- Kit de FontAwesome -->
	  <script src="https://kit.fontawesome.com/64af8825ab.js"></script>
	  <!-- jQuery CDN - Slim version (=without AJAX) -->
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <!-- Popper.JS -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	  <!-- Bootstrap JS -->
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	  <!-- jQuery Custom Scroller CDN -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
	  <script src="{{asset("js/main.js")}}"></script>
	  <!-- Bootstrap CSS CDN -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
          <!-- Our Custom CSS -->
          <link rel="stylesheet" href="style3.css">
          <!-- Scrollbar Custom CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <style>
                body
		{
			background-image: url("{{ asset("images/background2.png") }}");
			background-size: cover;
                }
                .navbar-light
		{
			background-image: url("{{ asset("images/background.jpg") }}");
			background-size: cover;
			background-position: 0px -280px;
                }
                .navbar-dark
		{
			background-color: black !important;
                }
                a:visited, a:link, a:focus, a:hover, a:active
                {
                        list-style: none !important;
                        text-decoration: none !important;
                }
        </style>
</head>
<body>
	<div class="wrapper">
		<!-- Sidebar  -->
		<nav id="sidebar">
			<div id="dismiss">
				<i class="fas fa-arrow-left"></i>
			</div>

			<div class="sidebar-header">
                                <h3>Mi Orden </h3>
                                <h5>Restaurante "Cantaritos"</h5>
                        
			</div>

			<ul class="list-unstyled components">
				<li class="active">
                                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Resumen</a>
                                        <ul class="collapse list-unstyled" id="homeSubmenu">
                                                <li>
                                                        <label style="font-size:17px;">Quesadillas</label><br>
                                                        <img src="{{ asset("Images/quesadilla.jpg") }}" width="50px">
                                                        <label style="font-size:25px;">X</label>
                                                        <input type="text" style="width:50px;" class="form-input">
                                                        <label style="font-size:25px;">=</label>
                                                        <label style="font-size:25px;">$25</label>
                                                </li>
                                        </ul>
                                </li>
                        </ul>

                        <ul class="list-unstyled CTAs">
                                <li>
                                        <a href="" >Hacer pedido</a>
                                </li>
                        </ul>
		</nav>
	</div>


	<!-- Menu de restaurante, la carta, eventos y contacto-->
	<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center" style="padding: 0px; margin: 0px;">
		<ul class="navbar-nav">
			<li class="nav-item" style="padding-top: 20px !important;">
	<div class="espacio">
	  <a href="" class="navbar-brand-principal"><h4><b>RESTAURANTE</b></h4></a>
	</div>
		</li>
			<li class="nav-item" style="padding-top: 20px !important; padding-right: 30px !important;">
	<div class="espacio">
	  <a href="" class="navbar-brand-principal"><h4><b>LA CARTA</b></h4></a>
	</div>
		</li>
			<li class="nav-item-img" style="padding: 0px !important;">
				<img src="{{ asset("Images/logo.png")}}" alt="" class="estilos-logo">
		</li>
			<li class="nav-item" style="padding-top: 20px !important;">
	<div class="espacio">
	  <a href="" class="navbar-brand-principal"><h4><b>EVENTOS</b></h4></a>
	</div>
		</li>
			<li class="nav-item" style="padding-top: 20px !important;">
	<div class="espacio">
	  <a href="" class="navbar-brand-principal"><h4><b>CONTACTO</b></h4></a>
	</div>
		</li>
	  </ul>
	</nav>

<!-- Menu de meseros, chefs, cuentas, facturacion y gestión-->
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 0px; margin: 0px;">
		  <ul class="navbar-nav">
			<li class="nav-item">
                        <div class="espacio">
                                <a href="/ordenes" class="navbar-brand"><h4><b>Sopas</b></h4></a>
                        </div>
			</li>
			<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li>
	  		<li class="nav-item">
			  <a href="/menu" class="navbar-brand"><h4><b>Apperitivos</b></h4></a>
			</li>
			<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li>
			<li class="nav-item">
			  <a href="/cuenta" class="navbar-brand"><h4><b>Platos principales</b></h4></a>
			</li>
			<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li>
			<li class="nav-item">
			  <a href="/facturacion" class="navbar-brand"><h4><b>Platos Fuerte</b></h4></a>
			</li>
			<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li>
			<li class="nav-item">
			  <a href="/mesas" class="navbar-brand"><h4><b>Postres</b></h4></a>
	  		</li>
	  		<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
                        </li>
			<li class="nav-item" style="padding-left: 435px !important;">
                                <button type="button" id="sidebarCollapse" class="btn btn-info" style="background: black !important">
                                <i class="fas fa-align-left"></i>
                                </button>
                        </li>
			@yield('button')
		  </ul>
		</nav>
	<br>


                                @yield('content-comensales')

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <div class="overlay"></div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
                        $(document).ready(function () {
                                        $("#sidebar").mCustomScrollbar({
                                                        theme: "minimal"
                                        });

                                        $('#dismiss, .overlay').on('click', function () {
                                                        $('#sidebar').removeClass('active');
                                                        $('.overlay').removeClass('active');
                                        });

                                        $('#sidebarCollapse').on('click', function () {
                                                        $('#sidebar').addClass('active');
                                                        $('.overlay').addClass('active');
                                                        $('.collapse.in').toggleClass('in');
                                                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                                        });
                        });
        </script>

</body>
</html>


