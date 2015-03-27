<?php get_header(); ?>

<div class="container all">

	<?php while ( have_posts() ) : the_post(); ?>
	
	<article class="content">
	<?php the_content(); ?>
	</article>
	
	<?php endwhile; ?>

</div><!-- .container.all -->
	
<?php get_footer(); ?>
