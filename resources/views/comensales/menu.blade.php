@extends('layouts.sidebar')

@section("content-comensales")

	
	<!--Menu-->
	<div>
		<img src="{{ asset('Images/decorador.png') }}" style="float: left; padding-left:260px; padding-top:80px;  filter: invert(85%);">
		<img src="{{ asset('Images/decorador-der.png') }}" style="float: right; padding-right:260px; padding-top:80px; filter: invert(85%);">
		<div class="margenes">
			<div class="container contenido" style="min-height: 1150px;">
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

				
				<div class="container">

					
					<!--Entradas-->	
					<CENTER>
						<div class="subtitulo botonCarrito" id="Entradas">
							<h3>Entradas</h3>
							<br>
						</div>
					</CENTER>

					<div class="row form-group">
						@forelse ($recetas ?? '' as $receta)
						@if($receta->Clasificacion == "Platillo principal")
								
							<div class="card" style="width: 146px; margin-left: 2.2% !important; margin-bottom:20px;">
								<img class="card-img-top" width="100%" height="146" src="{{asset("Images/$receta->Imagen")}}" alt="Card image">
								<div class="card-body" style="padding: 5px !important;">
									<div class="row d-flex justify-content-between">
										<div class="col-md-9">
											<h5 class="card-title" style="margin-bottom: 0px !important; font-size:14px;">{{$receta->Nombre}}</h5>
										</div>
										<div class="col-md-3">
											<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important; font-size:14px;">${{$receta->Costo}}</h5>
											<button type="submit" class="btn btn-success btn-xs agregarCarrito" style="height:25px !important; padding-top: 0px !important; margin:-30px;" imagen="{{ $receta->Imagen }}" idProducto="{{ $receta->ID }}" precio="{{ $receta->Costo }}" ingredientes="{{ $receta->Condimentos_Alternativos }}" cantidadArt="1" titulo="{{ $receta->Nombre }}"><i class="fas fa-plus"></i></button>
										</div>
									</div>
								</div>
							</div>
						
						@endif
						@empty
							<h5>No hay productos</h5>
						@endforelse
					</div>

					<!--Platillos-->
					<CENTER>
						<div class="subtitulo" id="PlatosFuertes">
							<h3>Platos Fuertes</h3>
							<br>
						</div>
					</CENTER>

					<div class="row form-group">
						@forelse ($recetas ?? '' as $receta)
							@if($receta->Clasificacion == "Plato Fuerte")

								<div class="card" style="width: 146px; margin-left: 2.2% !important; margin-bottom:20px;">
									<img class="card-img-top" width="100%" height="146" src="{{asset("Images/$receta->Imagen")}}" alt="Card image">
									<div class="card-body" style="padding: 5px !important;">
										<div class="row d-flex justify-content-between">
											<div class="col-md-9">
												<h5 class="card-title" style="margin-bottom: 0px !important; font-size:14px;">{{$receta->Nombre}}</h5>
											</div>
											<div class="col-md-3">
												<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important; font-size:14px;">${{$receta->Costo}}</h5>
												<button type="submit" class="btn btn-success btn-xs" style="height:25px !important; padding-top: 0px !important; margin:-30px;"><i class="fas fa-plus"></i></button>
											</div>
										</div>
									</div>
								</div>

							@endif
						@empty
							<h5>No hay productos</h5>
						@endforelse
					</div>


					<!--Platillos-->
					<CENTER>
						<div class="subtitulo" id="PlatosFuertes">
							<h3>Todo</h3>
							<br>
						</div>
					</CENTER>

					<div class="row form-group">
						@forelse ($recetas ?? '' as $receta)

							<div class="card" style="width: 146px; margin-left: 2.2% !important; margin-bottom:20px;">
								<img class="card-img-top" width="100%" height="146" src="{{asset("Images/$receta->Imagen")}}" alt="Card image">
								<div class="card-body" style="padding: 5px !important;">
									<div class="row d-flex justify-content-between">
										<div class="col-md-9">
											<h5 class="card-title" style="margin-bottom: 0px !important; font-size:14px;">{{$receta->Nombre}}</h5>
										</div>
										<div class="col-md-3">
										<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important; font-size:14px;">${{$receta->Costo}}</h5>
										<button type="submit" class="btn btn-success btn-xs" style="height:25px !important; padding-top: 0px !important; margin:-30px;"><i class="fas fa-plus"></i></button>
									</div>
									</div>
								</div>
							</div>

						@empty
							<h5>No hay productos</h5>
						@endforelse
					</div>

					
				</div>
			</div>
		</div>

		
	</div>

@endsection	 
