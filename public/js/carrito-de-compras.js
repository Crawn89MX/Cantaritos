




/*======================================================================================================================================================================================
																		VISUALIZAR LOS PRODCUTOS EN LA PAGINA CARRITO DE COMPRAS
======================================================================================================================================================================================*/

			if(localStorage.getItem("cantidadCesta") != null){
				$(document).ready(function(){
					$(".cantidadCesta").html(localStorage.getItem("cantidadCesta"));
				});
			}else{
				$(document).ready(function(){
					$(".cantidadCesta").html("0");
				});
			}

			checkProducts();

		function checkProducts(){

			if(localStorage.getItem("listaProductos") != null){
				var listaCarrito = JSON.parse(localStorage.getItem("listaProductos"));

				listaCarrito.forEach(funcionForEach);

				function funcionForEach(item, index){

					var url = 'http://cantaritos.test/Images/';
					$(document).ready(function(){
						$(".cuerpoCarrito").append(
						'<li>'+
							'<button class="btn btn-xs btn-danger quitarItemCarrito" idProducto="'+item.idProducto+'">x</button>'+
							'<label style="font-size:17px;" class="tituloCarritoCompra">'+item.titulo+'</label><br>'+
							'<img src="'+item.imagen+'" width="50px">'+
							'<label style="font-size:25px;" class="precioCarritoCompra">$<span>'+item.precio+'</span></label>'+
							'<label style="font-size:25px;">X</label>'+
							'<input type="text" hidden value="'+item.precio+'" name="precio1">'+
							'<input type="text" hidden value="'+item.idReceta+'" name="idpedido1" class="idReceta">'+
							'<input type="text" class="ingredientesCarritoCompra form-control" hidden value=\''+item.ingredientes+'\' name="ingredientes1">'+
							'<input type="number" class="cantidadItem" style="width:50px;" value="'+item.cantidad+'" name="cantidad1" class="form-input" item="'+index+'" idProducto="'+item.idProducto+'" precio="'+item.precio+'">'+
							'<label style="font-size:25px;">=</label>'+
							'<label style="font-size:25px;" class="subTotal'+index+'">$<span>'+item.precio+'</span></label>'+
						'</li>');
					});
				}
			}else{

				/*===============================================
					CARRITO VACIO
				===============================================*/


				$(document).ready(function(){
					$(".cuerpoCarrito").html('<li><h3>No hay articulos en el carrito</h3></li>');
					$(".sumaCarrito").hide();
					$(".botonCarrito").hide();
				});
			}
		}


/*======================================================================================================================================================================================
																						AGREGAR AL CARRITO
======================================================================================================================================================================================*/




		$(function() {
		 $(document).on('click', '.agregarCarrito', function(event) {
		    var idProducto = $(this).attr("idProducto");
		    var idReceta = $(this).attr("idReceta");
			var imagen = $(this).attr("imagen");
			var ingredientes = $(this).attr("ingredientes");
			var titulo = $(this).attr("titulo");
			var precio = $(this).attr("precio");
			var cantidad = $(this).attr("cantidadArt");

				

				/*===============================================
					RECUPERAR ALMACENAMIENTO DEL LOCALSTORAGE
				===============================================*/

				if(localStorage.getItem("listaProductos") == null){
					listaCarrito = [];
				}else{

					var listaProductos = JSON.parse(localStorage.getItem("listaProductos"));

					for(var i = 0; i < listaProductos.length ; i++){
						if(listaProductos[i]["idProducto"] == idProducto){
							/*
							Swal.fire({
							  position: 'top',
							  type: 'warning',
							  text: 'El producto ya está agregado al carrito',
							  showConfirmButton: false,
							  timer: 1000
							})
							*/
							alert('El producto ya esta en el carrito');
							
							
						 return;
						}
					}

					listaCarrito.concat(localStorage.getItem("listaProductos"));
				}


				/*===============================================
						ALMACENAR EN EL LOCALSTORAGE
				===============================================*/

				listaCarrito.push({"idProducto":idProducto,
									"idReceta":idReceta,
									"imagen":imagen,
									"ingredientes":ingredientes,
									"titulo":titulo,
									"precio":precio,
									"cantidad":cantidad});


				localStorage.setItem("listaProductos", JSON.stringify(listaCarrito));
			
				/*===============================================
							ACTUALIZAR LA CESTA
				===============================================*/

				var cantidadCesta = Number($(".cantidadCesta").html()) + parseInt(cantidad);

				$(".cantidadCesta").html(cantidadCesta);

				localStorage.setItem("cantidadCesta",cantidadCesta);

			/*
			Swal.fire({
			  position: 'top',
			  type: 'success',
			  text: 'Se agrego otro articulo al carrito',
			  showConfirmButton: false,
			  timer: 1000
			})
			*/
			alert('se agrego otro articulo')




		  });
		});


