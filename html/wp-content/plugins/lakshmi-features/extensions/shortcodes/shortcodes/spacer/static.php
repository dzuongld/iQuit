<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/spacer';

wp_enqueue_style(
    'lakshmi-spacer-shortcode',
    $uri . '/static/css/styles.css'
);
