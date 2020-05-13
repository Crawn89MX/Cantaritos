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

	@if($errors->any())
		<div class="alert alert-danger">
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
		</div>
	@endif
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
					<div class="col-md-4">
						<h5>Orden</h5>
					</div>
					<div class="col-md-4">
						<h5>Precio unitario</h5>
					</div>
					<div class="col-md-4">
						<h5>Precio total</h5>
					</div>
				</div>
				<br>
					<?php 
						$stackComida = $ordenes;
						$countComida = array();
						$MinCount = 0;
						$j=0;
						
						
						
						foreach ($ordenes as $orden) {
							$bandera = 0;
							for($i = 0; $i < $j ;$i++){
								
								if($stackComida[$i]->Nombre == $orden->Nombre){			
									$stackComida[$i]->Nombre = $orden->Nombre;
									$countComida[$i] = $countComida[$i]+1;
									$bandera = 1;
								}
							}
							if($bandera == 0){
								$stackComida[$j]->Nombre=$orden->Nombre;
								$countComida[$j]=1;
								$j++;
							}
						}

						for ($i=0; $i < $j; $i++) { 
							
							echo '
							<div class="row form-group">
								<div class="col-md-4">
									<h5>'.$stackComida[$i]->Nombre.' X '.$countComida[$i].'</h5>
								</div>
								<div class="col-md-4">
									<h5>'.$stackComida[$i]->Precio.'</h5>
								</div>
								<div class="col-md-4">
									<h5>'.($stackComida[$i]->Precio * $countComida[$i]).'</h5>
								</div>
							</div>';
						}
					?>
					
					<br>
					<?php if(isset($orden)){$mesa = $orden->Mesa;} ?>
				
        <CENTER>
        	<div class="col-12">
  				<div class="col-11">
            		<hr>
  					<h5 style="text-align: left !important;">Total</h5>
  				</div>
  			</div>
        </CENTER>
				<br>

			<div class="row form-group contact100-form">
			</div>
				<!--Botón-->
				<div class="col-md-12">
					<div class="container-contact100-form-btn">
						<form action="cuentas/pagar" method="POST">
							@csrf
							<input type="text" name="id" value="{{ $mesa ?? '0' }}" hidden>
							<input type="text" name="ruta" value="{{ $ruta }}" hidden>
							<button class="contact100-form-btn">
								<span>
									<b>Cobrar</b>
									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection