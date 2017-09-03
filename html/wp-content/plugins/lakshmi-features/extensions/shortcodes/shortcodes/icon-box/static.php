<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/icon-box';

wp_enqueue_style(
    'lakshmi-icon-box-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'lakshmi-icon-box-shortcode-script',
    $uri . '/static/js/iconbox.js'
);