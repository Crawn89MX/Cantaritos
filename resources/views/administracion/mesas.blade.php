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
		.contenido
		{
			background-image: url("{{ asset("images/mesas.jpg") }}");
			background-size: cover;
			height: 500px;
			width: -800px;
		}
		.btn-info
		{
			color:white;
		}
	</style>

	<!--Botones de las mesas-->
	<div class="margenes">
		<div class="container contenido">
			<div class="row" style="padding-left: 135px;">
				<div class="col-2">
					<div class="boton" style="padding-top: 67px !important; ">
						
					</div>
					<?php

						for($i = 3;$i <= 15; $i++) {
							if($i != 6 && $i != 7 && $i != 11 && $i != 12){
							echo '	<div class="boton" style="padding-top: 13px !important; ">
										<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa '.$i.'</button>
									</div>';
							}
						}

					?>
					
					</div>
				<div class="col-2" style="margin-left: 110px; padding-top: 330px;">
					<div class="boton" style="padding-top: 80px !important;">
						<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa 18</button>
					</div>
				</div>
				<div class="col-2" style="margin-left: -55px; padding-top: 330px;">
					<div class="boton" style="padding-top: 80px !important;">
						<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa 19</button>
					</div>
				</div>
				<div class="col-2" style="margin-left: -55px; padding-top: 330px;">
					<div class="boton" style="padding-top: 80px !important;">
						<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa 20</button>
					</div>
				</div>
				<div class="col-2"  style="padding-left: 70px;">
					<div class="boton" style="padding-top: 70px !important;">
						
					</div>
					<?php

						for($i = 1;$i <= 21; $i++) {
							if($i == 1 || $i == 2 || $i == 6 || $i == 7 || $i == 11 || $i == 12 || $i == 16 || $i == 17 || $i == 21){
							echo '	<div class="boton" style="padding-top: 13px !important; ">
										<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa '.$i.'</button>
									</div>';
							}
						}

					?>
				</div>
				
				</div>
				<br>
			</div>

		</div>
		<br>
	</div>

@endsection

