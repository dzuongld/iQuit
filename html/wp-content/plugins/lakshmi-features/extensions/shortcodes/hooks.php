<?php if (!defined('FW')) die('Forbidden');

function _filter_theme_disable_default_shortcodes($to_disable) {
    $to_disable[] = 'accordion';
	$to_disable[] = 'calendar';
    $to_disable[] = 'contact_form';
	$to_disable[] = 'divider';
	$to_disable[] = 'notification';
	$to_disable[] = 'special_heading';
	$to_disable[] = 'tabs';
	$to_disable[] = 'team_member';
	$to_disable[] = 'testimonials';

    return $to_disable;
}
add_filter('fw_ext_shortcodes_disable_shortcodes', '_filter_theme_disable_default_shortcodes');