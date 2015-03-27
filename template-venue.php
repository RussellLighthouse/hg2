<?php
/*
Template Name: Venue
*/
?>

<?php get_header(); ?>

<div class="container all">

<article class="venue">

<?php
		
	while ( have_posts() ) : the_post() ?>
	
	<h1 class="page-title"><?php the_title(); ?></h1>
	
	<section class="share share-the-venue">
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
	
	<ul class="post-categories">
		<li><a href="#category">Fashion</a></li>
		<li><a href="#category">Lifestyle</a></li>
	</ul>
	
	<div class="description-details grid13">
	
	<section class="description content col1">
			
			<?php the_content(); ?>
					
		</section>
		
		<dl class="details col2 grid14">
			
			<div class="col">
			<dt>E-Mail</dt>
			<dd><a href="mailto:berlin@ritzcarlton.com">berlin@ritzcarlton.com</a></dd>
			</div>
			
			<div class="col">			
			<dt>Telephone</dt>
			<dd>+49 30 33 777 6300</dd>
			</div>
			
			<div class="col">
			<dt>Address</dt>
			<dd>damer Platz 3, 10785 Berlin, Germany</dd>
			</div>
			
			<div class="col">
			<dt>Opening Times</dt>
			<dd>08:00 - 00:00</dd>
			</div>
			
			<div class="col">
			<dt>Price</dt>
			<dd class="detail-price"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/price.svg" class="icon" /> <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/price.svg" class="icon" /> <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/price.svg" class="icon" /></dd>
			</div>
			
			<div class="col">
			<dt>What 3 Words</dt>
			<dd class="detail-w3w"><a href="http://w3w.co/arts.choice.monkey"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/what3words.svg" class="icon" />arts.choice.monkey</a></dd>
			</div>
			
			<a href="#" class="download-app">Explore this hotel in our app</a>
		
		</dl>
		
	</div><!-- .grid13 -->
	
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<figure class="photo-feature" style="background-image: url('<?php echo $image[0]; ?>');"></figure>
	<?php endif; ?>
	
	
	<section class="map-sponsor has-sponsor">
		<div id="map-canvas"></div>
		
		<figure class="sponsor">
			
		</figure>
	</section>
	
		<section class="they-say">
			
			<div class="clearfix">
				<h2 class="they-say-title">They say&hellip;</h2>
				
				<ul class="social-links">
					<li><a href="#instagram"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/instagram.svg" class="icon" /> RitzCarlton</a></li>
					<li class="twitter"><a href="#twitter"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/twitter.svg" class="icon" /> RitzCarlton</a></li> 
				</ul>
			</div>
			
			<ol class="they-said grid16">
				<li class="col col1">
					<a href="#permalink" class="time-permalink">2 Days Ago</a>
					<div class="message">Transform your photos into vintage-inspired travel posters with The <a href="#">@RitzCarlton</a> Mobile App. Download at: <a href="#">http://bit.ly/1dnEuwh</a></div>
				</li>
				
				<li class="col">
					<a href="#permalink" class="time-permalink">5 Days Ago</a>
					<div class="message">An Arabian <a href="#">#sunset</a> ends the day in <a href="#">#Dubai</a>. <a href="#">#LuxuryTravel</a> <a href="#">#TravelGram</a> <a href="#">#InstaLove</a></div>
				</li>
				
				<li class="col">
					<a href="#permalink" class="time-permalink">A Week Ago</a>
					<div class="message">The best gift from <a href="#">#Moscow</a> is signature <a href="#">#RitzCarlton</a> pralines. We recommend vodka-blackberry &amp; vodka-raspberry tastes.</div>
				</li>
			</ol>
		
		</section><!-- .they-say -->
		
		
		<section class="the-hack">
			
			<h2 class="the-hack-title">The Hack&hellip;</h2>
			
			<div class="the-hack-message">
				
				<figure class="the-hack-photo">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/uploads-theme/the-hack.jpg" alt="The Hack Photo" />
				</figure>
				
				<div class="body">
					<div class="content">
					<h1>The Magic of French Savoir-Vivre</h1>
				
					<p>The liaison of old and new in the ambiance of an authentic French Brasserie works perfectly with the Brasserie Desbrosses. Here guests may enjoy French cuisine in a carefully restored and leger ambiance. The heart of the Brasserie is the open show kitchen with its red enamel oven.</p>
					</div>
					
					<aside class="share">
						<h4 class="title share-title">Share the Hack</h4>
						
						<ul>
							<li><a href="#twitter">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/twitter.jpg" alt="Twitter Icon" />
							</a></li>
							
							<li><a href="#facebook">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/facebook.jpg" alt="Facebook Icon" />
							</a></li>
						</ul>
					</aside>
				</div>
			
			</div>
		
		</section><!-- .the-hack -->
	
	<section class="related-posts">
	
	<h1 class="related-posts-title">More <a href="/berlin">Chain Hotels</a> in <a href="/berlin">Berlin</a></h1>
	
	<ol class="posts-feed grid15">
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="post-link">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Food &amp; Drinks</a><a href="#post-category">Restaurants</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="post-link">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Lifestyle</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="post-link">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
	</ol>
	
</section>
	
<?php
endwhile;
?>
		
</article><!-- .destination -->

</div><!-- .container.all -->

<?php get_footer(); ?>