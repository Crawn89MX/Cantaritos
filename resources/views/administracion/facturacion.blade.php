@extends('layouts.app') <!--Llama a la carpeta layouts con su archivo app,
						Contiene el navbar y el menú de navegación para no 
						repetir el diseño en todos los archivos-->


@section('content') <!--Todo lo que se pondrá dentro del proyecto
					De que punto a que punto se tomará, en este caso para el diseño
					 Punto específico, es decir, el orden que se tomará el contenido-->
	
@if($errors->any())
	<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
	</div>
@endif

<div class="titulo">
	<h2>Facturación</h2>
</div>

<!-- Formulario -->
<div class="container">
<form method="POST" action="{{ url("facturacion/registrar") }}">
<div class="row form-group contact100-form">
	@csrf
	<div class="col-md-6">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere el nombre" >
			<span class="label-input100">Nombre completo</span>
			<input class="input100" type="text" name="nombre" required>
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere el apellido paterno" >
			<span class="label-input100">Apellido paterno</span>
			<input class="input100" type="text" name="apellidop" required>
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere el apellido materno" >
			<span class="label-input100">Apellido materno</span>
			<input class="input100" type="text" name="apellidom" required>
			<span class="focus-input100"></span>
		</div>
	</div>
	<br><br>
	<div class="col-md-12">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se el domicilio">
			<span class="label-input100">Domicilio</span>
			<input class="input100" type="text" name="domicilio" required>
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-6">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere el RFC" >
			<span class="label-input100">RFC</span>
			<input class="input100" type="text" name="rfc" required>
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere el monto">
			<span class="label-input100">Monto</span>
			<input class="input100" type="text" name="monto" placeholder="$" required>
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere la cantidad">
			<span class="label-input100">Cantidad</span>
			<input class="input100" type="text" name="cantidad" required>
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12">
			<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere el metodo">
				<span class="label-input100">Metodo</span>
				<input class="input100" type="text" name="metodo" placeholder="$" required>
				<span class="focus-input100"></span>
			</div>
		</div>
		<div class="col-md-12">
			<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requieren las condiciones">
				<span class="label-input100">Condiciones</span>
				<input class="input100" type="text" name="condiciones" placeholder="ej: 2 exhibiciones" required>
				<span class="focus-input100"></span>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Se requiere la descripcion">
			<span class="label-input100">Descripción</span>
			<textarea class="input100" type="text" name="descripcion" style="height: 130px ;" required></textarea>
			<span class="focus-input100"></span>
		</div>
	</div>

</div>
	<!--Botón-->
	<div class="col-md-12">
		<div class="container-contact100-form-btn">
			<button type="submit" class="contact100-form-btn">
				<span>
					<b>Generar</b>
				</span>
			</button>
		</div>
	</div>

</form>
</div>

@endsection