<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/quote-carousel';

wp_enqueue_style(
    'lakshmi-quote-carousel-shortcode',
    $uri . '/static/css/styles.css'
);