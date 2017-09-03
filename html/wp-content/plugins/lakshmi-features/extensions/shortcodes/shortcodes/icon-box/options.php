<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'                  => array(
		'label' => __( 'Title', 'lakshmi-features' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add the title.', 'lakshmi-features' ),
	),
	'icon' => array(
		'label' => __('Icon', 'lakshmi-features'),
		'type' => 'icon',
		'set' => 'lakshmi',
		'value' => 'fa fa-lakshmi-bamboo',
		'desc' => __('Select the icon.', 'lakshmi-features'),
	),
	'link'                  => array(
		'label' => __( 'Link', 'lakshmi-features' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add a link or leave it blank.', 'lakshmi-features' ),
	),
	'content'                  => array(
		'label' => __( 'Content', 'lakshmi-features' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'lakshmi-features' ),
	),
);