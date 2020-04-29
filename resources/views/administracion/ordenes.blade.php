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
					  <img class="card-img-top" width="350" height="200" src="{{ asset("images/queso.jpg") }}" alt="Card image">
					  <div class="card-body" style="padding: 5px !important;">
							<div class="row d-flex justify-content-between">
								<div class="col-md-8">
									<h5 class="card-title" style="margin-bottom: 0px !important;">Queso fundido</h5>
								</div>
								<div class="col-md-4">
									<CENTER>
										<img class="card-img"  src="{{ asset("images/temp.png") }}" style="width:20px !important; height:20px !important">
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

@endsection
