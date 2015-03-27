<?php
/*
Template Name: Destination
*/
?>

<?php get_header(); ?>

<div class="container all larger spark">

<article class="destination">

<?php
		
	while ( have_posts() ) : the_post() ?>
	
	<p class="page-guide">A Hedonist&rsquo;s guide to&hellip;</p>
	<p class="page-title">Berlin</p>
	
	<section class="share share-the-destination">
		<h4 class="title share-title">Share</h4>
		
		<ul>
			<li><a href="#twitter">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/twitter.jpg" alt="Twitter Icon" />
			</a></li>
			
			<li><a href="#facebook">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/facebook.jpg" alt="Facebook Icon" />
			</a></li>
		</ul>
	</section>
	
	<?php /* <a href="#" class="download-app">Get our App</a> */ ?>
	
	<?php
	endwhile;
	?>
	
	<nav class="filter-menu">
		<ul>
			<li class="menu"><a href="#">Filter Results</a>
			
				<ul>
				<li>
				<label for="filter-destination">Destination</label>
				<nav class="selecta" id="selecta-filter-destination">Berlin</nav>
				
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
				
				<nav class="selecta">Hotels</nav>
				
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
				
				<nav class="selecta">All</nav>
				
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
				
				<nav class="selecta">All</nav>
				
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
				
				<li class="filter-sort">
					<label for="filter-sort">Sort</label>
					
					<nav class="selecta">Price (Low-High)</nav>
					
					<select id="filter-sort">
						<option selected>Relevance</option>
						<option>Price (Low - High)</option>
						<option>Price (High - Low)</option>
					</select>
				</li>
				
				<li class="filter-map">
				
					<label for="filter-map">Map</label>
					
					<input type="checkbox" id="filter-map" checked="checked" />

				</li>
				
				</ul>
			</li>
		</ul>
	</nav>
	
<section class="grid12">
	
	<ol class="posts-feed grid11 col1 example">
			
		<li class="post featured col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post  col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Germany&rsquo;s Best New Boutique Hotels</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post magazine col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/ackselhaus-blue-home/">
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