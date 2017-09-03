<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/separator';

wp_enqueue_style(
    'lakshmi-separator-shortcode',
    $uri . '/static/css/styles.css'
);
