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
	@if($errors->any())
		<div class="alert alert-danger">
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
		</div>
	@endif

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
									//- valores de mesa libre
									$btntype = 'btn-info';
									$nombremesa = $mesa->Nombre;
									$rutaForm = 'inicio';
									$rutaRetorno = 'mesas';
									$mesadisponibilidad = 4;

									// valores de mesa en diferentes estados.
									if($mesa->Borrado == 1){$btntype = 'btn-danger'; $nombremesa = 'borrada';}
									if($mesa->Disponibilidad == 0){$btntype = 'btn-danger'; $rutaForm = '';}  //ocupada
									if($mesa->Disponibilidad == 2){$btntype = 'btn-success'; $mesadisponibilidad = 1; $rutaForm = 'cobrar';} //pido cuenta
									if($mesa->Disponibilidad == 3){$btntype = 'btn-warning'; $mesadisponibilidad = 1; $rutaForm = 'cobrar';} //pidio facturacion
									if($mesa->Disponibilidad == 4){$btntype = 'btn-light'; $rutaForm = '';}  //siendo ocupada
								?>
								<div class="boton" style="padding-top: 13px !important; ">
									<form method="POST" action="<?php echo $rutaForm; ?>">
										@csrf
										<input type="text" value="{{ $mesa->ID }}" name="id" hidden>
										<input type="text" value="{{ $mesadisponibilidad }}" name="disponibilidad" hidden>
										<input type="text" value="{{ $mesa->Total }}" name="total" hidden>
										<input type="text" value="{{ $mesa->Ordenes }}" name="ordenes" hidden>
										<input type="text" value="<?php echo $rutaRetorno; ?>" name="ruta" hidden>
										<button type="submit" style=" width:70px !important;" class="btn <?php echo $btntype; ?> btn-sm">{{ $nombremesa }}</button>
									</form>
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
									//- valores de mesa libre
									$btntype = 'btn-info';
									$nombremesa = $mesa->Nombre;
									$rutaForm = 'inicio';
									$rutaRetorno = 'mesas';
									$mesadisponibilidad = 4;
									$method = 'POST';

									// valores de mesa en diferentes estados.
									if($mesa->Borrado == 1){$btntype = 'btn-danger'; $nombremesa = 'borrada';}
									if($mesa->Disponibilidad == 0){$btntype = 'btn-danger'; $rutaForm = ''; $method = '';}  //ocupada
									if($mesa->Disponibilidad == 2){$btntype = 'btn-success'; $mesadisponibilidad = 1; $rutaForm = 'cobrar';} //pido cuenta
									if($mesa->Disponibilidad == 3){$btntype = 'btn-warning'; $mesadisponibilidad = 1; $rutaForm = 'cobrar';} //pidio facturacion
									if($mesa->Disponibilidad == 4){$btntype = 'btn-light'; $rutaForm = ''; $method = '';}  //siendo ocupada
								?>
								<div class="col-2" style="margin-left: -55px; padding-top: 330px;">
									<div class="boton" style="padding-top: 80px !important;">
										<form method="{{ $method }}" action="{{ $rutaForm }}">
											@csrf
											<input type="text" value="{{ $mesa->ID }}" name="id" hidden>
											<input type="text" value="{{ $mesadisponibilidad }}" name="disponibilidad" hidden>
											<input type="text" value="{{ $mesa->Total }}" name="total" hidden>
											<input type="text" value="{{ $mesa->Ordenes }}" name="ordenes" hidden>
											<input type="text" value="{{ $rutaRetorno }}" name="ruta" hidden>
											<button type="submit" style=" width:70px !important;" class="btn {{ $btntype }} btn-sm">{{ $nombremesa }}</button>
										</form>
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
								 	//- valores de mesa libre
									$btntype = 'btn-info';
									$nombremesa = $mesa->Nombre;
									$rutaForm = 'inicio';
									$rutaRetorno = 'mesas';
									$mesadisponibilidad = 4;

									// valores de mesa en diferentes estados.
									if($mesa->Borrado == 1){$btntype = 'btn-danger'; $nombremesa = 'borrada';}
									if($mesa->Disponibilidad == 0){$btntype = 'btn-danger'; $rutaForm = '';}  //ocupada
									if($mesa->Disponibilidad == 2){$btntype = 'btn-success'; $mesadisponibilidad = 1; $rutaForm = 'cobrar'; $rutaRetorno = 'mesas';} //pido cuenta
									if($mesa->Disponibilidad == 3){$btntype = 'btn-warning'; $mesadisponibilidad = 1; $rutaForm = 'cobrar'; $rutaRetorno = 'facturacion';} //pidio facturacion
									if($mesa->Disponibilidad == 4){$btntype = 'btn-light'; $rutaForm = '';}  //siendo ocupada
								?>
								<div class="boton" style="padding-top: 13px !important; ">
									<form method="POST" action="<?php echo $rutaForm; ?>">
										@csrf
										<input type="text" value="{{ $mesa->ID }}" name="id" hidden>
										<input type="text" value="{{ $mesadisponibilidad }}" name="disponibilidad" hidden>
										<input type="text" value="{{ $mesa->Total }}" name="total" hidden>
										<input type="text" value="{{ $mesa->Ordenes }}" name="ordenes" hidden>
										<input type="text" value="<?php echo $rutaRetorno; ?>" name="ruta" hidden>
										<button type="submit" style=" width:70px !important;" class="btn <?php echo $btntype; ?> btn-sm">{{ $nombremesa }}</button>
									</form>
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

