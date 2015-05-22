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
				var ribbonSet = false;
				if( ribbon.length > 0 && ! ribbonSet ){
					ribbon.appendTo( $(this).find('.items-data') );
					ribbonSet = true;
				}
			});

			if( localStorage.getItem('pallete') != '' ){
				setProductImgColor( localStorage.getItem('pallete') );
				applyColor('.product-grid .item img', '.product-grid .item');
			}

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
		$(this)
			.closest(destiny)
			.removeClass('shade-light')
			.removeClass('shade-dark')
			.addClass('shade-'+shade)
			.css('backgroundColor', '#'+color);
	});
}

function applyCoverColor(color){
	console.log("'"+color+"'");
	$('.cover .opacity--full').css( 'background-color', color );
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

	if( description !== null ) $('.store-description').text(description);
	else {
		$('.js-show-description').removeClass('hidden--medium');
		$('.js-show-description').hide();
	} 
	
	$('.cover').css('background-image', 'url('+cover+')');
	$('.logo').attr('src', logo);
}// fillStoreDetails

function fillMenuCategories(categories){
	$.each(categories, function(i, category){
		//console.log(category);
		var categorySlug = convertToSlug( replaceAccents( category.name ) );
		var menu_item_html = '<a class="[ inline-block ][ menu__item ][ js-'+categorySlug+' ]" data-category="'+categorySlug+'" href="/category/' + category.id + '">'+category.name+'</a>';

		$('.js-nav .overflow-holder').append(menu_item_html);
		if(category.subcats.length == 0){
			return true;
		}

		//Agregar subcategorías
		var sub_nav = ' \
			<div class="[ sub-nav ][ js-'+categorySlug+' ]" data-category="'+categorySlug+'"> \
				<div class="[ overflow-holder ]"> \
					<a href="/" class="[ inline-block ][ menu__item ][ close-menu js-close-menu ]"> \
						<i class="icon-close"></i> \
					</a>';
		$.each(category.subcats, function(j, subcat){
			//var sub_nav_slug = convertToSlug( replaceAccents( category.name ) );
			sub_nav += '<a class="[ inline-block ][ menu__item ] href="#">'+subcat.name+'</a>';
		});
		sub_nav += '</div></div>';
		$('header').append(sub_nav);
	});
}// fillMenuCategories

function showElement( element ){
	$(element).toggleClass('opened');
}

function openSubNav( clicked ){
	$('.sub-nav.'+clicked).addClass('opened');
}

function closeSubNav(){
	$('.sub-nav').removeClass('opened');
}

function getUrlParameter(sParam){
	var sPageURL = window.location.search.substring(1);
	var sURLVariables = sPageURL.split('&');
	for (var i = 0; i < sURLVariables.length; i++)
	{
		var sParameterName = sURLVariables[i].split('=');
		if (sParameterName[0] == sParam)
		{
			return sParameterName[1];
		}
	}
}

function showColorOptions(){
	$('.modal-wrapper').removeClass('hide');
}

//Colores


/**
 * Sets data-color attribute of product image
 * @param string pallete - Name of the chosen color pallete
**/
function setProductImgColor( pallete ){
	var palleteColors = getPalleteColors( pallete );
	var numPalleteColors = palleteColors.length;
	var currentColor = 0;
	var products = $('.product-grid li a');

	$.each( products, function(i, product){
		if ( currentColor == numPalleteColors ) {
			currentColor = 0;
		}
		$(product).find('img').attr( 'data-color', palleteColors[currentColor] );
		currentColor++;

	});
}// setProductImgColor

/**
 * Gets the array of colors of a given pallete
 * @param string pallete - Name of the color pallete
 * @return array colors - Colors of the pallete
**/
function getPalleteColors( pallete ){
	var classy = [ '000', 'fff' ];
	var neon = [ 'fc282f', '0069b1', '8dfdf0', '35f776', 'fffb00' ];
	var pastel = [ '0a7ca9', '63b1d6', 'a9fefe', 'fed4cc', 'd8696d' ];
	var cold = [ '84bcff', '738192', 'cae1ff', '486a93', 'a9bdd6' ];
	var warm = [ 'fc5149', 'f28d67', 'f17a59', 'fc483a', 'a61600' ];

	switch( pallete ){
		case 'classy':
			return classy;
		case 'neon':
			return neon;
		case 'pastel':
			return pastel;
		case 'cold':
			return cold;
		default:
			return warm;
	}
}// getPalleteColors

/**
 * Sets data-color attribute of product image
 * @param string pallete - Name of the chosen color pallete
**/
function removeDataColor( pallete ){
	var products = $('.product-grid li a');

	$.each( products, function(i, product){
		$(product).find('img').removeData( 'color' );
	});
}// removeDataColor

/**
 * Closes Modal
 * @param element to be closed
**/
function closeModal(){
	$('.modal-wrapper').addClass('hide');
}

/**
 * Replace accents in a given text.
 * @param {String} text
 * @return {String} text with replaced accents
 */
function replaceAccents( text ){
	var charAccentMap = {á:'a',é:'e',í:'i',ó:'o',ú:'u',Á:'A',É:'E',Í:'I',Ó:'O',Ú:'U',};

	var text_array = text.split('');
	for( var i = 0, len = text_array.length; i < len; i++ ) {
		text_array[ i ] = charAccentMap[ text_array[ i ] ] || text_array[ i ];
	}

	return text_array.join('');
}// replaceAccents

/**
* Converts a given text to a Web URL friendly text
* @param {String} text
* @return {String} slug
*/
function convertToSlug( text ) {
var slug = text.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
	return slug;
}// convertToSlug

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
		//console.log(opcionesCompra);
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