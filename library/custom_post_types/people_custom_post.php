<?php

function people() { 

	register_post_type( 'people', 

		array( 'labels' => array(
				'name' => __( 'People', 'lightbones' ), 
				'singular_name' => __( 'Bio', 'lightbones' ), 
				'all_items' => __( 'All People', 'lightbones' ), 
				'add_new' => __( 'Add New Person', 'lightbones' ), 
				'add_new_item' => __( 'Add New Person', 'lightbones' ), 
				'edit' => __( 'Edit', 'lightbones' ), 
				'edit_item' => __( 'Edit Person', 'lightbones' ), 
				'new_item' => __( 'New Person', 'lightbones' ), 
				'view_item' => __( 'View Person', 'lightbones' ), 
				'search_items' => __( 'Search People', 'lightbones' ), 
				'not_found' =>  __( 'No staff found, did everyone quit!?', 'lightbones' ), 
				'not_found_in_trash' => __( 'Nothing found in Trash', 'lightbones' ), 
				'parent_item_colon' => ''
			), 
			'description' => __( 'This is the Our People post type', 'lightbones' ), 
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, 
			'rewrite'	=> array( 'slug' => 'people', 'with_front' => false ), 
			'has_archive' => true, 
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'thumbnail')
		) 

	); 
	
}

add_action( 'init', 'people');
	
?>
