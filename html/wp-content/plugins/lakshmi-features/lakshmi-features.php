<?php
/**
 * Plugin Name: Lakshmi Features
 * Plugin URI:  http://webzakt.com/themes/lakshmi-multipurpose-wordpress-theme/
 * Description: Lakshmi Lite Version plugin with page builder elements and slider.
 * Version: 1.0.8
 * Author: Webzakt
 * Author URI: http://www.webzakt.com
 */

class Lakshmi_Features {

    function __construct()
    {
    	define( 'LAKSHMI_VERSION', '0.9' );

    	// Plugin folder path
    	if ( ! defined( 'LAKSHMI_PLUGIN_DIR' ) ) {
    		define( 'LAKSHMI_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
    	}

    	// Plugin folder URL
    	if ( ! defined( 'LAKSHMI_PLUGIN_URL' ) ) {
    		define( 'LAKSHMI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
    	}
		
		function lakshmi_features_filter_plugin_awesome_extensions($locations) {
			$locations[ dirname(__FILE__) . '/extensions' ]
			=
			plugin_dir_url( __FILE__ ) . 'extensions';
		
			return $locations;
		}
		add_filter('fw_extensions_locations', 'lakshmi_features_filter_plugin_awesome_extensions');
	}

}
new Lakshmi_Features();

/*********Unyson Slider**************/
if ( ! function_exists( 'fw_theme_lakshmi_slider_population_method_custom_options' ) ) :
	/**
	 * Filter for disable standard slider fields for easy slider
	 *
	 * @param array $arr - array of slider options
	 */
	function fw_theme_lakshmi_slider_population_method_custom_options( $arr ) {
		unset(
			$arr['wrapper-population-method-custom']['options']['custom-slides']['slides_options']['desc']
		);

		return $arr;
	}

	add_filter( 'fw_ext_lakshmi_slider_population_method_custom_options', 'fw_theme_lakshmi_slider_population_method_custom_options' );
endif;

if ( ! function_exists( 'lakshmi_lite_filter_active_slider' ) ) :
	function lakshmi_lite_filter_active_slider( $sliders ) {
		$sliders = array_diff( $sliders, array( 'bx-slider', 'nivo-slider', 'owl-carousel' ) );

		return $sliders;
	}

	add_filter( 'fw_ext_slider_activated', 'lakshmi_lite_filter_active_slider' );
endif;


/*********Demos**************/
/**
 * @param FW_Ext_Backups_Demo[] $demos
 * @return FW_Ext_Backups_Demo[]
 */
function _lakshmi_lite_fw_ext_backups_demos($demos) {
	$theme = wp_get_theme(); // gets the current theme
	if ('Robot' == $theme->name) {

		$demos_array = array(
			'default-demo' => array(
				'title' => __('Default', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/robot/1.1.0/default-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/robot/',
			),
		);
	
		$download_url = 'http://webzakt.com/demos/robot/1.1.0/';
	} elseif ('Palette' == $theme->name) {

		$demos_array = array(
			'default-demo' => array(
				'title' => __('Default', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/palette/1.0.0/default-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/palette/',
			),
		);
	
		$download_url = 'http://webzakt.com/demos/palette/1.0.0/';
	} elseif ('Katlan' == $theme->name) {

		$demos_array = array(
			'default-demo' => array(
				'title' => __('Default', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/katlan/1.0.0/default-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/katlan/',
			),
		);
	
		$download_url = 'http://webzakt.com/demos/katlan/1.0.0/';
	} else {

		$demos_array = array(
			'default-demo' => array(
				'title' => __('Default', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/default-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/default/',
			),
			'blogger-demo' => array(
				'title' => __('Blogger', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/blogger-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/blogger/',
			),
			'hinduist-demo' => array(
				'title' => __('Hinduist', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/hinduist-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/hinduist/',
			),
			'africa-demo' => array(
				'title' => __('Africa', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/africa-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/africa/',
			),
			'clean-demo' => array(
				'title' => __('Clean', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/clean-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/clean/',
			),
			'fashion-demo' => array(
				'title' => __('Fashion', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/fashion-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/fashion/',
			),
			'blue-demo' => array(
				'title' => __('Blue', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/blue-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/blue/',
			),
			'cream-demo' => array(
				'title' => __('Cream', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/cream-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/cream/',
			),
			'texts-demo' => array(
				'title' => __('Texts', 'lakshmi-features'),
				'screenshot' => 'http://webzakt.com/demos/lakshmi-lite/1.0.6/texts-screenshot.png',
				'preview_link' => 'http://webzakt.com/lakshmi-lite/texts/',
			),
			// ...
		);
	
		$download_url = 'http://webzakt.com/demos/lakshmi-lite/1.0.6/';
	}

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', '_lakshmi_lite_fw_ext_backups_demos');