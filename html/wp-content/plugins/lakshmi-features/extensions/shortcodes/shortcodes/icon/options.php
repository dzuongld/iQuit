<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'  		=> array(
		'label' => __( 'Icon', 'lakshmi-features' ),
		'desc'  => __( 'Select an icon.', 'lakshmi-features' ),
		'type' => 'icon',
		'set' => 'lakshmi',
		'value' => 'fa fa-lakshmi-bamboo',
	),
);