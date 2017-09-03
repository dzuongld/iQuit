<?php

/*********Remove parent fuctions**************/
function palette_remove_parent_function() {
    remove_action( 'wp_enqueue_scripts', 'lakshmi_lite_styles' );
    remove_action( 'admin_menu', 'lakshmi_lite_about_theme' );
	remove_action( 'after_setup_theme', 'lakshmi_lite_custom_setup' );
}
add_action( 'wp_loaded', 'palette_remove_parent_function' );

define('PALETTE_WEBZAKT_THEME_URL','http://webzakt.com/themes/palette-multipurpose-wordpress-theme/','palette');
define('PALETTE_WEBZAKT_AUTHOR_URL','http://webzakt.com/','palette');
define('PALETTE_WEBZAKT_THEME_DOC','http://webzakt.com/docs/','palette');

/*********Add child theme styles**************/
add_action( 'wp_enqueue_scripts', 'palette_enqueue_styles' );
function palette_enqueue_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', '', '', 'screen, all');
	wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider.css', '', '', 'screen, all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl-carousel.css', '', '', 'screen, all');
	wp_enqueue_style('prettyphoto-css', get_template_directory_uri().'/css/prettyPhoto.css', '', '', 'screen, all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' , array(), '4.4.0', 'all' );
	
    wp_enqueue_style( 'palette-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('palette-main-css', get_bloginfo( 'stylesheet_url' ), '', '', 'all');
	
	wp_enqueue_style('palette-google-fonts', '//fonts.googleapis.com/css?family=Roboto:regular,300|Roboto+Condensed:regular,300|Roboto+Mono:regular|Chewy:regular');
}

/*********Palette Customizer**************/
function palette_custom_setup() {
	if ( ! defined( 'FW' ) ) {
		add_theme_support( "custom-background",
			array(
				'default-color' => '18f5b6',
				'default-image' => '',
				'default-repeat'     => 'repeat',
				'default-position-x' => 'center',
				'default-attachment' => 'scroll',
    			'wp-head-callback' => 'lakshmi_lite_custom_background_cb',
			)
		);
		
		add_theme_support( 'custom-logo', array(
			'height'      => 62,
			'width'       => 250,
			'flex-height' => true,
		) );

		add_theme_support( "custom-header",
			array(
				'default-image'          => '',
				'flex-height'            => false,
				'flex-width'             => false,
				'uploads'                => true,
				'random-default'         => false,
				'header-text'            => false,
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			)
		);
	}
}
add_action( 'after_setup_theme', 'palette_custom_setup' );

/*********Palette About Theme**************/
//about theme info
add_action( 'admin_menu', 'palette_about_theme' );
function palette_about_theme() {  
	global $palette_about_theme_page; 	
	$palette_about_theme_page = add_theme_page( __('About Theme', 'palette'), __('About Theme', 'palette'), 'edit_theme_options', 'palette_guide', 'palette_guide');   
} 

