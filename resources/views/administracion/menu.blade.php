@extends('layouts.app')


@section('content')
	
	<style>
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
				<div class="subtitulo">
					<h3>Platillos</h3>
					<br>
				</div>
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
				<div class="subtitulo">
					<h3>Postres</h3>
					<br>
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
				<div class="subtitulo">
					<h3>Bebidas</h3>
					<br>
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
						</button>
					</div>
				</div>-->
			</div>
		</div>
	</div>

@endsection
	