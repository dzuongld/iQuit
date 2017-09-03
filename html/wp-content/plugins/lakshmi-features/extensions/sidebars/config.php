<?php

$cfg = array();

/**
 * Config example
 */

/*
$cfg['sidebar_positions'] = array(
	'full' => array(
		'icon_url' => 'full.png',
		'sidebars_number' => 0
	),
	'left' => array(
		'icon_url' => 'left.png',
		'sidebars_number' => 1
	),
	'right' => array(
		'icon_url' => 'right.png',
		'sidebars_number' => 1
	),
	'left_right' => array(
		'icon_url' => 'left_right.png',
		'sidebars_number' => 2
	),
);
*/

$cfg['dynamic_sidebar_args'] = array(
	'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s"><div class="box">',
	'after_widget' 		=> '<div class="clear"></div></div></li></ul>',
	'before_title' 		=> '<h3 class="widget-title">',
	'after_title' 			=> '</h3>',
);


/**
 * Render sidebar metabox in post types.
 */
$cfg['show_in_post_types'] = false;
