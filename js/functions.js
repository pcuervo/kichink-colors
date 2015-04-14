(function($){
	"use strict";
	$(function(){

		/*------------------------------------*\
			#ON LOAD
		\*------------------------------------*/





		/*------------------------------------*\
			#Triggered events
		\*------------------------------------*/




		/*------------------------------------*\
			#RESPONSIVE
		\*------------------------------------*/

	});
})(jQuery);

/*------------------------------------*\
	#ON LOAD
\*------------------------------------*/


/**
* Check if .item elemets have been loaded and execute mansory
**/
function itemsExist(){

	var interval 	= 0,
		itemsLenght = 0;

	interval = setInterval(function(){
		var itemsLenght = $('.product-grid .item').length;
		if ( itemsLenght > 0 ){
			//The products are ready
			clearInterval(interval);

			$('.product-grid .item').each( function(index, val) {
				var ribbon = $(this).find('.ribbon');
				if( ribbon.length > 0 ){
					ribbon.appendTo( $(this).find('.items-data') );
				}
			});

		}

	}, 200);

}

/**
* Get the color
**/
function getColor( $element ){
	var color = $element.data('color');
	return color;
}

/**
* Apply color
**/
function applyColor(origin, destiny){
	var color;
	var shade;
	$(origin).each(function(){
		color = getColor( $(this) );
		shade = lightOrDark( '#'+color );
		console.log(shade);
		$(this)
			.closest(destiny).addClass('shade-'+shade)
			.css('backgroundColor', '#'+color);
	});
}

/**
* Determine if the color is light or dark.
**/
function lightOrDark(color){
	var r,b,g,hsp
		, a = color;

	if (a.match(/^rgb/)) {
		a = a.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/);
		r = a[1];
		b = a[2];
		g = a[3];
	} else {
		a = +("0x" + a.slice(1).replace( // thanks to jed : http://gist.github.com/983661
			a.length < 5 && /./g, '$&$&'
		)
		);
		r = a >> 16;
		b = a >> 8 & 255;
		g = a & 255;
	}
	hsp = Math.sqrt( // HSP equation from http://alienryderflex.com/hsp.html
		0.299 * (r * r) +
		0.587 * (g * g) +
		0.114 * (b * b)
	);
	if (hsp>127.5) {
		return 'light';
	} else {
		return 'dark';
	}
}




/*------------------------------------*\
	#Triggered events
\*------------------------------------*/

/**
* Scroll past the cover
**/
function scrollDown(){
	var position = $('.product-grid').offset().top;
	position = position - 20;
	$('html, body').animate({scrollTop: position}, 650);
}

/**
* Change language
**/
function changeLang(lang) {
	var ajax = $.post("https://www.kichink.com/home/change_lang", {lang: lang}, function(data) {})
	.success(function() {
		location.reload();
	})
	.error(function() {
		alert("Hubo un error al hacer el cambio. Por favor recarga la pagina e intente de nuevo");
	});
}

function fillSlideshow(images){

	if( images.length <= 1){
		$.each(images, function(i, val){
			image_html = '<img class="[ single-image ]" src="'+val.bordered+'" alt="">';
			$('.js-images-container').append(image_html);
		});
	} else {
		$.each(images, function(i, val){
			image_html = '<img src="'+val.bordered+'" alt="">';
			$('.js-images-container').append(image_html);
		});
	}

}// fillSlideshow

function runCycle(){
	$('.js-cycle-slideshow').cycle({
		fx: 			'scrollHorz',
		centerHorz: 	true,
		centerVert: 	true,
		swipe: 			true,
		timeout: 		0,
		prev: 			'.cycle-prev',
		next: 			'.cycle-next',
		log: 			true
	});
}// runCycle

function mostrarDisponibilidad(disponiblilidad_obj){
	var disp;
	switch (disponiblilidad_obj.type) {
		case "ava_inme":
		{
			disp = "Disponible inmediatamente";
			break;
		}
		case "ava_date":
		{
			disp = "Disponible a partir de " + disponiblilidad_obj.value + " d&iacute;as";
			break;
		}
		default:
		{
			disp = "Disponible en " + disponiblilidad_obj.value + " d&iacute;as";
			break;
		}
	}
	$('.js-disponibilidad').text(disp);
}

