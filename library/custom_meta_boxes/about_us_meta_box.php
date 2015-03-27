<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb2_about_us_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_about_us_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['about_us_metabox'] = array(
		'id'         => 'about_us_metabox',
		'title'      => __( ' ', 'cmb2' ),
		'object_types'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'show_on' => array(
			'key' => 'slug',
			'value' => 'about-us'
		),
		'fields'     => array(
			array(
			    'name' => '',
			    'desc' => '',
			    'id' => $prefix . 'wysiwyg',
			    'type' => 'wysiwyg',
		        'options' => array(
			        'wpautop' => false, // use wpautop?
			        'media_buttons' => false, // show insert/upload button(s)
			        'textarea_rows' => get_option('default_post_edit_rows', 8), // rows="..."
			    ),
			),
		),
	);

	return $meta_boxes;
}

add_filter('cmb2_meta_boxes', 'cmb2_about_us_metaboxes');