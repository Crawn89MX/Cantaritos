    @extends('layouts.app')


    @section('content')
    <style>
      body
      {
        background-image: url("{{asset("Images/background.jpg")}}");
        background-size: cover;
        background-position: 0px -125px;
      }
      .imagen
      {
        -webkit-filter: invert(100%);
        filter: invert(100%);
        padding-top: 225px;
      }
      .btn-default
      {
        background-color: white;
        color: black;
      }
			.contenido
			{
				background-color: white;
			}
			.margenes
			{
				padding-left: 35%;
				padding-right: 35%;
			}
    </style>
  


				<div class="margenes">
					<div class="container contenido">
						<center>
							<div class="titulo">
								<br>
									<h2>Registro</h2>
							</div>
						</center>

				<!-- Formulario -->
				<div class="container">
					<div class="row form-group">
						<form class="contact100-form">
							<div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Nombre completo</span>
									<input class="input100" type="text" name="nombre">
									<span class="focus-input100"></span>
								</div>
							</div>
			        <div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Correo is required" >
									<span class="label-input100">Correo</span>
									<input class="input100" type="email" name="apellidop">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Contraseña</span>
									<input class="input100" type="password" name="password">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Confirmación de contraseña</span>
									<input class="input100" type="password" name="passwordr">
									<span class="focus-input100"></span>
								</div>
							</div>
						</form>
					</div>

					<!--Botón-->
					<div class="col-md-12">
						<div class="container-contact100-form-btn">
							<button class="contact100-form-btn">
								<span>
									<b>Crear</b>
								</span>
							</button>
						</div>
					</div>
				</div>
				<br>
			</div>
			</div>
    @endsection