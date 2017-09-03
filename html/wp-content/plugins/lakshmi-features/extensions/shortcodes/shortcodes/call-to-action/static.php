<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/call-to-action';

wp_enqueue_style(
    'lakshmi-call-to-action-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'lakshmi-call-to-action-shortcode-script',
    $uri . '/static/js/call-to-action.js'
);