//guidline for about theme
function palette_guide() { 
?>

<div class="wrapper-info">
	<div class="col-left">
   		   <div class="about-title">
			  <h1><?php esc_html_e('About Palette Theme', 'palette'); ?></h1>
		   </div>
           <p><?php esc_html_e('Description: Palette - Multipurpose WordPress Theme is a child theme of Lakshmi Lite with all features You need. With Unyson and Lakshmi features plugins, You can create sliders, use customizer options, unique shortcodes with page builder and import the premade demo with one click. Imagine Your website and build it with Palette. Build Your site with the highly customizable responsive elements. If You would make something big, try Palette Pro with more elements and special functions.', 'palette'); ?></p>
           <p><?php esc_html_e('If You want to know more about Palette, please read the', 'palette'); ?> <a href="<?php echo esc_url(PALETTE_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'palette'); ?></a>.</p>
           <h2><?php esc_html_e('How to use Palette', 'palette'); ?></h2>
		  <p><?php esc_html_e('1. If You want to use all Palette features install the Lakshmi Lite parent theme and activate the 3 recommended plugins: Unyson, Lakshmi Features, Contact Form 7.', 'palette'); ?></p>
          <p><?php esc_html_e('2. Install the Palette child theme and activate it.', 'palette'); ?></p>
          <p><?php esc_html_e('3. Install the demo contents at Tools -> Demo Content Install. (This step is optional.)', 'palette'); ?></p>
          <p><?php esc_html_e('4. Use the customizer to setup Your site and build Your pages and blog posts with the page builder. If You prefer the default editor, You can call the Lakshmi elements with the "editor shortcodes" button.', 'palette'); ?></p>
          <p><?php esc_html_e('5. Have fun!', 'palette'); ?></p>
          
          <h4><?php esc_html_e('If You need more info, please read the', 'palette'); ?> <a href="<?php echo esc_url(PALETTE_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'palette'); ?></a>.</h4><br />
           <h2><?php esc_html_e('About Palette Pro', 'palette'); ?></h2>
          <p><?php esc_html_e('Do You want more? Extend Palette Theme! You can download', 'palette'); ?> <a href="<?php echo esc_url(PALETTE_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Palette - Multipurpose WordPress Theme', 'palette'); ?></a> <?php esc_html_e('pro version from Webzakt.', 'palette'); ?></p>
          <div class="description free-and-pro"><a href="<?php echo esc_url(PALETTE_WEBZAKT_THEME_URL); ?>" class="webzakt-button webzakt-button-pro" target="_blank"><?php esc_html_e('More about Pro Version', 'palette'); ?></a><a href="<?php echo esc_url(PALETTE_WEBZAKT_AUTHOR_URL); ?>" class="webzakt-button webzakt-button-more" target="_blank"><?php esc_html_e('More about Webzakt', 'palette'); ?></a></div>
          <p><?php esc_html_e('Pro version includes above the lite features:', 'palette'); ?></p>
          
          <h3><?php esc_html_e('Customizable Colors & Fonts, WooCommerce & Give Donation Plugin support with page builder elemnts, Events & Portfolio post types with page builder elemnts, Breadcrumbs, Lakshmi Widgets (Contact, Event, Flickr, Popular Posts, Quote), 4 Blog Style, Social share function, Animations, Nice sroll, Back to top, Sticky header, 7 Header style, Countdown, Counter, Map-fullwidth, Member, Pricing-table, Progress, Tabs, Toggle, Calendar, Extra Post carousel and much more...', 'palette'); ?></h3>
	</div><!-- .col-left -->
	
	<div class="col-right">			
			<div class="about-donate">
				<hr />
				<a href="<?php echo esc_url(PALETTE_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Demo', 'palette'); ?></a> | 
				<a href="<?php echo esc_url(PALETTE_WEBZAKT_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'palette'); ?></a> | 
				<a href="<?php echo esc_url(PALETTE_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'palette'); ?></a>
                <div class="about-space"></div>
				<hr />
                <p><?php esc_html_e('Palette - Multipurpose WordPress Theme is free, and I hope that you find it useful.','palette'); ?></p>
			<hr />
            <div class="about-title">
				<?php esc_html_e('Credits', 'palette'); ?>
            </div>
            <p><?php esc_html_e('I`ve used the following scripts as listed. See the source of the images in the documentation.', 'palette'); ?></p>
                        
            <ul>
                <li><?php esc_html_e('Bootstrap', 'palette'); ?></li>
                <li><?php esc_html_e('jQuery easing', 'palette'); ?></li>
                <li><?php esc_html_e('prettyPhoto', 'palette'); ?></li>
                <li><?php esc_html_e('Flexslider', 'palette'); ?></li>
                <li><?php esc_html_e('OwlCarousel', 'palette'); ?></li>
                <li><?php esc_html_e('Nivo Slider', 'palette'); ?></li>
                <li><?php esc_html_e('jQuery Directional Hover', 'palette'); ?></li>
                <li><?php esc_html_e('Font Awesome', 'palette'); ?></li>
                <li><?php esc_html_e('Google Fonts', 'palette'); ?></li>
                <li><?php esc_html_e('Unyson', 'palette'); ?></li>
            </ul>
		</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php }

function palette_about_theme_style($hook) {
	global $palette_about_theme_page;
	if( $hook != $palette_about_theme_page ) { 
		return;
	}
	wp_enqueue_style('palette-about-theme-style-css', get_stylesheet_directory_uri().'/admin/css/about-theme.css');
}
add_action( 'admin_enqueue_scripts', 'palette_about_theme_style' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );