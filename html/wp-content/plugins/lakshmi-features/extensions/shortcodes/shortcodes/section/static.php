<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/section';

wp_enqueue_style(
    'lakshmi-section-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'lakshmi-section-shortcode-script',
    $uri . '/static/js/section.js'
);