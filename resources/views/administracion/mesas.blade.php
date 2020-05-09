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
				<div class="col-2" style="margin-right:150px;">

					<div class="boton" style="padding-top: 67px !important; ">
						
					</div>
					
						@forelse ($mesas as $mesa)
							@if($mesa->ID != 6 && $mesa->ID != 7 && $mesa->ID != 11 && $mesa->ID != 12 && $mesa->ID >= 3 && $mesa->ID <= 15)
									
								<?php
									$btntype = 'btn-info';
									if($mesa->Disponibilidad == 0){$btntype = 'btn-danger';}
									if($mesa->Disponibilidad == 2){$btntype = 'btn-success';}
									if($mesa->Disponibilidad == 3){$btntype = 'btn-warning';}
									if($mesa->Disponibilidad == 4){$btntype = 'btn-light';}
								?>
								<div class="boton" style="padding-top: 13px !important;">
									<button type="button" style=" width:70px !important;" class="btn <?php echo $btntype; ?> btn-sm">{{ $mesa->Nombre }}</button>
								</div>
							@endif
						@empty
							<div class="boton" style="padding-top: 13px !important; ">
								<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa '.$i.'</button>
							</div>
						@endforelse
					
					</div>

					@forelse ($mesas as $mesa)
							@if($mesa->ID == 18 || $mesa->ID == 19 || $mesa->ID == 20 )
								 <?php
									$btntype = 'btn-info';
									if($mesa->Disponibilidad == 0){$btntype = 'btn-danger';}
									if($mesa->Disponibilidad == 2){$btntype = 'btn-success';}
									if($mesa->Disponibilidad == 3){$btntype = 'btn-warning';}
									if($mesa->Disponibilidad == 4){$btntype = 'btn-light';}
								?>
								<div class="col-2" style="margin-left: -55px; padding-top: 330px;">
									<div class="boton" style="padding-top: 80px !important;">
										<button type="button" style=" width:70px !important;" class="btn <?php echo $btntype; ?> btn-sm">{{ $mesa->Nombre }}</button>
									</div>
								</div>
							@endif
						@empty
							<div class="boton" style="padding-top: 13px !important; ">
								<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa '.$i.'</button>
							</div>
						@endforelse

				

				<div class="col-2"  style="padding-left: 70px;">
					<div class="boton" style="padding-top: 67px !important;">
						
					</div>
					
						@forelse ($mesas as $mesa)
							@if($mesa->ID == 1 || $mesa->ID == 2 || $mesa->ID == 6 || $mesa->ID == 7 || $mesa->ID == 11 || $mesa->ID == 12 || $mesa->ID == 16 || $mesa->ID == 17 || $mesa->ID == 21)
								 <?php
									$btntype = 'btn-info';
									if($mesa->Disponibilidad == 0){$btntype = 'btn-danger';}
									if($mesa->Disponibilidad == 2){$btntype = 'btn-success';}
									if($mesa->Disponibilidad == 3){$btntype = 'btn-warning';}
									if($mesa->Disponibilidad == 4){$btntype = 'btn-light';}
								?>
								<div class="boton" style="padding-top: 13px !important; ">
									<input type="text" value="{{ $mesa->ID }}" name="id">
									<input type="text" value="{{ $mesa->Disponibilidad }}" name="disponibilidad">
									<input type="text" value="{{ $mesa->Total }}" name="total">
									<input type="text" value="{{ $mesa->Ordenes }}" name="ordenes">
									<button type="button" style=" width:70px !important;" class="btn <?php echo $btntype; ?> btn-sm">{{ $mesa->Nombre }}</button>
								</div>
							@endif
						@empty
							<div class="boton" style="padding-top: 13px !important; ">
								<button type="button" style=" width:70px !important;" class="btn btn-info btn-sm">Mesa '.$i.'</button>
							</div>
						@endforelse
					
					
				</div>
				
				</div>
				<br>
			</div>

		</div>
		<br>
	</div>

@endsection

