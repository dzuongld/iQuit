<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/icon';

wp_enqueue_style(
    'lakshmi-icon-shortcode',
    $uri . '/static/css/styles.css'
);
