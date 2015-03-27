<?php

add_action( 'after_setup_theme', 'lightbones_ahoy', 16 );

function lightbones_ahoy() {

	add_action( 'init', 'lightbones_head_cleanup' );
	add_filter( 'the_generator', 'lightbones_rss_version' );
	add_action( 'wp_enqueue_scripts', 'lightbones_scripts_and_styles', 999 );

}

/*********************
WP_HEAD Clean up
*********************/

function lightbones_head_cleanup() {

	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );

	add_filter( 'style_loader_src', 'lightbones_remove_wp_ver_css_js', 9999 );
	add_filter( 'script_loader_src', 'lightbones_remove_wp_ver_css_js', 9999 );

}

function lightbones_rss_version() { return ''; }
function lightbones_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

update_option('image_default_link_type','none');

/*********************
SCRIPTS & ENQUEUEING
*********************/

function lightbones_scripts_and_styles() {
	
	global $wp_styles;
	
	if (!is_admin()) {

		// modernizr
		wp_register_script( 'lightbones-modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );
		
		// jquery
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.11.0', false );
		
		
		// register main stylesheet
		wp_register_style( 'lightbones-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );
		
		// jquery
		wp_register_style( 'typekit', '//use.typekit.net/mzn2xkj.js', array(), '', 'all' );
		
				
		// ie-only style sheet
		wp_register_style( 'ie', get_stylesheet_directory_uri() . '/library/css/ie.css', array(), '' );

		//adding scripts file in the footer
		wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );
		
		// doubletaptogo
		wp_register_script( 'doubletaptogo', get_stylesheet_directory_uri() . '/library/js/dttg.js', array( 'jquery' ), '', true );


		// enqueue styles and scripts
		wp_enqueue_script( 'lightbones-modernizr' );
		wp_enqueue_style( 'lightbones-stylesheet' );
		wp_enqueue_style( 'typekit' );
		wp_enqueue_style( 'ie' );

		$wp_styles->add_data( 'lightbones-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'scripts' );
		wp_enqueue_script( 'doubletaptogo' );

	}

}

/*********************
UTITLITY FUNCTIONS
*********************/

function add_slug_body_class($classes) 
{

	global $post;

	if (isset($post)) {

		$classes[] = $post->post_name;

	}

	return $classes;

}

add_filter( 'body_class', 'add_slug_body_class' );

/* cmb2
*/
function init_metabox() {
	
	require_once 'custom_meta_boxes/cmb2/init.php';
	
}


add_action( 'init', 'init_metabox');


function show_on_child_of_parent($display, $meta_box) {
	
	if ($meta_box['show_on']['key'] !== 'parent_slug') {
		return $display;
	}
	
	$post_id = (isset($_GET['post'])) ? $_GET['post'] : false;

	
	if (!$post_id) {
		
		return false;
	}
	
	$post = get_post($post_id);

	if ($post->post_parent == 0) {
		
		return false;
	}
	
	$parent = get_post($post->post_parent);
	
	if ($parent->post_name == $meta_box['show_on']['value']) {
		
		return $display;
		
	} else {
		
		return false;
		
	}
	
}

add_filter('cmb2_show_on', 'show_on_child_of_parent', 10, 2);