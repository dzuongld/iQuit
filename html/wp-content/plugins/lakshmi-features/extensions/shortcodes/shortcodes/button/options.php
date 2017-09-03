<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'  => array(
		'label' => __( 'Button Label', 'lakshmi-features' ),
		'desc'  => __( 'This is the text that appears on your button.', 'lakshmi-features' ),
		'type'  => 'text',
	),
	'link'   => array(
		'label' => __( 'Button Link', 'lakshmi-features' ),
		'desc'  => __( 'Where should your button link to.', 'lakshmi-features' ),
		'type'  => 'text',
		'value' => '#'
	),
	'color'  => array(
		'label'   => __( 'Color Type', 'lakshmi-features' ),
		'desc'    => __( 'Select the color type.', 'lakshmi-features' ),
		'type'    => 'select',
		'choices' => array(
			'basic' => __('basic', 'lakshmi-features'),
			'inverse' => __('basic 2', 'lakshmi-features'),
			'bw' => __('black & white', 'lakshmi-features'),
			'custom' => __('custom', 'lakshmi-features'),
		)
	),
	'custom_color'              => array(
		'label' => __( 'Custom Background Color', 'lakshmi-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for custom button.', 'lakshmi-features' ),
	),
	'custom_font_color'              => array(
		'label' => __( 'Unique Font Color', 'lakshmi-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for the button.', 'lakshmi-features' ),
	),
	'size'  => array(
		'label'   => __( 'Size', 'lakshmi-features' ),
		'desc'    => __( 'Select the size.', 'lakshmi-features' ),
		'type'    => 'select',
		'choices' => array(
			'' => '',
			'small' => __('small', 'lakshmi-features'),
			'normal' => __('normal', 'lakshmi-features'),
			'big' => __('big', 'lakshmi-features'),
			'bigger' => __('bigger', 'lakshmi-features'),
		)
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'lakshmi-features' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window.', 'lakshmi-features' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'lakshmi-features'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'lakshmi-features'),
		),
	),
	'icon_position'  => array(
		'label'   => __( 'Enable Icon', 'lakshmi-features' ),
		'desc'    => __( 'Left or right.', 'lakshmi-features' ),
		'type'    => 'select',
		'value'	  => 'none',
		'choices' => array(
			'none' => __('none', 'lakshmi-features'),
			'right' => __('right', 'lakshmi-features'),
			'left' => __('left', 'lakshmi-features'),
		)
	),
	'icon' => array(
		'label' => __('Icon', 'lakshmi-features'),
		'type' => 'icon',
		'set' => 'lakshmi',
		'value' => 'fa fa-1-no-icon',
		'desc' => __('Select the icon.', 'lakshmi-features'),
	),
	'border_radius'   => array(
		'label' => __( 'Border Radius', 'lakshmi-features' ),
		'desc'  => __( 'Add css code or leave it blank.', 'lakshmi-features' ),
		'type'  => 'text',
		'value' => ''
	),
);