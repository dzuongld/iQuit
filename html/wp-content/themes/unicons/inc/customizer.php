<?php
/**
 * unicons Theme Customizer
 *
 * @package unicons
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function unicons_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$our_client_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-clients' );
	if ( ! empty( $our_client_section ) ) {
			$our_client_section->panel = 'theme_options';
			$our_client_section->title   = __( 'Client section', 'unicons' );
			$our_client_section->priority = 8;
			}
			$contact_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-contact' );
			if ( ! empty( $contact_section ) ) {
					$contact_section->panel = 'theme_options';
					$contact_section->title   = __( 'Contact section', 'unicons' );
					$contact_section->priority = 8;
					}
	$our_service_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-service' );
			if ( ! empty( $our_service_section ) ) {
					$our_service_section->panel = 'theme_options';
					$our_service_section->title   = __( 'Service section', 'unicons' );
					$our_service_section->priority = 3;
					}
	$counter_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-counter' );
			if ( ! empty( $counter_section ) ) {
					$counter_section->panel = 'theme_options';
					$counter_section->title   = __( 'Counter section', 'unicons' );
					$counter_section->priority = 7;
				}
	$team_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-team' );
			if ( ! empty( $team_section ) ) {
					$team_section->panel = 'theme_options';
					$team_section->title   = __( 'Team section', 'unicons' );
					$team_section->priority = 6;
				}
$teampage_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-teampage' );
						if ( ! empty( $counter_section ) ) {
								$teampage_section->panel = 'theme_options';
								$teampage_section->title   = __( 'Team Page setup', 'unicons' );
								$teampage_section->priority = 6;
							}
				$contact_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-contact' );
						if ( ! empty( $contact_section ) ) {
								$contact_section->panel = 'theme_options';
								$contact_section->title   = __( 'Contact section', 'unicons' );
								$contact_section->priority = 9;
							}
				$background_color_control = $wp_customize->get_control( 'background_color' );
			    if ( $background_color_control ) {
			        $background_color_control->section = 'launiconst_front_page';
			    }

					$unicons_subheadtitle_settings = $wp_customize->get_control( 'header_image' );
						if ( $unicons_subheadtitle_settings ) {
								$unicons_subheadtitle_settings->section = 'unicons_subheadtitle_settings';
						}

}
add_action( 'customize_register', 'unicons_customize_register' );

function unicons_registers() {
	wp_enqueue_style( 'unicons_customizer_style', get_template_directory_uri() . '/css/admin.css','unicons-style', true );

}
add_action( 'customize_controls_enqueue_scripts', 'unicons_registers' );



/**
 * Sets up the WordPress core custom header .
 *

 *
 * @see advance_header_style()
 */
function unicons_custom_header() {

	/**
	 * Filter the arguments used when adding 'custom-header' support in advance.
	 *
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-text-color Default color of the header text.
	 *     @type int      $width            Width in pixels of the custom header image. Default 1200.
	 *     @type int      $height           Height in pixels of the custom header image. Default 280.
	 *     @type bool     $flex-height      Whether to allow flexible-height header images. Default true.
	 *     @type callable $wp-head-callback Callback function used to style the header image and text
	 *                                      displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'unicons_custom_header_args', array(
		'flex-width'    => true,
		'width'                  => 1800,
		'height'                 => 250,


	) ) );

}
add_action( 'after_setup_theme', 'unicons_custom_header' );





/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function unicons_customize_preview_js() {
	wp_enqueue_script( 'unicons_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );

}
add_action( 'customize_preview_init', 'unicons_customize_preview_js' );


require get_template_directory() . '/inc/customizer/config.php';
require get_template_directory() . '/inc/customizer/panels.php';
require get_template_directory() . '/inc/customizer/sections.php';
require get_template_directory() . '/inc/customizer/fields.php';
