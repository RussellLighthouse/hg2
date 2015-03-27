<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>
	
	<a href="http://hg2.localhost/a-very-british-hotel-chain-the-firmdale-group/">Post</a>
	
<?php endwhile; ?>

<?php get_footer(); ?>