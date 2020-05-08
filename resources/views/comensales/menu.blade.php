@extends('layouts.sidebar')

@section("content-comensales")
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

			
			<div class="container">
				
				<!--Entradas-->	
				
					<CENTER>
						<div class="subtitulo">
							<h3>Entradas</h3>
							<br>
						</div>
					</CENTER>

					<div class="row form-group">
						@forelse ($recetas ?? '' as $receta)
						@if($receta->Clasificacion == "Platillo principal")
								
							<div class="card" style="width: 200px; margin-left: 2.2% !important;">
								<img class="card-img-top" width="350" height="200" src="{{asset("Images/$receta->Imagen")}}" alt="Card image">
								<div class="card-body" style="padding: 5px !important;">
									<div class="row d-flex justify-content-between">
										<div class="col-md-9">
											<h5 class="card-title" style="margin-bottom: 0px !important;">{{$receta->Nombre}}</h5>
										</div>
										<div class="col-md-3">
										<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">${{$receta->Costo}}</h5>
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
					<div class="subtitulo">
						<h3>Platillos</h3>
						<br>
					</div>
				</CENTER>

				<div class="row form-group">
					@forelse ($recetas ?? '' as $receta)
						@if($receta->Clasificacion == "Plato Fuerte")
						<div class="card" style="width: 200px; margin-left: 2.2% !important;">
							<img class="card-img-top" width="350" height="200" src="{{asset("Images/$receta->Imagen")}}" alt="Card image">
							<div class="card-body" style="padding: 5px !important;">
								<div class="row d-flex justify-content-between">
									<div class="col-md-9">
										<h5 class="card-title" style="margin-bottom: 0px !important;">{{$receta->Nombre}}</h5>
									</div>
									<div class="col-md-3">
									<h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">${{$receta->Costo}}</h5>
									</div>
								</div>
							</div>
						</div>
						@endif
					@empty
						<h5>No hay productos</h5>
					@endforelse
				</div>
			</div>
		</div>
	</div>

@endsection	 
