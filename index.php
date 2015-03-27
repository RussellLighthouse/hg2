<?php get_header(); ?>

<article class="content">

<h1>Blog</h1>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="post">
		<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
	</section>

<?php endwhile; ?>

</article>

<?php get_footer(); ?>