function fillStoreDetails(name, description, logo, cover){
	document.title = name + ' - Kichink!';
	$('.store-name').text(name);
	$('.store-description').text(description);
	$('.cover').css('background-image', 'url('+cover+')');
	$('.logo').attr('src', logo);
}// fillStoreDetails

function fillMenuCategories(categories){
	$.each(categories, function(i, category){
		//console.log(category);
		var menu_item_html = '<li><a href="#">'+category.name+'</a>';

		if(category.subcats.length == 0){
			menu_item_html += '</li>';
			$('#menu ul').append(menu_item_html);
			return true;
		}

		// Agregar subcategorías
		menu_item_html += ' \
				<label for="fof" class="toggle-sub" onclick="">&#9658;</label> \
				<input type="checkbox" name="nav" id="fof" class="sub-nav-check"/> \
				<ul id="fof-sub" class="sub-nav"> \
					<label for="fof" class="[ toggle back ]" onclick="" title="Back">Atras</label> \
					<li class="sub-heading">'+category.name+'</li>';
		$.each(category.subcats, function(j, subcat){ menu_item_html += '<li><a href="#">'+subcat.name+'</a></li>'; });
		menu_item_html += '</ul></li>';
		$('#menu ul').append(menu_item_html);
	});
}// fillMenuCategories

/**
* Show/hide related products in the single page
**/
function toggleRelatedProducts(clickedElement){
	if ( $('section.product-grid-wrapper').hasClass('hide') ){
		runMasonry('section.product-grid-wrapper .product-grid', '.item');
		//$(clickedElement).hide();
		$('section.product-grid-wrapper').fadeIn('fast');
		$('section.product-grid-wrapper').removeClass('hide').addClass('open');
		return;
	}

	if ( $('section.product-grid-wrapper').hasClass('open') ){
		$('section.product-grid-wrapper').fadeOut('fast');
		$('section.product-grid-wrapper').removeClass('open').addClass('hide');
		return;
	}
}

function agregaOpcionesDeCompra(opciones){

	var tallas = [];
	var unidades = [];
	var modelo;
	$.each(opciones, function(i, opcion){
		if(opcion.label.indexOf(':')>-1){
			var opcionCompra = {};
			opciones_arr = opcion.label.split(':');
			modelo = opciones_arr[0];

			opcionCompra['talla'] = opciones_arr[1];
			opcionCompra['unidades'] = opcion.units;
			tallas.push( opcionCompra );
		}
	});
	$('.js-modelo').text(modelo);
	
	crearSelectTallas( tallas );
	
}// agregaOpcionesDeCompra

function crearSelectTallas( tallas ){

	var select_tallas = '<select name="talla" id="talla" class="[ custom-select ][ js-tallas ]">';
	select_tallas = select_tallas + '<option data-unidades="0">Selecciona una talla</option>';
	
	$.each( tallas, function( i, opcionesCompra ) {
		console.log(opcionesCompra);
		select_tallas = select_tallas + '<option data-unidades="' + opcionesCompra.unidades + '" value="' + opcionesCompra.talla + '">' + opcionesCompra.talla + '</option>';
	});

	select_tallas = select_tallas + '</select>';
	$('.js-select-tallas').append(select_tallas);
	$('.custom-select').customSelect();

}// crearSelectTallas

function crearSelectUnidades( unidades ){

	$('.js-select-unidades').empty();

	if ( ! unidades )
		return;

	var label_unidades = '<label for="cantidad" class="[ margin-bottom--small ]">Cantidad</label><br />';
	var select_unidades = '<select name="cantidad" id="cantidad" class="[ custom-select-unidades ][ js-unidades ]">'

	for ( i = 1; i <= unidades; i++ )
		select_unidades = select_unidades + '<option value="' + i + '">' + i + '</option>';
	
	select_unidades = select_unidades + '</select>';
	$('.js-select-unidades').append(select_unidades);
	$('.custom-select-unidades').customSelect();

}// crearSelectUnidades



/*------------------------------------*\
	#RESPONSIVE
\*------------------------------------*/