<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/heading';

wp_enqueue_style(
    'lakshmi-heading-shortcode',
    $uri . '/static/css/styles.css'
);
