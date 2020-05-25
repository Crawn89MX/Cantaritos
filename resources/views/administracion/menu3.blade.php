@extends('layouts.app')

@section('button')
	<li class="nav-item" style="padding-left: 570px !important; border: white !important">
		<button type="button" id="sidebarCollapse" class="btn btn-info" style="background: black !important">
			<i class="fas fa-align-left"></i>
		</button>
  	</li>
@endsection


@section('content')
	

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/estilos.css">
  	<link rel="stylesheet" href="fuentes/stylesheet.css">

    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
		body {
			font-family: 'Poppins', sans-serif;
			background: #fafafa;
		}

		p {
			font-family: 'Poppins', sans-serif;
			font-size: 1.1em;
			font-weight: 300;
			line-height: 1.7em;
			color: #d9b566;
		}

		a,
		a:hover,
		a:focus {
			color: inherit;
			text-decoration: none;
			transition: all 0.3s;
		}

		.navbar {
			padding: 15px 10px;
			background: #d9b566;
			border: none;
			border-radius: 0;
			margin-bottom: 40px;
			box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
		}

		.navbar-btn {
			box-shadow: none;
			outline: none !important;
			border: none;
		}

		.line {
			width: 100%;
			height: 1px;
			border-bottom: 1px dashed #ddd;
			margin: 40px 0;
		}

		/* ---------------------------------------------------
			SIDEBAR STYLE
		----------------------------------------------------- */

		#sidebar {
			width: 250px;
			position: fixed;
			top: 0;
			right: -250px;
			height: 100vh;
			z-index: 999;
			background: rgba(0, 0, 0, 0.7);
			color: #fff;
			transition: all 0.3s;
			overflow-y: scroll;
			box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
		}

		#sidebar.active {
			right: 0;
		}

		#dismiss {
			width: 35px;
			height: 35px;
			line-height: 35px;
			text-align: center;
			background: black;
			position: absolute;
			top: 10px;
			right: 10px;
			cursor: pointer;
			-webkit-transition: all 0.3s;
			-o-transition: all 0.3s;
			transition: all 0.3s;
		}

		#dismiss:hover {
			background: #fff;
			color: #d9b566;
		}

		.overlay {
			display: none;
			position: fixed;
			width: 100vw;
			height: 100vh;
			background: rgba(0, 0, 0, 0);
			z-index: 998;
			opacity: 0;
			transition: all 0.5s ease-in-out;
		}
		.overlay.active {
			display: block;
			opacity: 1;
		}

		#sidebar .sidebar-header {
			padding: 20px;
			background: rgba(0, 0, 0, 0.7);;
		}

		#sidebar ul.components {
			padding: 20px 0;
			border-bottom: 1px solid white;
		}

		#sidebar ul p {
			color: #fff;
			padding: 10px;
		}

		#sidebar ul li a {
			padding: 10px;
			font-size: 1.1em;
			display: block;
		}

		#sidebar ul li a:hover {
			color: #d9b566;
			background: #fff;
		}

		#sidebar ul li.active>a,
		a[aria-expanded="true"] {
			color: #fff;
			background: rgba(0, 0, 0, 0.7);
		}

		a[data-toggle="collapse"] {
			position: relative;
		}

		.dropdown-toggle::after {
			display: block;
			position: absolute;
			top: 50%;
			right: 20px;
			transform: translateY(-50%);
		}

		ul ul a {
			font-size: 0.9em !important;
			padding-left: 30px !important;
			background: rgba(0, 0, 0, 0.7);
		}

		ul.CTAs {
			padding: 20px;
		}

		ul.CTAs a {
			text-align: center;
			font-size: 0.9em !important;
			display: block;
			border-radius: 5px;
			margin-bottom: 5px;
		}

		a.download {
			background: #fff;
			color: #d9b566;
		}

		a.article,
		a.article:hover {
			background: rgba(0, 0, 0, 0.7) !important;
			color: #fff !important;
		}

		/* ---------------------------------------------------
			CONTENT STYLE
		----------------------------------------------------- */

		#content {
			width: 100%;
			padding: 20px;
			min-height: 100vh;
			transition: all 0.3s;
			position: absolute;
			top: 0;
			right: 0;
		}



		.btn-primary
		{
			font-family: 'Arial';
		}
		.navbar-light
		{
			background-image: url("{{ asset("images/background.jpg") }}");
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
			background-image: url("{{ asset("images/background2.png") }}");
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
			/*font-family: 'Segoe UI Regular' !important;*/
		}
		.subtitulo
		{
			font-family: 'brillotusregular' !important;
			/*font-family: 'Segoe UI Regular' !important;*/
		}
		.card
		{
			box-shadow: 2px 2px 5px #999;
		}
		.card:hover
		{
			box-shadow: 5px 5px 10px #999;
		}
		.card:hover
		{
			animation-name:zoom-independiente;
			animation-duration: .4s;
			margin-top:-20px;
			margin-bottom:20px;
		}
		.card:not(:hover)
		{
			animation-name:zoom-independienteContrario;
			animation-duration: .4s;
			margin-top:0px;
			margin-bottom:0px;
		}

		@keyframes zoom-independiente{
			from {
				margin-top:0px;
				margin-bottom:0px;
			}
			to{
				margin-top:-20px;
				margin-bottom:20px;
			}

		}
		@keyframes zoom-independienteContrario{
			from{
				margin-top:-20px;
				margin-bottom:20px;
			}
			to {
				margin-top:0px;
				margin-bottom:0px;
			}

		}
	</style>

