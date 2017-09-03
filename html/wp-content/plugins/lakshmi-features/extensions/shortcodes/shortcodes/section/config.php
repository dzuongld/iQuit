<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'         => esc_html__( 'Layout Elements', 'lakshmi-features' ),
		'title'       => esc_html__( 'Section', 'lakshmi-features' ),
		'description' => esc_html__( 'Add a Section', 'lakshmi-features' ),
		'popup_size'  => 'large',
		'type'        => 'section' // WARNING: Do not edit this
	)
);