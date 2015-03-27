<?php

require_once( 'library/bones.php' );
require_once( 'library/admin.php' );

/************* CUSTOM POST TYPES ******************/

// Add all custom post types here.

/*
	require_once('library/custom_post_types/people_custom_post.php');
*/

/************* CUSTOM TAXONOMIES ******************/

// Add all custom taxonomies here.

// require_once('library/custom_taxonomies/custom_taxonomy_example.php');

/************* CUSTOM META BOXES ******************/

/*
	require_once('library/custom_meta_boxes/service_meta_box.php');
	require_once('library/custom_meta_boxes/lifecycle_step_meta_box.php');
	require_once('library/custom_meta_boxes/people_meta_box.php');
	require_once('library/custom_meta_boxes/case_study_meta_box.php');
	require_once('library/custom_meta_boxes/about_us_meta_box.php');
*/

// require_once('library/custom_meta_boxes/custom_meta_box_example.php');

/******************** PLUGINS ********************/

require_once('library/plugins/custom_post_type_archive_menu_links.php');

/************* THUMBNAIL SIZE OPTIONS *************/

// add_image_size( 'large-square', 500, 500, false );

/************* RESPONSIVE FUNCTIONS *************/

/**
 *
 *  To use responsive images you need to follow this naming convention
 *  prefix-image-size, where image-size is medium, large or full.
 *
 *  The following image size definitions are also required
 *  
 *  add_image_size( 'prefix-medium', 320, '', false );
 *  add_image_size( 'prefix-large', 481, '', false );
 *  add_image_size( 'prefix-full', 768, '', false );
 *
 *  Usage
 *  ======================
 *  the_post_thumbnail(responsive_image_size());
 *
 */
 

function repsonsive_image_size()
{

    if (function_exists(is_mobile())) {


        if (is_mobile()) {

            $image_size = 'medium';

        }
        else if (is_tablet()) {

            $image_size = 'large';

        } else {

            $image_size = 'full';

        }

        if (strlen($prefix) > 0) {

            $image_size = $prefix . '-' . $image_size;

        }

        return $image_size;

    } else {

        print_r('Install wordpress plugin mobble!!');
        return 'full';

    }

}

/**
 *
 *  Function to serve responsive images used in the_content()
 *
 *  Usage
 *  =======================
 *  echo apply_filters('the_content', the_responsive_content(get_the_content()));
 *
 *  This can be used for an string of content that contains image tags
 *
 */

function the_responsive_content($content)
{

    preg_match_all('/\bwp-image-(\d+)\b/', $content, $matches);

    $image_ids = $matches[1];

    preg_match_all('/<img.*?>/', $content, $matches);

    if (count($matches[0]) != count($image_ids)) {
        return $content;
    }

    $images = array();

    foreach ($image_ids as $image_id) {

        $image = wp_get_attachment_image($image_id, responsive_image_size());
        array_push($images, $image);

    }

    foreach ($images as $i=> $image) {

        $content = preg_replace('`' . $matches[0][$i] . '`', $image, $content);

    }

    return $content;

}

/************* SHORTCODES *************/

function tel_shortcode() {
	return contact_details_get_option('telephone_number');
}

add_shortcode('telephone', 'tel_shortcode');

function email_shortcode() {
	return contact_details_get_option('email');
}

add_shortcode('email', 'email_shortcode');

/******** MENUS & NAVIGATION *********/

add_theme_support( 'menus' );

function register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main menu' ),
        )
    );
}

add_action( 'init', 'register_menus' );

/*** GENERAL UTILITY FUNCTIONS ******/

function page_title($title) {

    if (empty($title) && (is_home() || is_front_page())) {

        return 'Home';

    }

    return $title;

}

add_filter('wp_title', 'page_title');

// add page name to body class
function add_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_body_class' );

/******** SETTINGS PAGE ************/

class contact_details_Admin {

    /**
     * Option key, and option page slug
     * @var string
     */
    protected static $key = 'contact_details_options';

    /**
     * Array of metaboxes/fields
     * @var array
     */
    protected static $theme_options = array();

    /**
     * Options Page title
     * @var string
     */
    protected $title = '';

    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = __( 'Contact Details', 'contact_details' );
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
    }

    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( self::$key, self::$key );
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', self::$key, array( $this, 'admin_page_display' ) );
    }

    /**
     * Admin page markup. Mostly handled by CMB
     * @since  0.1.0
     */
    public function admin_page_display() {
        ?>
        <div class="wrap cmb_options_page <?php echo self::$key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <?php cmb_metabox_form( self::option_fields(), self::$key ); ?>
        </div>
        <?php
    }

    /**
     * Defines the theme option metabox and field configuration
     * @since  0.1.0
     * @return array
     */
    public static function option_fields() {

        // Only need to initiate the array once per page-load
        if ( ! empty( self::$theme_options ) )
            return self::$theme_options;

        self::$theme_options = array(
            'id'         => 'theme_options',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( self::$key, ), ),
            'show_names' => true,
            'fields'     => array(
                array(
                    'name' => __( 'Telephone Number', 'contact_details' ),
                    'id'   => 'telephone_number',
                    'type' => 'text_medium',
                ),
                array(
                    'name' => __( 'Email', 'contact_details' ),
                    'id'   => 'email',
                    'type' => 'text_medium',
                ),
                array(
                    'name' => __( 'Address', 'contact_details' ),
                    'id'   => 'address',
					'type' => 'textarea'
                )
            )
        );
        return self::$theme_options;
    }

    /**
     * Make public the protected $key variable.
     * @since  0.1.0
     * @return string  Option key
     */
    public static function key() {
        return self::$key;
    }

}

// Get it started
$contact_details_Admin = new contact_details_Admin();
$contact_details_Admin->hooks();

/**
 * Wrapper function around cmb_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function contact_details_get_option( $key = '' ) {
    return cmb_get_option( contact_details_Admin::key(), $key );
}


add_theme_support( 'post-thumbnails' );






/* Add copyright field
*/
add_filter("attachment_fields_to_edit", "add_image_source_url", 10, 2);
function add_image_source_url($form_fields, $post) {
	$form_fields["source_url"] = array(
		"label" => __("Copyright"),
		"input" => "text",
		"value" => get_post_meta($post->ID, "source_url", true),
                "helps" => __("Add the URL where the original image was posted"),
	);
 	return $form_fields;
}

add_filter("attachment_fields_to_save", "save_image_source_url", 10 , 2);
function save_image_source_url($post, $attachment) {
	if (isset($attachment['source_url']))
		update_post_meta($post['ID'], 'source_url', $attachment['source_url']);
	return $post;
}





add_filter('img_caption_shortcode', 'caption_shortcode_with_credits', 10, 3);
function caption_shortcode_with_credits($empty, $attr, $content) {
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));
	
	// Extract attachment $post->ID
	preg_match('/\d+/', $id, $att_id);
	if (is_numeric($att_id[0]) && $source_url = get_post_meta($att_id[0], 'source_url', true)) {
		
		$parts = parse_url($source_url);
		$caption .= ''. __() .' '. $parts['host'] .'';
	}

	if (1 > (int) $width || empty($caption))
		return $content;

	if ($id)
		$id = 'id="' . esc_attr($id) . '" ';

	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode($content) . '<p class="wp-caption-text">' . $caption . '</p><p class="copyright"><span class="symbol">&copy;</span> <span class="value">' . $source_url . '</span></p></div>';
}









?>