<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'size'  => array(
		'label'   => __( 'Size', 'lakshmi-features' ),
		'desc'    => __( 'Select the size of the separator.', 'lakshmi-features' ),
		'type'    => 'select',
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'lakshmi-features'),
			'small' => __('Small', 'lakshmi-features')
		)
	),
	'color'              => array(
		'label' => __( 'Color', 'lakshmi-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code.', 'lakshmi-features' ),
	),
	'margin' => array(
		'label' => __( 'Margin', 'lakshmi-features' ),
		'type'  => 'slider',
		'value' => 10,
		'desc'  => __( 'Add the size of the margin (px).', 'lakshmi-features' ),
	),
	'icon'  		=> array(
		'label' => __( 'Icon', 'lakshmi-features' ),
		'desc'  => __( 'Select an icon.', 'lakshmi-features' ),
		'type' => 'icon',
		'set' => 'lakshmi',
		'value' => 'fa fa-lakshmi-buddha',
	),
);