<!--Sidebar-->
<div class="wrapper">
	<!-- Sidebar  -->
	<nav id="sidebar">
		<div id="dismiss">
			<i class="fas fa-arrow-left"></i>
		</div>

		<div class="sidebar-header">
			<h3>Bootstrap Sidebar</h3>
		</div>

		<ul class="list-unstyled components">
			<p>Dummy Heading</p>
			<li class="active">
				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
				<ul class="collapse list-unstyled" id="homeSubmenu">
					<li>
						<a href="#">Home 1</a>
					</li>
					<li>
						<a href="#">Home 2</a>
					</li>
					<li>
						<a href="#">Home 3</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">About</a>
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
				<ul class="collapse list-unstyled" id="pageSubmenu">
					<li>
						<a href="#">Page 1</a>
					</li>
					<li>
						<a href="#">Page 2</a>
					</li>
					<li>
						<a href="#">Page 3</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">Portfolio</a>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
		</ul>

		<ul class="list-unstyled CTAs">
			<li>
				<a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
			</li>
			<li>
				<a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
			</li>
		</ul>
	</nav>
</div>


	<!--Menu-->
	<div class="margenes">
		<div class="container contenido">
			<CENTER>
			<br>
			<div class="col-md-12">
				<div class="col-md-8">
					<div class="titulo">
						<h2>MENÚ</h2>
					</div>
				</div>
			</div>
			</CENTER>

			<!--Entradas-->
			<div class="container">
				<CENTER>
				<div class="subtitulo row">
					<div class="col-6 row"> 
						<div class="col-4"><hr></div>
						<div class="col-4"><h3>Entradas</h3></div>
						<div class="col-4"><hr></div>
					</div>
				</div>
				<br>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/queso.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/quesadilla.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/guacamole.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/torta.jpg") }}" alt="Card image">
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
					<div class="subtitulo row">
						<div class="col-6 row"> 
							<div class="col-4"><hr></div>
							<div class="col-4"><h3>Platillos</h3></div>
							<div class="col-4"><hr></div>
						</div>
					</div>
					<br>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/chiles.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/pollo.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/enchiladas.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/pozole.jpg") }}" alt="Card image">
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
					<div class="subtitulo row">
						<div class="col-6 row"> 
							<div class="col-4"><hr></div>
							<div class="col-4"><h3>Postres</h3></div>
							<div class="col-4"><hr></div>
						</div>
					</div>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/jericalla.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/chongos.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/flan.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/pay.jpg") }}" alt="Card image">
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
					<div class="subtitulo row">
						<div class="col-6 row"> 
							<div class="col-4"><hr></div>
							<div class="col-4"><h3>Bebidas</h3></div>
							<div class="col-4"><hr></div>
						</div>
					</div>
				</CENTER>

				<div class="row form-group">
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/refresco.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/jugos.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/licuados.jpg") }}" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/te.jpg") }}" alt="Card image">
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
						</button><
					</div>
				</div>-->
			</div>
		</div>
	</div>

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


@endsection
	