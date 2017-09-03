<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/blogger-post';

wp_enqueue_style(
    'lakshmi-blogger-post-shortcode',
    $uri . '/static/css/styles.css'
);