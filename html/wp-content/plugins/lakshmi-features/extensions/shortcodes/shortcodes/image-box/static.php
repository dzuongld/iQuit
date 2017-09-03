<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/image-box';

wp_enqueue_style(
    'lakshmi-image-box-shortcode',
    $uri . '/static/css/styles.css'
);
