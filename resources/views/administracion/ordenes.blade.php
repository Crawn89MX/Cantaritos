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
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="fuentes/stylesheet.css">
	<style>
		.btn-primary
		{
			font-family: 'Arial';
		}
		.navbar-light
		{
			background-image: url("img/background.jpg");
			background-size: cover;
			background-position: 0px -280px;
		}
		.navbar-item>div>a
		{
			color: white;
		}
		.navbar-brand-principal
		{
			color: white;
			margin-top: 25px;
		}
		.navbar-dark
		{
			background-color: black !important;
		}
		body
		{
			background-image: url("img/background2.png");
			background-size: cover;
		}
		.contenido
		{
			background-color: white;
		}
		.margenes
		{
			padding-left: 15.6%;
			padding-right: 15.6%;
		}
		.titulo
		{
			padding-bottom: 0px;
			font-family: 'proxima-nova' !important;
		}
		.subtitulo
		{
			font-family: 'brillotusregular' !important;
		}
		.card
		{
			box-shadow: 2px 2px 5px #999;
		}
	</style>
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
						<img src="img/logo.png" alt="" class="estilos-logo">
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

	<!--Menu-->
	<div class="margenes">
		<div class="container contenido">
			<CENTER>
			<br>
			<div class="col-md-12">
				<div class="col-md-8">
					<div class="titulo">
						<h2>ÓRDENES</h2>
						<hr>
					</div>
				</div>
			</div>
			</CENTER>

			<!--Entradas-->
			<div class="container">
				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/queso.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-8">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Queso fundido</h5>
								</div>
								<div class="col-md-4">
									<CENTER>
										<img class="card-img"  src="img/temp.png" style="width:20px !important; height:20px !important">
									</CENTER>
									<button type="button" class="btn btn-success btn-xs" style="height:25px !important; padding-top: 0px !important;">✔</button>
								</div>
							</div>
					  </div>
					</div>
					<br><br>
				</div>
				<br>

				<!--Botón
				<div class="col-md-12">
					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							<span>
								<b>Generar</b>
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>-->
			</div>
		</div>
	</div>

	 <script src="js/jquery-3.4.1.min.js"></script>
	 <script src="js/popper.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>
