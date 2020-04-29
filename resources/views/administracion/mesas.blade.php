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
	</style>

	<!--Botones de las mesas-->
	<div class="margenes">
		<div class="container contenido">
			<div class="row">
				<div class="col-2">
					<div class="boton" style="padding-top: 80px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 12</button>
					</div>
					<div class="boton" style="padding-top: 10px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 13</button>
					</div>
					<div class="boton" style="padding-top: 20px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 14</button>
					</div>
					<div class="boton" style="padding-top: 5px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 15</button>
					</div>
					<div class="boton" style="padding-top: 5px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 16</button>
					</div>
					<div class="boton" style="padding-top: 10px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 17</button>
					</div>
					<div class="boton" style="padding-top: 15px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 18</button>
					</div>
					<div class="boton" style="padding-top: 15px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 19</button>
					</div>
					<div class="boton" style="padding-top: 15px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 20</button>
					</div>
				</div>
				<div class="col-6">
					<div class="boton" style="padding-top: 80px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 12</button>
					</div>
					<div class="boton" style="padding-top: 10px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 13</button>
					</div>
					<div class="boton" style="padding-top: 20px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 14</button>
					</div>
					<div class="boton" style="padding-top: 5px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 15</button>
					</div>
					<div class="boton" style="padding-top: 5px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 16</button>
					</div>
					<div class="boton" style="padding-top: 10px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 17</button>
					</div>
					<div class="boton" style="padding-top: 15px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 18</button>
					</div>
					<div class="boton" style="padding-top: 15px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 19</button>
					</div>
					<div class="boton" style="padding-top: 15px !important; padding-left: 225px !important">
						<button type="button" class="btn btn-info btn-sm">Mesa 20</button>
					</div>

				</div>
				<br>
			</div>

		</div>
		<br>
	</div>

@endsection

