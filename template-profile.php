<?php
/*
Template Name: Profile
*/
?>

<?php get_header(); ?>

<div class="container all">

<div class="about profile">

<?php
	while ( have_posts() ) : the_post()
?>

<article class="person content">
	
	<h1 class="page-title"><?php the_title(); ?></h1>
	
	<div class="details-bio content">
		
		<aside class="details">
			
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/uploads-theme/team-profile.jpg" alt="" class="person-photo" />
		
			<h5 class="person-title">Production Controller and Designer</h5>
			<h5 class="person-location">Rome</h5>
			
			<ul class="social-links">
				<li class="twitter"><a href="#twitter"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/twitter.svg" class="icon" /> CathPics</a></li>
				<li><a href="#instagram"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/instagram.svg" class="icon" /> CathMcC</a></li>
			</ul>
			
		</aside><!-- .details -->
		
		<p>After an extended jeunesse doree spending lots of time working, eating and drinking in Italy, Catherine buckled down and taught history of art for a few years in some rather well to do schools in London and the Midlands. She is now returning to her freelance roots combining writing, a PhD in art history and consultancy in cultural insight and semiotics. She loves boiled eggs, Pontormo, a good negroni, DVD box sets, steak tartare in Paris, Mediterranean summers, her cat Marcel and David Bowie, but loathes not being able to afford more holidays, lamb chops, cold weather, hangovers and overpriced art exhibitions. What makes her a hedonist? "A fondness for drinking Campari at lunch."</p>
		
	</div>
	
</article>

<h2 class="page-title page-title-sub">Catherine&rsquo;s Articles</h2>

	<ol class="posts-feed text-focus grid9">
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/" class="post-link">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/" class="post-link">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/" class="post-link">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
		<li class="post col">
		
			<figcaption class="post-caption">
				<p class="post-category"><a href="#post-category">Magazine</a></p>
				<a href="#post" class="title">Abi Wright&rsquo;s Five Favourite Luxury Spas Around London</a>
			</figcaption>
	
			<a href="/a-very-british-hotel-chain-the-firmdale-group/" class="post-link">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/post-thumb.jpg" alt="" class="post-thumb" />
			</a>
		
		</li>
		
	</ol>
	
	
<?php
	endwhile;
?>
	
</div><!-- .about -->

</div><!-- .container.all -->

<?php get_footer(); ?>