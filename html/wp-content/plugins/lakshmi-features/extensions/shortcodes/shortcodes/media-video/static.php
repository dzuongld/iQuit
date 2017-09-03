<?php if (!defined('FW')) die('Forbidden');

$uri = LAKSHMI_PLUGIN_URL .'/extensions/shortcodes/shortcodes/media-video';

wp_enqueue_style(
    'lakshmi-media-video-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'lakshmi-media-video-shortcode-script',
    $uri . '/static/js/video.js'
);