<?php
/*
Template Name: Destination
*/
?>

<?php get_header(); ?>

<div class="container all larger">

<article class="magazine">

<?php
		
	while ( have_posts() ) : the_post() ?>
	
	
	<p class="page-title"><a href="#">The Hedonist</a></p>

<div class="hedonist-menu-download-app grid3">
	<nav class="hedonist-menu col col1">
		<ul>
			<li class="menu"><a href="#">Categories</a>
				<ul>
				<li><a href="#">Hg2 News</a></li>
				<li><a href="#">Lifestyle</a></li>
				<li><a href="#">Insiders</a></li>
				<li><a href="#">Food &amp; Drink</a></li>
				<li><a href="#">Travel</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	
	<a href="#" class="download-app col col2">Get our App</a>
</div>
	
	<?php /* <a href="#" class="download-app">Get our App</a> */ ?>
	
	<?php
	endwhile;
	?>
	
	<?php /* <nav class="filter-menu">
		<ul>
			<li class="menu"><a href="#">Filter Results</a>
			
				<ul>
				<li>
				<label for="filter-destination">Destination</label>
				<select id="filter-destination">
					<optgroup label="Africa">
						<option>Cape Town</option>
						<option>Johannesburg</option>
						<option>Marrakech</option>
					</optgroup>
					
					<optgroup label="Asia">
						<option>Almaty</option>
						<option>Astana</option>
						<option>Baku</option>
						<option>Beijing</option>
						
						<option>Beirut</option>
						<option>Damascus &amp; Aleppo</option>
						<option>Dubai</option>
						<option>Mumbai</option>
						<option>Telaviv</option>
						<option>Tokyo</option>
					</optgroup>
					
					<optgroup label="Australia">
						<option>Sydney</option>
					</optgroup>
					
					<optgroup label="Europe">
						<option>Amsterdam</option>
						<option>Barcelona</option>
						<option>Berlin</option>
						<option>Istanbul</option>
						<option>Lisbon</option>
						<option>London</option>
						<option>Madrid</option>
						<option>Milan</option>
						<option>Moscow</option>
						<option>Paris</option>
						<option>Prague</option>
						<option>Rome</option>
						<option>Stockholm</option>
						<option>Tallinn</option>
						<option>Zurich</option>
					</optgroup>
					
					<optgroup label="Europe">
						<option>Amsterdam</option>
						<option>Barcelona</option>
						<option selected>Berlin</option>
						<option>Istanbul</option>
						<option>Lisbon</option>
						<option>London</option>
						<option>Madrid</option>
						<option>Milan</option>
						<option>Moscow</option>
						<option>Paris</option>
						<option>Prague</option>
						<option>Rome</option>
						<option>Stockholm</option>
						<option>Tallinn</option>
						<option>Zurich</option>
					</optgroup>
					
					<optgroup label="North America">
						<option>Las Vegas</option>
						<option>Los Angeles</option>
						<option>Miami</option>
						<option>New Orleans</option>
						<option>New York</option>
						<option>San Francisco</option>
						<option>Toronto</option>
					</optgroup>
					
					<optgroup label="Ski">
						<option>Chamonix</option>
						<option>Courchevel</option>
						<option>La Grave</option>
						<option>Megeve</option>
						<option>Monte Rosa</option>
						<option>St. Moritz</option>
						<option>Tignes</option>
						<option>Val d'Isere</option>
						<option>Verbier</option>
						<option>Zermatt</option>
					</optgroup>
					
					<optgroup label="South America">
						<option>Bogota</option>
						<option>Buenos Aires</option>
					</optgroup>
					
				</select>
				</li>
				
				<li>
				<label for="filter-venue">Venue</label>
				
				<select id="filter-venue">
					<option>All</option>
					<option selected>Hotels</option>
					<option>Restaurants</option>
					<option>Bars</option>
					<option>Cafes</option>
					<option>Clubs</option>
					<option>Sights</option>
					<option>Shops</option>
					<option>Things To Do</option>
					<option>Magazine Features</option>
				</select>
				
				</li>
				
				<li class="selected-all">
				<label for="filter-atmosphere">Atmosphere</label>
				
				<select id="filter-atmosphere">
					<option selected>All</option>
					<option>Achingly Hip</option>
					<option>Budget Chic</option>
					<option>Expense Account</option>
					<option>Neighbourhood Vibe</option>
					<option>Old School</option>
					<option>Uniquely Local</option>
				</select>
				
				</li>
				
				<li class="selected-all">
				<label for="filter-category">Category</label>
				
				<select id="filter-category">
					<option selected>All</option>
					<option>Achingly Hip</option>
					<option>Budget Chic</option>
					<option>Expense Account</option>
					<option>Neighbourhood Vibe</option>
					<option>Old School</option>
					<option>Uniquely Local</option>
				</select>
				
				</li>
				
				<li>
				<label for="filter-sort">Sort</label>
				
				<select id="filter-sort">
					<option selected>Relevance</option>
					<option>Price (Low - High)</option>
					<option>Price (High - Low)</option>
				</select>
				
				</li>
				
				<li>
				<label for="filter-map">Map</label>
				
				<input type="checkbox" id="filter-map" />

				</li>
				</ul>
			</li>
		</ul>
	</nav>
	
	*/ ?>
	
<section class="grid12">
	
	<ol class="posts-feed grid11 col1 example">
			
		<li class="post featured magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Germany&rsquo;s Best New Boutique Hotels</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
	</ol>
	
	<figure class="map col2">
	
		<div id="map-canvas"></div>
	
	</figure>
	
</section>

</article><!-- .destination -->

</div><!-- .container.all -->

<?php get_footer(); ?>