/*======================================================================================================================================================================================
																						QUITAR PRODUCTOS DEL CARRITO
======================================================================================================================================================================================*/

$(document).ready(function(){
	$(".quitarItemCarrito").click(function(){
		$(this).parent().remove();

		var idProducto = $(".cuerpoCarrito .cantidadItem");
		var idReceta = $(".cuerpoCarrito .idReceta");
		var imagen = $(".cuerpoCarrito img");
		var ingredientes = $(".cuerpoCarrito .ingredientesCarritoCompra");
		var titulo = $(".cuerpoCarrito .tituloCarritoCompra");
		var precio = $(".cuerpoCarrito .precioCarritoCompra span");
		var cantidad = $(".cuerpoCarrito .cantidadItem");

		/*======================================================
		SI QUEDAN ARTICULOS VOLVERLOS A AGREGAR(LOCALSTORAGE)
		======================================================*/
		for(var item = 0; item < idProducto.length ; item++){
				$(".subTotal"+item).html('<strong>$<span>'+($(cantidad[item]).val()*($(precio[item]).html()))+'</span></strong>');
		}

		listaCarrito = [];

		if(idProducto.length != 0 ){

			for(var i = 0; i < idProducto.length ; i++){

				var idProductoArray = $(idProducto[i]).attr("idProducto");
				var idRecetaArray = $(idReceta[i]).val();
				var imagenArray = $(imagen[i]).attr("src");
				var ingredientesArray = $(ingredientes[i]).html();
				var tituloArray = $(titulo[i]).html();
				var precioArray = $(precio[i]).html();
				var cantidadArray = $(cantidad[i]).val();

				listaCarrito.push({"idProducto":idProductoArray,
									"idReceta":idRecetaArray,
									"imagen":imagenArray,
									"ingredientes":ingredientesArray,
									"titulo":tituloArray,
									"precio":precioArray,
									"cantidad":cantidadArray});
			}

			localStorage.setItem("listaProductos",JSON.stringify(listaCarrito));

			sumaSubtotales();
			cestaCarrito(listaCarrito.length);

		}else{
			/*======================================================
			SI YA NO QUEDAN ARTICULOS REMOVEMOS TODO
			======================================================*/

			localStorage.removeItem("listaProductos");
			localStorage.setItem("cantidadCesta","0");
			localStorage.setItem("sumaCesta","0");

			$(".cantidadCesta").html("0");

			$(".cuerpoCarrito").html('<div class="row itemCarrito"> <div class="col-12" ><h2 style="padding: 50px 0px;" class="text-center">Aún no hay productos en el carrito de compras.</h2></div></div>');
			$(".sumaCarrito").hide();
			$(".botonCarrito").hide();

		}
	});
});


/*======================================================================================================================================================================================
																						GENERAR SUBTOTAL DESPUES DE CAMBIAR
======================================================================================================================================================================================*/

