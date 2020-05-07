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

			<!--Entradas-->
			<div class="container">
				<CENTER>
				<div class="subtitulo">
					<h3>Entradas</h3>
					<br>
				</div>
				</CENTER>

				<div class="row form-group">
					@forelse ($recetas ?? '' as $receta)
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
					@empty
						<h5>No hay productos</h5>
					@endforelse
					{{-- 
					<div class="card" style="width: 200px; margin-left: 2.2% !important;">
					  <img class="card-img-top" width="350" height="200" src="img/quesadilla.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/guacamole.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/torta.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/chiles.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/pollo.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/enchiladas.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/pozole.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/jericalla.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/chongos.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/flan.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/pay.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/refresco.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/jugos.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/licuados.jpg" alt="Card image">
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
					  <img class="card-img-top" width="350" height="200" src="img/te.jpg" alt="Card image">
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
				<br> --}}

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
