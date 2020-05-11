@extends('layouts.app')

	@section('content')
	<style>
		.btn-primary
		{
			font-family: 'Arial';
		}
		.navbar-light
		{
			background-image: url("{{ asset("Images/background.jpg")}}");
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
			background-image: url("{{ asset ("Images/background2.png")}}");
			background-size: cover;
		}
		.contenido
		{
			background-color: #231E1F;
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
      		color: white;
		}
		.subtitulo
		{
			font-family: 'brillotusregular' !important;
		}
		.card
		{
			box-shadow: 2px 2px 5px #999;
		}
		hr
		{
		background-color: white;
		}
		h5
		{
		color: #CDCAC5;
		text-align: center;
		}
	</style>
	<!--Menu-->
	<div class="margenes">
		<div class="container contenido">
			<CENTER>
			<br>
			<div class="col-12">
				<div class="col-8">
					<div class="titulo">
						<h2>CUENTA</h2>
						<hr>
					</div>
				</div>
			</div>
			</CENTER>

			<!--Entradas-->
				<div class="row form-group">
<<<<<<< HEAD
					<div class="col-md-4">
						<h5>Orden</h5>
					</div>
					<div class="col-md-4">
						<h5>Precio unitario</h5>
					</div>
					<div class="col-md-4">
						<h5>Precio total</h5>
					</div>
=======
          <div class="col-4">
            <h5>Orden</h5>
          </div>
          <div class="col-4">
            <h5>Precio unitario</h5>
          </div>
          <div class="col-4">
            <h5>Precio total</h5>
          </div>
>>>>>>> f479722a059d9e886a1024aca207306ec075c388
				</div>
				<br>
				@foreach($ordenes as $orden)
					
					<div class="row form-group">
						<div class="col-md-4">
							<h5>{{ $orden->Nombre }}</h5>
						</div>
						<div class="col-md-4">
							<h5>{{ $orden->Precio }}</h5>
						</div>
						<div class="col-md-4">
							<h5>{{ $orden->Precio }}</h5>
						</div>
					</div>
					<br>
				@endforeach
        <CENTER>
        <div class="col-12">
  				<div class="col-11">
            <hr>
  						<h5 style="text-align: left !important;">Total</h5>
  				</div>
  			</div>
        </CENTER>
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