$(document).ready(function(){
	$(".cantidadItem").change(function(){
		var cantidad = $(this).val();
		var precio = $(this).attr("precio");
		var idProducto = $(this).attr("idProducto");
		var idReceta = $(this).attr("idReceta");
		var item = $(this).attr("item");

		if(cantidad< 1){
			cantidad = 1;
		}

		$(".precioModificado"+item).html('');
		
			$(".subTotal"+item).html('<strong>$<span>'+(cantidad*precio)+'</span></strong>');
		


		/*======================================================
		ACTUALIZAR LA CANTIDAD EN EL LOCAL STORAGE
		======================================================*/

		var imagen = $(".cuerpoCarrito img");
		var ingredientes = $(".cuerpoCarrito .ingredientesCarritoCompra");
		var titulo = $(".cuerpoCarrito .tituloCarritoCompra");
		var precio = $(".cuerpoCarrito .precioCarritoCompra span");
		var cantidad = $(".cuerpoCarrito .cantidadItem");
		var idProducto = $(".cuerpoCarrito button");
		var idReceta = $(".cuerpoCarrito .idReceta");
		//var skuProducto = $(".cuerpoCarrito .cantidadItem");

		listaCarrito = [];


		for(var i = 0; i < idProducto.length ; i++){

				var idProductoArray = $(idProducto[i]).attr("idProducto");
				var idRecetaArray = $(idReceta[i]).val();
				var imagenArray = $(imagen[i]).attr("src");
				var ingredientesArray = $(ingredientes[i]).html();
				var tituloArray = $(titulo[i]).html();
				var precioArray = $(precio[i]).html();
				var cantidadArray = $(cantidad[i]).val();

				if(cantidadArray < 1){
					cantidadArray = 1;
					$(cantidad[i]).val(1);
				}

				listaCarrito.push({"idProducto":idProductoArray,
									"idReceta":idRecetaArray,
									"imagen":imagenArray,
									"ingredientes":ingredientesArray,
									"titulo":tituloArray,
									"precio":precioArray,
									"cantidad":cantidadArray});
			}

			localStorage.setItem("listaProductos",JSON.stringify(listaCarrito));

			sumaSubtotales();
			cestaCarrito(listaCarrito.length);
	});

/*======================================================================================================================================================================================
																						ACTUALIZAR SUBTOTAL
======================================================================================================================================================================================*/


	var precioCarritoCompra = $(".cuerpoCarrito .precioCarritoCompra span");
	var cantidadItem = $(".cuerpoCarrito .cantidadItem");
	var idProducto = $(".cuerpoCarrito button");
	var idReceta = $(".cuerpoCarrito .idReceta");

	for(var i = 0 ; i < precioCarritoCompra.length ; i++){
		var cantidadItemArray = $(cantidadItem[i]).val();

			var precioCarritoCompraArray = $(precioCarritoCompra[i]).html();

		$(".subTotal"+i).html('<strong>$<span>'+(cantidadItemArray*precioCarritoCompraArray)+'</span></strong>');

		sumaSubtotales();
		cestaCarrito(precioCarritoCompra.length);
	}
	


/*======================================================================================================================================================================================
																						SUMA DE TODOS LOS SUBTOTALES
======================================================================================================================================================================================*/

});

function sumaSubtotales(){
	var subtotales = $(".subTotales span");
	var arraySumaSubTotales = [];

	for(var i = 0; i < subtotales.length; i++){
		var subTotalesArray = $(subtotales[i]).html();
		arraySumaSubTotales.push(Number(subTotalesArray));
	}


	function sumaArraySubTotales(total,numero){
		return total + numero;
	}

	var sumaTotal = arraySumaSubTotales.reduce(sumaArraySubTotales);

	$(".sumaSubTotal").html('<strong>$<span>'+sumaTotal+'</span></strong>');

	localStorage.setItem("sumaCesta", sumaTotal);

}


/*======================================================================================================================================================================================
																						ACTUALIZAR CESTA
======================================================================================================================================================================================*/

function cestaCarrito(cantidadProductos){

	if(cantidadProductos != 0){
		var cantidadItem = $(".cuerpoCarrito .cantidadItem");

		var arraySumaCantidades = [];

		for(var i = 0; i < cantidadItem.length; i++){
			var cantidadItemArray = $(cantidadItem[i]).val();
			arraySumaCantidades.push(Number(cantidadItemArray));
		}


		function sumaArrayCantidades(total,numero){
			return total + numero;
		}

		var sumaTotalCantidades = arraySumaCantidades.reduce(sumaArrayCantidades);

		$('.cantidadCesta').html(sumaTotalCantidades );

		localStorage.setItem("cantidadCesta", sumaTotalCantidades);


	}

}



/*======================================================================================================================================================================================
																				SUMA TOTAL DE LA COMPRA
======================================================================================================================================================================================*/

