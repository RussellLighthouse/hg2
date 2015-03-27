<?php get_header(); ?>

<?php
		
while ( have_posts() ) : the_post() ?>

<div class="container all">

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

<ul class="post-categories">
	<li><a href="#category">Fashion</a></li>
	<li><a href="#category">Lifestyle</a></li>
</ul>

<h1 class="post-title"><?php the_title(); ?></h1>

<dl class="post-meta grid1">
	<div class="col">
		<dt class="post-meta-title">Words by</dt>
		<dd class="post-meta-value"><a href="#"><?php $author = get_the_author(); ?><?php echo $author; ?></a></dd>
	</div>
	
	<div class="col">		
		<dt class="post-meta-title">Date</dt>
		<dd class="post-meta-value"><?php the_date('F d, Y', '', ''); ?></dd>
	</div>
</dl>
	
<div class="grid8">
	
	<article class="post-content content col1">
			
	<?php the_content(); ?>
	
	<?php
	endwhile;
	?>
		
	</article>
	
	<aside class="post-sidebar col2">
		
		<section class="share">
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
		
		<section class="sidebar-comments">
			<h4 class="title comments-title">Comments</h4>
			
			<div class="comment-count">
				<a href="#comments"><figure class="count"><?php comments_number(); ?></figure></a>
			</div>
		</section>
		
		<a href="#" class="download-app">Download our App</a>
		
		<hr />
		
		<figure class="sponsor">
		</figure>
		
		<section class="discover-destination">
			<p class="title"><a href="/berlin">Discover <span class="hg2">Hg2</span> <span class="destination">London</span></a></p>
			<a href="/berlin"><img src="<?php echo get_template_directory_uri(); ?>/library/images/dummy/destination-sidebar.jpg" alt="" class="post-thumb" /></a>
		</section>
		
		<hr />
		
		<section class="related-posts">
		
			<h1 class="related-posts-title">Related posts</h1>
			
			<ol class="posts-feed">
				
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
		
		</aside>

</div><!-- .grid8 -->

<div class="grid2">
	<aside class="share col col1">
		<h4 class="title share-title">Share</h4>
		
		<ul>
			<li><a href="#twitter">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/twitter.jpg" alt="Twitter Icon" />
			</a></li>
			
			<li><a href="#facebook">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/social/facebook.jpg" alt="Facebook Icon" />
			</a></li>
		</ul>
	</aside>
	
	<aside class="discover col col2">
		<h4 class="title discover-title">Discover</h4>
		
		<ul class="post-categories">
			<li><a href="#category">Fashion</a></li>
			<li><a href="#category">Lifestyle</a></li>
		</ul>
	</aside>
	
	<aside class="author col col3">
		<h4 class="title author-words-by">Words by</h4>
		<h4 class="author-title"><a href="#"><?php $author = get_the_author(); ?><?php echo $author; ?></a></h4>
		
		<figure class="author-avatar">
		<a href="#"><?php echo get_avatar( $post->post_author, 46 ); ?></a>
		</figure>
		
		<div class="content">
		<p class="bio">Tremayne never quite found his niche and tried everything from estate agency and headhunting to specialising in Richard &amp; Judy and travelling extensively&hellip;</p>
		
		<p class="author-view"><a href="#">View Tremayne's Profile</a></p>
		</div>
			
	</aside>
</div>

<section class="comments" id="comments">
	
	<h2 class="comment-count">
		<figure class="count"><?php comments_number(); ?></figure>Comments
	</h2>
	
	<?php comments_template(); ?>

</section>

<section class="related-posts">
	
	<h1 class="related-posts-title">Related posts</h1>
	
	<ol class="posts-feed grid7">
		
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

</div><!-- .container.all -->

<?php get_footer(); ?>