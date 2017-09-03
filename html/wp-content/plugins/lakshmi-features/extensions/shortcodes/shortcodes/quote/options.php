<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'author'   => array(
		'label' => __( 'Author', 'lakshmi-features' ),
		'desc'  => __( 'Add the author.', 'lakshmi-features' ),
		'type'  => 'text',
	),
	'style'  => array(
		'label'   => __( 'Style', 'lakshmi-features' ),
		'desc'    => __( 'Select one from the styles.', 'lakshmi-features' ),
		'type'    => 'select',
		'value'	  => '1',
		'choices' => array(
			'1' => __('1', 'lakshmi-features'),
			'2' => __('2', 'lakshmi-features'),
		)
	),
	'content'  => array(
		'label' => __( 'Content', 'lakshmi-features' ),
		'desc'  => __( 'Add the content.', 'lakshmi-features' ),
		'type'  => 'textarea',
	),
);