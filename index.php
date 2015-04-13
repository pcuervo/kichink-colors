<?php
	$site_url 				= 'http://www.airesdecampo.com/tienda/';
	$store 					= new stdClass();
	$item 					= new stdClass();
	$store->id 				= 3829;
	$store->color 			= '#e22119';
	//Mi tu 				= 148
	//Tony Delfinos 		= 3829
	$store->name 			= "ALEXIA ULIBARRI";
	$store->description 	= "Simona FW14";
	$store->logo 			= "images/logo-tienda.jpg";
	$store->cover 			= "images/cover-tienda.jpg";
	$lang = 'es';
	$hasSession = true;

	//info de los meta:og
	$og_title = $store->name." - Kichink!";
	$og_description = "Simona FW14";
	$og_url = "http://htmls.kichink.com/";
	$og_images = array("images/logo-tienda.jpg");


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

		<!-- Google Fonts -->
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
	<body class="[ body-home ]">
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="[ container ]">
			<header class="[ ]">
				<h1 class="[ ]">
					<a href="/">
						<img class="[ logo ][ center ]" data-color="E22119" src="#" alt="" title="Inicio" />
					</a>
				</h1>
				<nav class="[ ]">
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
				</nav>
			</header>
			<div class="[ main ]">
				<section class="[ cover ]">
					<div class="[ opacity--full opacity--30 ][ logo-color ]" style="background-color: <?php echo $store->color; ?>"></div>
					<div class="[ store__info ][ center-full ][ xmall-12 text-center ]">
						<h2 class="[ store-name ]"></h2>
						<h3 class="[ store-description ]"></h3>
					</div><!-- store__info -->
				</section><!-- cover -->

				<section class="[ products ]">
					<ul class="[ product-grid ][ no-margin no-padding ][ hidden--xmall ]"></ul>
					<ul class="[ fake-product-grid ][ no-margin no-padding ]">
						<li id="item-543124" data-id="543124" class="item resizable">
							<a href="/buy/543124">
								<div class="ribbon">Nuevo</div>
								<img data-color="242426" nopin="nopin" src="images/negro.jpg" width="100%">
								<div class="items-data ">
									<div class="items-name">Leonor Plata</div>
									<div class="items-price">$ 780.00</div>
								</div>
							</a>
						</li>
						<li id="item-543124" data-id="543124" class="item resizable">
							<a href="/buy/543124">
								<div class="ribbon">Nuevo</div>
								<img data-color="612C37" nopin="nopin" src="images/vino.jpg" width="100%">
								<div class="items-data ">
									<div class="items-name">Leonor Plata</div>
									<div class="items-price">$ 780.00</div>
								</div>
							</a>
						</li>
						<li id="item-543124" data-id="543124" class="item resizable">
							<a href="/buy/543124">
								<div class="ribbon">Nuevo</div>
								<img data-color="E07383" nopin="nopin" src="images/rosa.jpg" width="100%">
								<div class="items-data ">
									<div class="items-name">Leonor Plata</div>
									<div class="items-price">$ 780.00</div>
								</div>
							</a>
						</li>
					</ul><!-- product-grid -->
				</section><!-- products -->
			</div><!-- main -->
		</div><!-- container -->
		<div class="[ clear ]"></div>
		<footer>
			<div class="[ wrapper ]">
				<h2 class="[ text-center ]">Comparte esta tienda</h2>
				<ul class="[ rrssb-buttons ][ clearfix ][ margin-bottom--small ]">
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
				<p class="[ text-center ]">Esta tienda en línea está protegida y encriptada con SSL de 256 bits y es operada por<img class="[ align-middle ]" src="https://www.kichink.com/v2/themes/img/logo_powered_by_kichink.png" alt=""></p>
				<div class="[ text-center ]">
					<a class="[ inline-block ]" href="#">Términos y condiciones</a>
					<a class="[ inline-block ]" href="#">Políticas de privacidad</a>
				</div>
			</div>
		</footer>

		<!-- Scripts de Kichink! -->
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//www.kichink.com/v2/themes/js/loginForm.js"></script>
		<script type="text/javascript" src="//www.kichink.com/v2/themes/js/searchbox.js"></script>
		<script type="text/javascript" src="//www.kichink.com/v2/themes/js/gridProdukts.js?v=<?= @$v ?>"></script>
		<script type="text/javascript" src="//www.kichink.com/v2/themes/js/shoppingkart.js?v=<?= @$v ?>"></script>
		<script type="text/javascript" src="//www.kichink.com/js/jquery.callapi.js"></script>
		<script type="text/javascript" src="//www.kichink.com/assets_verticales/js/ajaxq.jquery.js"></script>
		<script type="text/javascript" src="//www.kichink.com/v2/themes/js/smoothprodukts.js"></script>


		<!-- Scripts Colors Theme -->
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>

		<script>
			$(document).ready(function(){

				// Carga carrito dinámicamente
				$(".cart").ShoppingKart({
					text: '<i class="icon-cart"></i>',
					store_id: '<?= @$store->id ?>',
					button: "#buy_button",
					placement: "right",
					checkoutURI: "https://www.kichink.com/checkout",
					showOnPurchase: true,
				});

				// Carga productos dinámicamente
				$(".product-grid").GridProdukts({
					store_id: '<?= @$store->id ?>',
					limit: 12,
					pagination: "scroll",
					remoteURI:"https://www.kichink.com",
					onSuccess: itemsExist
				});

				// $(".js-login").LoginForm({
				// 	lang: 'en',
				// 	username: 'Roberto Romero',
				// 	hasSession: true,
				// 	type: 		'button'
				// });

				$.ajax({
					type: "POST",
					data: {
						store_id: '<?= @$store->id ?>'
					},
					url: "https://www.kichink.com/api/stores/get_store_details",
					success: function(data) {
						var ajax_request = jQuery.parseJSON(data.toString());
						fillStoreDetails(ajax_request.data.name, ajax_request.data.description, ajax_request.data.logo, ajax_request.data.header);
						fillMenuCategories(ajax_request.data.categories);
					}
				});

			});
		</script>






		<script>
			$(document).ready( function() {

				<!-- /********************************\ -->
					<!-- #ON LOAD -->
				<!-- \********************************/ -->

				applyColor('.fake-product-grid .item img', '.fake-product-grid .item');







				<!-- /********************************\ -->
					<!-- #Triggered events -->
				<!-- \********************************/ -->
				$('.js-lang').on('click', function(){
					changeLang('en');
				});


			});
		</script>
	</body>
</html>