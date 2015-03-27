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
function cmb2_people_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_people_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['people_metabox'] = array(
		'id'         => 'people_metabox',
		'title'      => __( ' ', 'cmb2' ),
		'object_types'      => array( 'people', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			/* array(
				'name' => __( 'Photo', 'cmb2' ),
				'desc' => __( 'Photo for the About Us page.', 'cmb2' ),
				'id'   => $prefix . 'photo',
				'type' => 'file',
			), */
			array(
				'name' => __( 'Email Address', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'email',
				'type' => 'text_medium',
				'options' => array( 'textarea_rows' => 2, ),
			),
			array(
				'name' => __( 'Phone Number', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'phone',
				'type' => 'text_medium',
				'options' => array( 'textarea_rows' => 2, ),
			),
		),
	);


	return $meta_boxes;
}

add_filter( 'cmb2_meta_boxes', 'cmb2_people_metaboxes' );