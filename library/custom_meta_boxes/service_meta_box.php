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
function cmb2_service_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_service_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['service_metabox'] = array(
		'id'         => 'service_metabox',
		'title'      => __( ' ', 'cmb2' ),
		'object_types'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'show_on' => array(
			'key' => 'parent_slug',
			'value' => 'services'
		),
		'fields'     => array(
			array(
				'name'         => __( 'Images', 'cmb2' ),
				'desc'         => __( 'Upload or add multiple images/attachments.', 'cmb2' ),
				'id'           => $prefix . 'images',
				'type'         => 'file_list',
				'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
			),
			array(
			    'name'    => 'Which area does this service belong to?',
			    'desc'    => 'Select an option',
			    'id'      => $prefix . 'area_select',
			    'type'    => 'select',
			    'options' => array(
			        'rights-of-light' => __( 'Rights of Light', 'cmb' ),
			        'building-surveying' => __( 'Building Surveying', 'cmb' ),
			        'sustainability' => __( 'Sustainability', 'cmb' ),
			    ),
			),
		),
	);

	return $meta_boxes;
}

add_filter('cmb2_meta_boxes', 'cmb2_service_metaboxes');