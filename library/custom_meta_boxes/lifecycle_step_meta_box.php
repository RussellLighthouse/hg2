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
function cmb2_lifecycle_step_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_lifecycle_step_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['lifecycle_step_metabox'] = array(
		'id'         => 'lifecycle_step_metabox',
		'title'      => __( ' ', 'cmb2' ),
		'object_types'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'show_on' => array(
			'key' => 'parent_slug',
			'value' => 'project-lifecycle'
		),
		'fields'     => array(
			array(
			    'name'    => 'Which step is this?',
			    'desc'    => '1-6',
			    'id'      => $prefix . 'step',
			    'type'    => 'text_small'
			),
		),
	);

	return $meta_boxes;
}

add_filter('cmb2_meta_boxes', 'cmb2_lifecycle_step_metaboxes');