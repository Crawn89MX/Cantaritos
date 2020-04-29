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
						<h2>MENÚ</h2>
						<hr>
					</div>
				</div>
			</div>
			</CENTER>

			<!--Entradas-->
			<div class="container">
				<CENTER>
				<div class="subtitulo">
					<h3>Entradas</h3>
					<br>
				</div>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/queso.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Queso fundido</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$30</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/quesadilla.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Quesadillas</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$25</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/guacamole.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Guacamole</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$25</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/torta.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Torta ahogada</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$60</h5>
								</div>
							</div>
					  </div>
					</div>
					<br><br>
				</div>

				<!--Platillos-->
				<CENTER>
				<div class="subtitulo">
					<h3>Platillos</h3>
					<br>
				</div>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/chiles.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Chiles rellenos</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$45</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/pollo.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Pollo con mole</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$50</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/enchiladas.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Enchiladas</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/pozole.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Pozole</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
								</div>
							</div>
					  </div>
					</div>
					<br><br>
				</div>

				<!--Postres-->
				<CENTER>
				<div class="subtitulo">
					<h3>Postres</h3>
					<br>
				</div>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/jericalla.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Jericalla</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$45</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/chongos.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Chongos zamoranos</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$50</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/flan.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Flan napolitano</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/pay.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Pay de queso</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
								</div>
							</div>
					  </div>
					</div>
					<br><br>
				</div>

				<!--Bebidas-->
				<CENTER>
				<div class="subtitulo">
					<h3>Bebidas</h3>
					<br>
				</div>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/refresco.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Refresco</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$45</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/jugos.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Jugo natural</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$50</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/licuados.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Licuado</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
								</div>
							</div>
					  </div>
					</div>
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/te.jpg" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-9">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Té</h5>
								</div>
								<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
								</div>
							</div>
					  </div>
					</div>
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
