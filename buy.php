<?php
	$item_id = $_GET["id"];
	$store 					= new stdClass();
	$store->id 				= 18609;
	$store->name 			= "ALEXIA ULIBARRI";
	$store->description 	= "Simona FW14";
	$store->logo 			= "images/logo-tienda.jpg";
	$store->cover 			= "images/cover-tienda.jpg";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<title></title>
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="style.css">
		<meta name="description" content="<?php echo $og_description; ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Metas para compartir -->
		<meta property="og:title" content="<?php echo $og_title; ?>" />
		<meta property="og:description" content="<?php echo $og_description; ?>" />
		<meta property="og:url" content="<?php echo $og_url; ?>"/>
		<meta property="og:site_name" content="<?php echo $store->name; ?> - Kichink!"/>
		<meta property="og:image" content="<?php echo $og_images; ?>" />

		<!-- CDNs -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>

		<!-- Lo requiere Kichink! -->
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/searchbox.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/shoppingcart.css" />
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/login.css" />
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/smoothprodukts.css" />

		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

		<!-- -->
		<!-- #Typekit code goes here -->
		<!-- -->
		<script src="//use.typekit.net/cco3wfo.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
	</head>
	<body class="[ body-single ]">
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div id="item-container" class="[ container ]">
			<header class="[ ]">
				<h1 class="[ ]">
					<a href="/">
						<img class="[ logo ][ center ]" data-color="E22119" src="#" alt="" title="Inicio" />
					</a>
				</h1>
				<nav class="[ ]">
					<div class="[ overflow-holder ]">
						<a href="/" class="[ active ][ inline-block ][ menu__item ]">
							Todos
						</a><a href="/" class="[ inline-block ][ menu__item ]">
							Bottom
						</a><a href="/" class="[ inline-block ][ menu__item ]">
							Tops
						</a><a href="/" class="[ inline-block ][ menu__item ]">
							Footwear
						</a><a href="/" class="[ inline-block ][ menu__item ]">
							Shirts
						</a><a href="/" class="[ inline-block ][ menu__item ]">
							Misc
						</a><a href="/" class="[ inline-block ][ menu__item ]">
							Sweatshirts
						</a><!-- <div class="[ columna xmall-6 ][ ][ text-right ][ menu__item ][ cart ]">
							<a href="#" class="[ js-lang ]">
								<i class="[ icon-lang ]"></i>
							</a>
							<a href="#" class="[ js-login ]">
								<i class="[ icon-login ]"></i>
							</a>
							<a href="mailto:soporte@kichink.com" class="">
								<i class="[ icon-help ]"></i>
							</a>
						</div> -->
					</div><!-- overflow-holder -->
				</nav>
			</header>
			<div class="[ main ]" style="background-color: #e07383 <?php //echo $item->color; ?>; color: #fff">
				<div class="[ wrapper ]">
					<div class="[ product__info--name ]">
						<h2 class="[ text-center ] [ js-title ]"></h2>
					</div><!-- product__info--name -->
					<div class="[ product__info--price ]">
						<h2 class="[ text-center ][ js-precio ]"></h2>
					</div><!-- product__info--price -->
					<section class="[ images-container ][ text-center ][ responsive-images ][ js-images-container ]">
					</section><!-- slider -->
					<section class="[ product__info ]">
						<article class="[ product__buy ][ margin-bottom--large ][ text-center ][ shown--small ]">
							<p class="[ margin-bottom--small ]"><small>Compra segura con <a class="[ inline-block ]" href="#">Garantía Kichink!</a></small></p>
							<h2 class="[ margin-bottom ]">$1,200</h2>
							<a href="#" class="[ inline-block ][ button button--large button--light ]" id="buy_buton" data-id="<?php echo $item_id ?>" style="color: #e07383" >Lo quiero</a>
						</article>
						<article class="[ row ][ margin-bottom ]" id="item-detail">
							<h2 class="">Descripción</h2>
							<div class="[ product__info--description ] [ description ] [ columna xmall-12 ]">
								<p class="[  ]"></p>
							</div><!-- product__info--price -->
						</article>
						<article class="[ product__options ][ margin-bottom ]">
							<h2 class="[ opcioncompra ]">Opciones de compra</h2>
							<div class="[ row ]">
								<fieldset class="[ columna xmall-12 medium-6 ][ margin-bottom ]">
									<label for="talla" class="[ margin-bottom--small ]">Talla</label><br />
									<select name="talla" id="talla" class="[ custom-select ]">
										<option value="xs">XS</option>
										<option value="s">S</option>
										<option value="m">M</option>
										<option value="l">L</option>
										<option value="xl">XL</option>
									</select>
								</fieldset>
								<fieldset class="[ columna xmall-12 medium-6 ][ margin-bottom ]">
									<label for="cantidad" class="[ margin-bottom--small ]">Cantidad</label><br />
									<select name="cantidad" id="cantidad" class="[ custom-select ]">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</fieldset>
							</div><!-- row -->
						</article>
						<article class="[ product__extra ] [ row ][ margin-bottom ]">
							<h2 class="">Información adicional</h2>
							<!-- <p class="[ text-cente">Disponibilidad</p> -->
							<p class="[ js-disponibilidad ]"></p>
							<!-- <p class="[ text-cente">Formas de pago</p> -->
							<p class="">Tarjeta de crédito y efectivo</p>
						</article>
						<article class="[ product__buy ][ margin-bottom--large ][ text-center ][ shown--small ]">
							<p class="[ margin-bottom--small ]"><small>Compra segura con <a class="[ inline-block ]" href="#">Garantía Kichink!</a></small></p>
							<h2 class="[ margin-bottom ]">$1,200</h2>
							<a href="#" class="[ inline-block ][ button button--large button--light ]" id="buy_buton" data-id="<?php echo $item_id ?>" style="color: #e07383" >Lo quiero</a>
						</article>
						<article>
							<ul class="[ rrssb-buttons ][ no-margin ][ clearfix ]">
								<li class="rrssb-facebook">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $site_url; ?>" class="popup">
										<span class="rrssb-icon">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
												<path d="M27.825,4.783c0-2.427-2.182-4.608-4.608-4.608H4.783c-2.422,0-4.608,2.182-4.608,4.608v18.434
													c0,2.427,2.181,4.608,4.608,4.608H14V17.379h-3.379v-4.608H14v-1.795c0-3.089,2.335-5.885,5.192-5.885h3.718v4.608h-3.726
													c-0.408,0-0.884,0.492-0.884,1.236v1.836h4.609v4.608h-4.609v10.446h4.916c2.422,0,4.608-2.188,4.608-4.608V4.783z"/>
											</svg>
										</span>
										<span class="rrssb-text">facebook</span>
									</a>
								</li>

								<li class="rrssb-twitter">
									<!-- Replace href with your Meta and URL information  -->
									<a href="http://twitter.com/home?status=<?php echo $store->name.' - Kichink! '.$site_url; ?>" class="popup">
										<span class="rrssb-icon">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
											<path d="M24.253,8.756C24.689,17.08,18.297,24.182,9.97,24.62c-3.122,0.162-6.219-0.646-8.861-2.32
												c2.703,0.179,5.376-0.648,7.508-2.321c-2.072-0.247-3.818-1.661-4.489-3.638c0.801,0.128,1.62,0.076,2.399-0.155
												C4.045,15.72,2.215,13.6,2.115,11.077c0.688,0.275,1.426,0.407,2.168,0.386c-2.135-1.65-2.729-4.621-1.394-6.965
												C5.575,7.816,9.54,9.84,13.803,10.071c-0.842-2.739,0.694-5.64,3.434-6.482c2.018-0.623,4.212,0.044,5.546,1.683
												c1.186-0.213,2.318-0.662,3.329-1.317c-0.385,1.256-1.247,2.312-2.399,2.942c1.048-0.106,2.069-0.394,3.019-0.851
												C26.275,7.229,25.39,8.196,24.253,8.756z"/>
											</svg>
										</span>
										<span class="rrssb-text">twitter</span>
									</a>
								</li>

								<li class="rrssb-tumblr">
									<a href="http://tumblr.com/share?s=&amp;v=3&t=<?php echo $store->name.' - Kichink! '; ?>&amp;u=<?php echo $site_url; ?>">
										<span class="rrssb-icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"><path d="M18.02 21.842c-2.029 0.052-2.422-1.396-2.439-2.446v-7.294h4.729V7.874h-4.71V1.592c0 0-3.653 0-3.714 0 s-0.167 0.053-0.182 0.186c-0.218 1.935-1.144 5.33-4.988 6.688v3.637h2.927v7.677c0 2.8 1.7 6.7 7.3 6.6 c1.863-0.03 3.934-0.795 4.392-1.453l-1.22-3.539C19.595 21.6 18.7 21.8 18 21.842z"/></svg>
										</span>
										<span class="rrssb-text">tumblr</span>
									</a>
								</li>

								<li class="rrssb-pinterest">
									<!-- Replace href with your meta and URL information.  -->
									<a href="http://pinterest.com/pin/create/button/?url=<?php echo $store->name.' - Kichink!'; ?>&amp;media=<?php echo $site_url.$store->logo; ?>&amp;description=<?php echo $store->description; ?>">
										<span class="rrssb-icon">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
											<path d="M14.021,1.57C6.96,1.57,1.236,7.293,1.236,14.355c0,7.062,5.724,12.785,12.785,12.785c7.061,0,12.785-5.725,12.785-12.785
												C26.807,7.294,21.082,1.57,14.021,1.57z M15.261,18.655c-1.161-0.09-1.649-0.666-2.559-1.219c-0.501,2.626-1.113,5.145-2.925,6.458
												c-0.559-3.971,0.822-6.951,1.462-10.116c-1.093-1.84,0.132-5.545,2.438-4.632c2.837,1.123-2.458,6.842,1.099,7.557
												c3.711,0.744,5.227-6.439,2.925-8.775c-3.325-3.374-9.678-0.077-8.897,4.754c0.19,1.178,1.408,1.538,0.489,3.168
												C7.165,15.378,6.53,13.7,6.611,11.462c0.131-3.662,3.291-6.227,6.46-6.582c4.007-0.448,7.771,1.474,8.29,5.239
												c0.579,4.255-1.816,8.865-6.102,8.533L15.261,18.655z"/>
											</svg>
										</span>
										<span class="rrssb-text">pinterest</span>
									</a>
								</li>

								<li class="rrssb-pocket">
									<a href="https://getpocket.com/save?url=<?php echo $site_url; ?>">
										<span class="rrssb-icon">
											<svg width="32px" height="28px" viewBox="0 0 32 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
												<path d="M28.7817528,0.00172488695 C30.8117487,0.00431221738 31.9749312,1.12074529 31.9644402,3.10781507 C31.942147,6.67703739 32.1336065,10.2669583 31.8057648,13.8090137 C30.7147076,25.5813672 17.2181194,31.8996281 7.20714461,25.3808491 C2.71833574,22.4571656 0.196577202,18.3122624 0.0549495772,12.9357897 C-0.0342233715,9.5774348 0.00642900214,6.21519891 0.0300336062,2.85555035 C0.0405245414,1.1129833 1.21157517,0.0146615391 3.01995012,0.00819321302 C7.34746087,-0.00603710433 11.6775944,0.00431221738 16.0064164,0.00172488695 C20.2644248,0.00172488695 24.5237444,-0.00215610869 28.7817528,0.00172488695 L28.7817528,0.00172488695 Z M8.64885184,7.85611511 C7.38773662,7.99113854 6.66148108,8.42606978 6.29310958,9.33228474 C5.90114134,10.2969233 6.17774769,11.1421181 6.89875951,11.8276216 C9.35282156,14.161969 11.8108164,16.4924215 14.2976518,18.7943114 C15.3844131,19.7966007 16.5354102,19.7836177 17.6116843,18.7813283 C20.0185529,16.5495467 22.4070683,14.2982907 24.7824746,12.0327533 C25.9845979,10.8850542 26.1012707,9.56468083 25.1469132,8.60653379 C24.1361858,7.59255976 22.8449191,7.6743528 21.5890476,8.85191291 C19.9936451,10.3488554 18.3680912,11.8172352 16.8395462,13.3777945 C16.1342655,14.093159 15.7200114,14.0048744 15.0566806,13.3440386 C13.4599671,11.7484252 11.8081945,10.2060421 10.1262706,8.70001155 C9.65564653,8.27936164 9.00411403,8.05345704 8.64885184,7.85611511 L8.64885184,7.85611511 L8.64885184,7.85611511 Z"></path>
											</svg>
										</span>
										<span class="rrssb-text">pocket</span>
									</a>
								</li>
							</ul>
						</article>
					</section><!-- product__info -->
				</div><!-- wrapper -->
			</div><!-- main -->
		</div><!-- container -->
		<footer class="[ shown--small ]">
			<div class="[ wrapper ]">
				<p class="[ text-center ]">Esta tienda en línea está protegida y encriptada con SSL de 256 bits y es operada por<img class="[ align-middle ]" src="https://www.kichink.com/v2/themes/img/logo_powered_by_kichink.png" alt=""></p>
				<div class="[ text-center ]">
					<a class="[ inline-block ]" href="#">Términos y condiciones</a>
					<a class="[ inline-block ]" href="#">Políticas de privacidad</a>
				</div>
			</div>
		</footer>
	</body>

	<!-- scripts de Kichink! -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//www.kichink.com/v2/themes/js/loginForm.js"></script>
	<script type="text/javascript" src="//www.kichink.com/v2/themes/js/searchbox.js"></script>
	<script type="text/javascript" src="//www.kichink.com/v2/themes/js/gridProdukts.js?v=<?= @$v ?>"></script>
	<script type="text/javascript" src="//www.kichink.com/v2/themes/js/shoppingkart.js?v=<?= @$v ?>"></script>
	<script type="text/javascript" src="//www.kichink.com/js/jquery.callapi.js"></script>
	<script type="text/javascript" src="//www.kichink.com/assets_verticales/js/ajaxq.jquery.js"></script>
	<script type="text/javascript" src="//www.kichink.com/v2/themes/js/smoothprodukts.js"></script>


	<!-- Scripts Fashion Theme -->
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>

	<!-- /********************************\ -->
		<!-- #ON LOAD -->
	<!-- \********************************/ -->
	<script>
		$(document).ready(function() {
			var store_id = <?php echo $store->id; ?>;
			var item_id = <?php echo $item_id; ?>;

			$.ajax({
				type: "POST",
				data: {
					store_id: store_id,
					limit: 1,
					item_id: item_id,
					offset: 0
				},
				url: "https://www.kichink.com/api/stores/get_store_items",
				success: function(data) {
					$("#loading-items").hide();
					var ajax_request = jQuery.parseJSON(data.toString());
					console.log(ajax_request.data[0]);
					fillSlideshow(ajax_request.data[0].images);
					load_item(ajax_request.data[0], false);
					mostrarDisponibilidad(ajax_request.data[0].disponibilidad[0]);
				}
			});

			// Carga carrito dinámicamente
			$(".cart").ShoppingKart({
				text: '<i class="icon-cart"></i>',
				store_id: '<?= @$store->id ?>',
				button: "#buy_button",
				placement: "right",
				checkoutURI: "https://www.kichink.com/checkout",
				showOnPurchase: true,
			});
		});

		itemsExist();
		$('.custom-select').customSelect();

		$.ajax({
			type: "POST",
			data: {
				store_id: '<?= @$store->id ?>'
			},
			url: "https://www.kichink.com/api/stores/get_store_details",
			success: function(data) {
				var ajax_request = jQuery.parseJSON(data.toString());
				console.log(ajax_request);
				fillStoreDetails(ajax_request.data.name, ajax_request.data.description, ajax_request.data.logo, ajax_request.data.header);
				fillMenuCategories(ajax_request.data.categories);
			}
		});

		function load_item(data, animated) {
			if (data != undefined) {
				v = window.location.pathname.split("/");
				var time = 1000;
				$("#item-container").show();
				var store_name = (v[1] == "buy") ? v[3] : v[2];

				if (!animated) {
					time = 0;
				} else {
					$("#items").fadeOut("slow");
					//$("#categories").fadeOut("slow");
					if ($("#menu-shopping").width() < $(".container").width())
						$("#menu-shopping").fadeOut();
					document.title = store_name.charAt(0).toUpperCase() + store_name.slice(1) + ": " + data.name;
					window.history.replaceState({}, '', "/buy/" + data.id + "/" + store_name + window.location.search);
				}

				$("#item-container").find("#buy_button").data("id", data.id);
				$("#item-container").find("#buy_button").removeClass("disabled");
				$("#item-container #preview").find(".ribbon").remove();
				if (data.ribbon) {
					if (data.ribbon == "vendido") {
						$("#item-container").find("#buy_button").addClass("disabled");
					}
					if (data.ribbon == "ultimos articulos") {
						if (parseInt(data.units_available) <= parseInt(data.ultimos_inventarios)) {
							$("#item-container #preview").append("<div class='ribbon'>" + data.ribbon + "</div>");
						}
					} else {
						$("#item-container #preview").append("<div class='ribbon'>" + data.ribbon + "</div>");
					}
				}

				if (data.sku) {
					$(".sku-item").show();
					$(".sku-item .sku").html(data.sku);
				}

				if (data.display_options) {
					for (var x in data.display_options) {
						$(".options table").append('<tr><td width="50%">' + data.display_options[x].option_name + '</td><td width="50%">' + data.display_options[x].option_values + '</td></tr>');
					}
				}

				$(".myownbanner").hide();

				$('.js-title').html(data.name);

				var val = $("#item-container").find(".description p").html(data.description);

				if (!data.description)
					$("#item-container").find(".description").hide();
				else
					$("#item-container").find(".description").show();


				var aplicar_descuento = (parseInt(data.discount) > 0) ? (parseFloat(data.price) - parseFloat(data.discount_price)).toFixed(2) : data.price;

				var p = aplicar_descuento.toString();
				var precio = p.split(".");
				//console.log(precio)
				$("#item-container").find(".js-precio").html("$" + precio[0].toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "." + "<sup>" + precio[1] + "</sup>");

				if (parseInt(data.discount) > 0) {
					precio = data.price.toString().split(".");
						$("#item-container").find(".js-precio").append("<div class='discount'><p>Precio Regular</p><span class='items-price'>$" + precio[0].toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "." + precio[1] + "</span></div>");
				}

				var disp = "Art&iacute;culo no disponible";
				switch (data.disponibilidad[0].type) {
					case "ava_inme":
					{
						disp = "Disponible inmediatamente";
						break;
					}
					case "ava_date":
					{
						disp = "Disponible a partir de " + data.disponibilidad[0].value + " d&iacute;as";
						break;
					}
					default:
					{
						disp = "Disponible en " + data.disponibilidad[0].value + " d&iacute;as";
						break;
					}
				}

				if (data.purchase_options.length > 0) {
					if (data.purchase_options[0].length > 0) {
						$(".opcioncompra").show();
						for (var it in data.purchase_options[0]) {
							$(".opcioncompra #opc").append('<label data-label="' + data.purchase_options[0][it].label.toLowerCase() + '" class="[ boton ] ' + ((data.purchase_options[0][it].units > 0) ? "" : "disabled") + '"><input type="radio" ' + ((data.purchase_options[0][it].units > 0) ? "" : "disabled") + ' name="options" id="option1" value="' + data.purchase_options[0][it].po_label + '">' + data.purchase_options[0][it].label + '</label>');
						}
					}
				} else {
					$(".opcioncompra").hide();
				}

				$("#opc").find("label").each(function(i, e) {
					if (!$(e).hasClass("disabled")) {
						$(e).click(function() {
							$("#opc").find("label[data-label!='" + $(e).data().label + "']").removeClass("active");
							$(e).toggleClass("active");
							$("#buy_button").data("purchase_option", $("#opc").find("label.active input[type=radio]").val());
						});
					}
				});

				$("#item-container").find("#item-detail .disponibilidad").html(disp);

				if (parseInt(data.units_availible) == 1)
					$("#item-container").find("#item-detail .unico").show();
				else
					$("#item-container").find("#item-detail .unico").hide();

				if (parseInt(data.physical) != 1)
					$("#item-container").find("#item-detail .digital").show();
				else
					$("#item-container").find("#item-detail .digital").hide();

				if (data.images.length > 0)
					if (data.images[0].bordered != undefined)
						$("#item-container").find("a.fb").attr("href", "https://www.facebook.com/sharer/sharer.php?u=https://www.kichink.com/buy/" + data.id + "&t=" + store_name + ": " + data.name + "&i=" + data.images[0].bordered);

				$("#item-container").find("a.tw").attr("href", "https://twitter.com/intent/tweet?hashtags=Kichink,ILoveOnlineShopping&text=He%20visto%20" + data.name + "%20en%20" + store_name + "&url=https://www.kichink.com/buy/" + data.id);
				$('.sp-wrap').Smoothprodukts({
					data: data,
					type: "transition"
				});

				$("#item-container").animate({bottom: 0}, time, function() {});
			}
		}

		function strip_tags(input, allowed) {
			allowed = (((allowed || '') + '')
				.toLowerCase()
				.match(/<[a-z][a-z0-9]*>/g) || [])
				.join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
							var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
							commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
			return input.replace(commentsAndPhpTags, '')
					.replace(tags, function($0, $1) {
						return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
					});
		}

		function close_item_container(animated) {
			$("#item-container").find("#thumb").attr("src", "");
			animated = (animated) ? animated : false;
			v = window.location.pathname.split("/");
			store_name = (v[1] == "buy") ? v[3] : v[2];
			window.history.replaceState({}, '', "/stores/" + store_name + window.location.search);
			document.title = store_name;
			if (animated) {
				$("#item-container").animate({bottom: -1170}, 500, function() {
					$("#item-container").hide();
					$("#categories").fadeIn(500);
					$(".myownbanner").show();
					$("#items").fadeIn(500);
					if ($("#menu-shopping").width() < $(".container").width()) {
						$("#menu-shopping").fadeIn(500);
					}
				});
			} else {
				$("#item-container").css("bottom", -1170);
				$("#item-container").hide();
				$(".myownbanner").show();
				$("#categories").fadeIn(500);
				$("#items").fadeIn(500);
				if ($("#menu-shopping").width() < $(".container").width()) {
					$("#menu-shopping").fadeIn(500);
				}
			}
		}


		function msieversion() {
			var ua = window.navigator.userAgent;
			var msie = ua.indexOf("MSIE ");

			if (msie > 0)      // If Internet Explorer, return version number
				return(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
			else                 // If another browser, return 0
				return 100;

			return 0;
		}
	</script>

</html>