/*
	function sumaTotalCompra(){

		var sumaTotalTasas= Number($(".valorSubTotal").html()));

		$(".valorTotalCompra").html(Math.ceil(sumaTotalTasas));
		$(".valorTotalCompra").attr("valor",Math.ceil(sumaTotalTasas));
	}
*/


/*======================================================================================================================================================================================
																		CAMBIO DE DIVISA
======================================================================================================================================================================================*/
/*
var divisaBase = "MXN";

$("#cambiarDivisa").change(function(){

		if($("#seleccionarPais").val() == ""){
			$("#Advertencia2").html('<i class="fa fa-caret-left" style="margin-top:-19px; position:absolute; font-size:87px; color:#FFF3CD;"></i><div class="alert alert-warning" style="margin-top:0px; margin-left:25px; position:absolute;">No ha seleccionado el país de envío</div>');
			return;
		}




	var divisa = $(this).val();

	$.ajax({
		url: "https://free.currconv.com/api/v7/convert?apiKey=167861d3e3012d3756da&q="+divisaBase+"_"+divisa+"&compact=y",
		type:"GET",
		cache:false,
		contentType:false,
		processData:false,
		dataType:"jsonp",
		success:function(respuesta){
			console.log('respuesta =>',respuesta );

			var divisaString = JSON.stringify(respuesta);
			var conversion = divisaString.substr(18,4);

			if(divisa == "MXN"){
				conversion = 1;
			}

			$(".cambioDivisa").html(divisa);


			$(".valorSubTotal").html(Math.ceil((Number(conversion)*Number($(".valorSubTotal").attr("valor")))));
			$(".valorTotalEnvio").html(Math.ceil((Number(conversion)*Number($(".valorTotalEnvio").attr("valor")))));
			$(".valorTotalImpuesto").html(Math.ceil((Number(conversion)*Number($(".valorTotalImpuesto").attr("valor")))));
			$(".valorTotalCompra").html(Math.ceil((Number(conversion)*Number($(".valorTotalCompra").attr("valor")))));

			var valorItem = $(".valorItem");

			for(var i = 0 ; i < valorItem.length; i++){

				$(valorItem[i]).html(Math.ceil((Number(conversion)*Number($(valorItem[i]).attr("valor")))));
			}

		}

	});

});

*/
/*======================================================================================================================================================================================
																				BOTON PAGAR 
======================================================================================================================================================================================*/
$(document).ready(function(){
	$(".btnPedir").click(function(){

		var titulo = $(".valorTitulo");
		var cantidad = $(".valorCantidad");
		var precioItem = $(".valorItem");
		var idProducto = $(".cuerpoCarrito button");
		var idReceta = $(".cuerpoCarrito .idReceta");
		var ingredientes = $(".cuerpoCarrito .ingredientesCarritoCompra");
		var token = document.getElementsByName('_token').val();
		var idmesa = $(".idmesa").val();

		var tituloArray = [];
		var cantidadArray = [];
		var ingredientesArray = [];
		var precioItemArray = [];
		var idProductoArray = [];


		for(var i = 0; i < titulo.length; i++){
			tituloArray[i] = $(titulo[i]).html();
			tituloArray[i] = tituloArray[i].replace(/,/gi,'|'); //esto se hace por un problema con las comas en paypal.controlador.php
			cantidadArray[i] = $(cantidad[i]).html();
			ingredientesArray[i] = $(ingredientes[i]).html();
			precioItemArray[i] = $(precioItem[i]).html();
			idProductoArray[i] = $(idProducto[i]).attr("idProducto");
			idRecetaArray[i] = $(idReceta[i]).val();
		}


		var datos = new FormData();

		datos.append("_token",token);
		datos.append("idmesa",idmesa);
		datos.append("tituloArray",tituloArray);
		datos.append("ingredientesArray",ingredientesArray);
		datos.append("cantidadArray",cantidadArray);
		datos.append("precioItemArray",precioItemArray);
		datos.append("idRecetaArray",idRecetaArray);
		datos.append("idProductoArray",idProductoArray);

		
		
		$.ajax({
			url:"ordenes/pedida",
			method:"POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success:function(respuesta){
				alert('hola');
				window.location = respuesta;
			}
		})
		

		

		

	});
});