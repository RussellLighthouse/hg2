<?php

/************* DASHBOARD WIDGETS *****************/

function disable_default_dashboard_widgets() {

	remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' );    
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' ); 
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );  
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );         
	remove_meta_box('dashboard_quick_press', 'dashboard', 'core' );   
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );   
	remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );         
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );       
	remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' );

}

add_action( 'admin_menu', 'disable_default_dashboard_widgets' );

/************* CUSTOM LOGIN PAGE *****************/

function lightbones_login_css() {
	wp_enqueue_style( 'lightbones_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}

function lightbones_login_url() {  return home_url(); }
function lightbones_login_title() { return get_option( 'blogname' ); }

add_action( 'login_enqueue_scripts', 'lightbones_login_css', 10 );
add_filter( 'login_headerurl', 'lightbones_login_url' );
add_filter( 'login_headertitle', 'lightbones_login_title' );

/************* CUSTOMIZE ADMIN *******************/

function lightbones_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Developed by <a href="http://wearelighthouse.com" target="_blank">Lighthouse London</a>', 'planesaver' );
}

add_filter( 'admin_footer_text', 'lightbones_custom_admin_footer' );

?>
