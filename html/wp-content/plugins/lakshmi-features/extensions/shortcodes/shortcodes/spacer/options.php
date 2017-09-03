<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'height' => array(
		'label' => __( 'Height', 'lakshmi-features' ),
		'type'  => 'slider',
		'value' => 30,
		'desc'  => __( 'Spacer`s height (px).', 'lakshmi-features' ),
	),
);