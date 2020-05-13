@extends('layouts.app')

@section('content')
	
	<style>
		.btn-primary
		{
			font-family: 'Arial';
		}
		.navbar-light
		{
			background-image: url("{{ asset("Images/background.jpg") }}");
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
			background-image: url("{{ asset("Images/background2.png") }}");
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
			/*font-family: 'proxima-nova' !important;*/
			font-family: 'Segoe UI Regular' !important;
		}
		.subtitulo
		{
			/*font-family: 'brillotusregular' !important;*/
			font-family: 'Segoe UI Regular' !important;
		}
		.card
		{
			box-shadow: 2px 2px 5px #999;
		}
	</style>

	<!--Menu-->
	<div class="margenes">
		@if($errors->any())
			<div class="alert alert-danger">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
			</div>
		@endif
		<div class="container contenido">
			

			<!--Entradas-->
			<div class="container">
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
				<div class="row">
					

					@forelse ($orden_Pedidas ?? '' as $orden_Pedida)
					  <div class="card" style="width: 200px; margin-left: 2.2% !important;">
						<img class="card-img-top" width="350" height="200" src="{{ asset("Images/$orden_Pedida->Imagen") }}" alt="Card image">
						<div class="card-body" style="padding: 5px !important;">
							  <div class="row d-flex justify-content-between">
								  <div class="col-md-8">
									  <h5 class="card-title" style="margin-bottom: 0px !important;">{{$orden_Pedida->Nombre}}</h5>
									  <h6><?php echo $orden_Pedida->Ingredientes; ?></h6>
								  </div>
								  <div class="col-md-4">
									  <CENTER>
										  <i class="fas fa-stopwatch" style="font-size:20px; color:gray;"></i>
									  </CENTER>
									<form method="POST" action="ordenes/preparada">
									  @csrf
									  <input type="text" name="id" value="{{ $orden_Pedida->ID }}" required hidden> 
									  <input type="text" name="idreceta" value="{{ $orden_Pedida->ID_Receta }}" required hidden> 
									  <input type="text" name="idmesa" value="{{ $orden_Pedida->Mesa }}" required hidden>
									  <input type="text" name="ingredientes" value="{{ $orden_Pedida->Ingredientes_Alternativos }}" required hidden> 
									  <input type="text" name="precio" value="{{ $orden_Pedida->Precio }}" required hidden>  
									  <button type="submit" class="btn btn-success btn-xs" style="height:25px !important; padding-top: 0px !important;"><i class="fas fa-check"></i></button>
								  	</form>
								</div>
							  </div>
						</div>
					  </div>
					@empty
						<h5>No hay productos</h5>
					@endforelse
					<br><br>
					
		</div>
	</div>

@endsection
