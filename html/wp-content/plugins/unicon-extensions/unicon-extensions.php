<?php
/*
Plugin Name: Unicon extensions
Plugin URI:
Description: Add support for special content types in your website, such as service Block, client, and team member.
Version: 1.0.5
Author: themezwp
Author URI: http://themezwp.com
Text Domain: unicon-extensions
Domain Path: /languages
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

define( 'UNICON_EXTEN_VERSION',  '1.0.5' );
define( 'UNICON_EXTEN_PATH',  plugin_dir_path( __FILE__ ) );
define( 'UNICON_EXTEN_URL',  plugin_dir_url( __FILE__ ) );

if ( ! function_exists( 'add_action' ) ) {
	die('Nothing to do...');
}


//Load ADMIN CSS & JS SCRIPTS
function unicon_admin_cssjs($hook) {
	wp_enqueue_style( 'unicon_backend', UNICON_EXTEN_URL . 'assets/js/unicon_widgets_custom_css.css' );
		//WIDGETS
		if( 'widgets.php' == $hook || 'post.php' == $hook ){
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'wp-color-picker' );
			wp_enqueue_script( 'unicon_widgets', UNICON_EXTEN_URL . '/assets/js/widget-media.js' );
		}
}
add_action( 'admin_enqueue_scripts', 'unicon_admin_cssjs' );

if ( function_exists( 'unicons_setup' ) ) {
// programmatically create some basic pages, and then set Home and Blog
// setup a function to check if these pages exist
function the_slug_exists($post_name) {
	global $wpdb;
	if($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
		return true;
	} else {
		return false;
	}
}
// create the blog page

    $blog_page_title = 'Blog';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'blog'
    );
    if(!the_slug_exists('blog')){
         wp_insert_post($blog_page);
    }


// change the Sample page to the home page

    $home_page_title = 'Home';
    $home_page_content = '';
    $home_page_check = get_page_by_title($home_page_title);
    $home_page = array(
	    'post_type' => 'page',
	    'post_title' => $home_page_title,
	    'post_content' => $home_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'home'
    );
    if(!the_slug_exists('home')){
        wp_insert_post($home_page);
    }


	// Set the blog page
	$blog = get_page_by_path( 'blog' );
	update_option( 'page_for_posts', $blog->ID );

	// Use a static front page
	$front_page = get_page_by_path( 'home' ); // this is the default page created by WordPress
	update_option( 'page_on_front', $front_page->ID );
	update_option( 'show_on_front', 'page' );

}
/**
 * Populate frontpage widgets areas with default widgets
 */
function unicon_populate_with_default_widgets() {

	$unicon_sidebars = array ( 'sidebar-service' => 'sidebar-service','sidebar-team' => 'sidebar-team' );

	$active_widgets = get_option( 'sidebars_widgets' );


		if ( empty ( $active_widgets[ $unicon_sidebars['sidebar-service'] ] ) ) {



		$active_widgets['sidebar-service'][0] = 'unicon-service-widget-1' ;


			$service_content[ 1 ] = array(
				'main_title'      => 'Our Service',
				'sub_title'      => 'Add Service widgets from customizer => theme options => service section',

				'image_uri1'      => UNICON_EXTEN_URL . "/images/imac.png",
				'title1'		 => 'Excellent Quality',
				'text1'      => 'Praesent turpis mauris, aliquet id dolor Gravida adipiscing lectus ut rutrum Aenean at posuere risus.',
				'link_text1' =>  ' Read More',
				'url1'     	 =>'#',

				'image_uri2'      => UNICON_EXTEN_URL . "/images/paper-plane.png",
				'title2' => 'Strategic Vision',
				'text2'      => 'Praesent turpis mauris, aliquet id dolor Gravida adipiscing lectus ut rutrum Aenean at posuere risus.',
				'link_text2' =>  ' Read More',
				'url2'     	 =>'#',


				'image_uri3'      => UNICON_EXTEN_URL . "/images/online.png",
				'title3' => 'Design Startup',
				'text3'      => 'Praesent turpis mauris, aliquet id dolor Gravida adipiscing lectus ut rutrum Aenean at posuere risus.',
				'link_text3' =>  'Read More',
				'url3'     	 =>'#',


				'image_uri4'      => UNICON_EXTEN_URL . "/images/radio.png",
				'title4' => 'Design Startup',
				'text4'      => 'Praesent turpis mauris, aliquet id dolor Gravida adipiscing lectus ut rutrum Aenean at posuere risus.',
				'link_text4' =>  ' Read More',
				'url4'     	 =>'#',


			);


		update_option( 'widget_unicon-service-widget', $service_content );



		update_option( 'sidebars_widgets', $active_widgets );

	}

	if ( empty ( $active_widgets[ $unicon_sidebars['sidebar-team'] ] ) ) {



		$active_widgets['sidebar-team'][0] = 'unicon-team-widget-1' ;


			$team_content[ 1 ] = array(
				'main_title'      => 'TALENTED PEOPLE ',
				'sub_title'      => 'Add Team widgets from customizer',

				'icon1'      => 'Michael Doe',
				'title1' => 'Co-Founder & CEO',
				'image_uri1'      =>  UNICON_EXTEN_URL . "/images/team1.jpg",
				'box_uri1'=> '',

				'icon2'      => 'Eliza Roma',
				'title2' => 'Designer',
				'box_uri2'=> '',
				'image_uri2'      =>  UNICON_EXTEN_URL . "/images/team3.jpg",

				'icon3'      => 'Barak Stuart',
				'title3' => 'Co-Founder & CEO',
				'box_uri3'=> '',
				'image_uri3'      =>  UNICON_EXTEN_URL . "/images/team2.jpg",

				'icon4'      => 'Anya Siennadia',
				'title4' => 'Marketing Manager',
				'box_uri4'=> '',
				'image_uri4'      =>  UNICON_EXTEN_URL . "/images/team4.jpg",


			);


		update_option( 'widget_unicon-team-widget', $team_content );



		update_option( 'sidebars_widgets', $active_widgets );

	}


	update_option( 'unicon_companion_flag','installed' );

}


/**
 * Register Widgets
 */
function unicon_register_widgets() {

	register_widget('unicon_client_widget');
	register_widget('unicon_service_widget');
	register_widget('unicon_team_widget');
	register_widget('unicon_ribbon_widget');
	register_widget('unicon_contact_widget');
	register_widget('unicon_feature_widget');

	$unicon_companion_flag = get_option( 'unicon_companion_flag' );
	if ( empty( $unicon_companion_flag ) && function_exists( 'unicon_populate_with_default_widgets' ) ) {
		unicon_populate_with_default_widgets();
	}

}

add_action('widgets_init', 'unicon_register_widgets');

require_once UNICON_EXTEN_PATH . 'inc/widget-clients.php';
require_once UNICON_EXTEN_PATH . 'inc/widget-service.php';
require_once UNICON_EXTEN_PATH . 'inc/widget-team.php';
require_once UNICON_EXTEN_PATH . 'inc/widget-ribbon.php';
require_once UNICON_EXTEN_PATH . 'inc/widget-contact.php';
require_once UNICON_EXTEN_PATH . 'inc/widget-feature.php';
$theme = wp_get_theme(); // gets the current theme
if ( 'unicons' == $theme->name || 'unicons' == $theme->parent_theme ) {
require_once UNICON_EXTEN_PATH . 'inc/demo.php';

}
