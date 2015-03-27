<?php

function custom_post_example() { 

	register_post_type( 'example', 

		array( 'labels' => array(
				'name' => __( 'Examples', 'lightbones' ), 
				'singular_name' => __( 'Example', 'lightbones' ), 
				'all_items' => __( 'All Examples', 'lightbones' ), 
				'add_new' => __( 'Add New', 'lightbones' ), 
				'add_new_item' => __( 'Add New Example', 'lightbones' ), 
				'edit' => __( 'Edit', 'lightbones' ), 
				'edit_item' => __( 'Edit Examples', 'lightbones' ), 
				'new_item' => __( 'New Example', 'lightbones' ), 
				'view_item' => __( 'View Example', 'lightbones' ), 
				'search_items' => __( 'Search Examples', 'lightbones' ), 
				'not_found' =>  __( 'Nothing found in the Database.', 'lightbones' ), 
				'not_found_in_trash' => __( 'Nothing found in Trash', 'lightbones' ), 
				'parent_item_colon' => ''
			), 
			'description' => __( 'This is the Example custom post type', 'lightbones' ), 
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-example-icon.png', 
			'rewrite'	=> array( 'slug' => 'examples', 'with_front' => false ), 
			'has_archive' => true, 
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'thumbnail')
		) 

	); 

	register_taxonomy_for_object_type( 'category', 'example' );
	
}

add_action( 'init', 'custom_post_example');
	
?>
