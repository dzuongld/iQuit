<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Align', 'lakshmi-features' ),
		'desc'  => __( 'Set the align.', 'lakshmi-features' ),
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'lakshmi-features'),
			'left' => __('left', 'lakshmi-features'),
			'right' => __('right', 'lakshmi-features'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'lakshmi-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'lakshmi-features' ),
	),
	'content'                  => array(
		'label' => __( 'Text', 'lakshmi-features' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'lakshmi-features' ),
	),
);