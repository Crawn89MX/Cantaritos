<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cantaritos</title>
	<link rel="stylesheet" href="{{ asset("css/estilos.css") }}">
	<link rel="stylesheet" href="{{ asset("css/app.css")}}">

</head>
<body>
	
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
		  <a href="" class="navbar-brand"><h4><b>Meseros</b></h4></a>
		</div>
			</li>
			<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li>
	  <li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>Chefs</b></h4></a>
			</li>
			<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li>
				<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>Cuentas</b></h4></a>
			</li>
				<li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li><li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>Facturación</b></h4></a>
			</li><li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			</li><li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>Gestión</b></h4></a>
	  </li><li class="nav-item">
			  <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
		  </ul>
		</nav>
	<br>

  @yield('content')

	 <script src="js/jquery-3.4.1.min.js"></script>
	 <script src="js/popper.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>