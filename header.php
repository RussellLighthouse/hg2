<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?>  prefix="og: http://ogp.me/ns#"class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#" class="no-js lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#" class="no-js lt-ie10" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // Google Chrome Frame for IE ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	
	<?php /* <meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png"> */ ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
	
	<script>try{Typekit.load();}catch(e){}</script>
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	    
	<script type="text/javascript">
	  function initialize() {
		  
		<?php if(is_page('berlin')) : ?>
		
	        var mapOptions = {
	          center: { lat: 52.522475, lng: 13.409482},
	          zoom: 10
	        };
	        
	        var map = new google.maps.Map(document.getElementById('map-canvas'),
		            mapOptions);
		     }
        
        <?php else : ?>
        
        	var myLatlng = new google.maps.LatLng(52.5096032,13.3767279);
        	
        	var mapOptions = {
			    zoom: 16,
			    center: myLatlng
			}
			
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
	        var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map,
			      title: 'The Venue'
			});
			
			var contentString = '<ul style="margin:0; font-size: 12px;"><li>Riverbank House</li><li>1 Putney Bridge Approach</li><li>Fulham</li><li>SW6 3JD</li></ul>';
			
			var infowindow = new google.maps.InfoWindow({
			    content: contentString,
			    maxWidth: 200
			});
	        
	        google.maps.event.addListener(marker, 'click', function() {
			    infowindow.open(map,marker);
			});
			
		}
			
        <?php endif; ?>
        
      google.maps.event.addDomListener(window, 'load', initialize);
      
	</script>
	
</head>

<body <?php body_class(); ?>>
	
<header class="header">
	<div class="container grid4">
	
	<h1 class="logo col1"><a href="/">Hg2</a> <span class="the-hedonist">: <a href="/blog/" class="hedonist">The Hedonist</a></span></h1>
	
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false,  'container_class' => false, 'depth' => 1, 'items_wrap'      => '<ul class="menu col2">%3$s</ul>')); ?>
	
	<?php if (!is_page('destinations')) : ?>
	
	<nav class="destinations-menu">
		
		<figure class="icon close-menu">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/close-x.svg" alt="Close This Menu" />
		</figure>
		
		<ul>
			<li class="showing"><span class="continent">Africa</span>
				<ul>
				<li><a href="/berlin">Cape Town</a></li>
				<li><a href="/berlin">Johannesburg</a></li>
				<li><a href="/berlin">Marrakech</a></li>
				</ul>
			</li>
			<li><span class="continent">Asia</span>
				<ul>
				<li><a href="/berlin">Almaty</a></li>
				<li><a href="/berlin">Astana</a></li>
				<li><a href="/berlin">Baku</a></li>
				<li><a href="/berlin">Beijing</a></li>
				<li><a href="/berlin">Beirut</a></li>
				<li><a href="/berlin">Damascus &amp; Aleppo</a></li>
				<li><a href="/berlin">Dubai</a></li>
				<li><a href="/berlin">Mumbai</a></li>
				<li><a href="/berlin">Telaviv</a></li>
				<li><a href="/berlin">Tokyo</a></li>
				</ul>
			</li>
			<li><span class="continent">Australia</span>
				<ul class="few">
				<li><a href="/berlin">Sydney</a></li>
				</ul>
			</li>
			<li><span class="continent">Europe</span>
				<ul>
				<li><a href="/berlin">Amsterdam</a></li>
				<li><a href="/berlin">Barcelona</a></li>
				<li><a href="/berlin">Berlin</a></li>
				<li><a href="/berlin">Istanbul</a></li>
				<li><a href="/berlin">Lisbon</a></li>
				<li><a href="/berlin">London</a></li>
				<li><a href="/berlin">Madrid</a></li>
				<li><a href="/berlin">Milan</a></li>
				<li><a href="/berlin">Moscow</a></li>
				<li><a href="/berlin">Paris</a></li>
				<li><a href="/berlin">Prague</a></li>
				<li><a href="/berlin">Rome</a></li>
				<li><a href="/berlin">Stockholm</a></li>
				<li><a href="/berlin">Tallinn</a></li>
				<li><a href="/berlin">Zurich</a></li>
				</ul>
			</li>
			<li><span class="continent">North America</span>
				<ul>
				<li><a href="/berlin">Las Vegas</a></li>
				<li><a href="/berlin">Los Angeles</a></li>
				<li><a href="/berlin">Miami</a></li>
				<li><a href="/berlin">New Orleans</a></li>
				<li><a href="/berlin">New York</a></li>
				<li><a href="/berlin">San Francisco</a></li>
				<li><a href="/berlin">Toronto</a></li>
				</ul>
			</li>
			<li><span class="continent">South America</span>
				<ul class="few">
				<li><a href="/berlin">Bogota</a></li>
				<li><a href="/berlin">Buenos Aires</a></li>
				</ul>
			</li>
			<li><span class="continent">Ski</span>
				<ul>
				<li><a href="/berlin">Chamonix</a></li>
				<li><a href="/berlin">Courchevel</a></li>
				<li><a href="/berlin">La Grave</a></li>
				<li><a href="/berlin">Megeve</a></li>
				<li><a href="/berlin">Monte Rosa</a></li>
				<li><a href="/berlin">St. Moritz</a></li>
				<li><a href="/berlin">Tignes</a></li>
				<li><a href="/berlin">Val d'Isere</a></li>
				<li><a href="/berlin">Verbier</a></li>
				<li><a href="/berlin">Zermatt</a></li>
				</ul>
			</li>
		</ul>
	</nav><!-- .destinations-menu -->
	
	<?php endif; ?>

	<form action="http://hg2.localhost/" class="search-form col3" id="searchform" method="get" role="search">
		<input type="text" id="s" name="s" value="" placeholder="Search&hellip;">
	</form>
		
	</div>
</header>