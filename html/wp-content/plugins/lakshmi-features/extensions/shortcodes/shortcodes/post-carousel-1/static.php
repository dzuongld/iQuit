<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/post-carousel-1';

wp_enqueue_style(
    'lakshmi-post-carousel-1-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'lakshmi-post-carousel-1-shortcode-script',
    $uri . '/static/js/post-carousel-1.js'
);