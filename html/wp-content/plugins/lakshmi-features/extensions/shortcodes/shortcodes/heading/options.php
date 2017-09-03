<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'lakshmi-features' ),
		'desc'  => __( 'Add the content.', 'lakshmi-features' )
	),
	'h'   => array(
		'type'  => 'select',
		'label' => __( 'Size', 'lakshmi-features' ),
		'desc'  => __( 'Select the font size.', 'lakshmi-features' ),
		'value' => '2',
		'choices' => array(
			'1' => __('h1', 'lakshmi-features'),
			'2' => __('h2', 'lakshmi-features'),
			'3' => __('h3', 'lakshmi-features'),
			'4' => __('h4', 'lakshmi-features'),
			'5' => __('h5', 'lakshmi-features'),
			'6' => __('h6', 'lakshmi-features'),
		),
	),
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
	'font_style'   => array(
		'type'  => 'select',
		'label' => __( 'Font Style', 'lakshmi-features' ),
		'desc'  => __( 'Select one from the preselected font styles.', 'lakshmi-features' ),
		'value' => '1',
		'choices' => array(
			'1' => __('primary', 'lakshmi-features'),
			'2' => __('secondary', 'lakshmi-features'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'lakshmi-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'lakshmi-features' ),
	),
	'allow_icon' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Icon', 'lakshmi-features'),
				'type' => 'switch',
				'right-choice' => array(
					'value' => 'off',
					'label' => __('Off', 'lakshmi-features')
				),
				'left-choice' => array(
					'value' => 'on',
					'label' => __('On', 'lakshmi-features')
				),
				'value' => 'off',
				'desc' => __('Turn on if You want to display icon next to the title.', 'lakshmi-features'),
			)
		),
		'choices' => array(
			'on' => array(
				'icon'  		=> array(
					'label' => __( 'Icon', 'lakshmi-features' ),
					'desc'  => __( 'Select an icon.', 'lakshmi-features' ),
					'type' => 'icon',
					'set' => 'lakshmi',
					'value' => 'fa fa-1-no-icon',
				),
			),

		),
		'show_borders' => false,
	),
	'border' => array(
		'label' => __('Underline', 'lakshmi-features'),
		'type' => 'slider',
		'desc'  => __( 'Select the size of the bottom border.', 'lakshmi-features' ),
		'value' => 0,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'sep' => 1,
		),
	),
	'fw_border'              => array(
		'label' => __( 'Fullwidth Underline', 'lakshmi-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code, If You want fullwidth underline.', 'lakshmi-features' ),
	),
);