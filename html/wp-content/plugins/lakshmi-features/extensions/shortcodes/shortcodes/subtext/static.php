<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/subtext';

wp_enqueue_style(
    'lakshmi-subtext-shortcode',
    $uri . '/static/css/styles.css'
);
