<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_style('fw-ext-builder-frontend-grid');

$options = array(
	'paddings'      => array(
		'type'    => 'group',
		'options' => array(
			'padding_label'     => array(
				'type'  => 'html',
				'value' => '',
				'label' => __( 'Padding', 'lakshmi-features' ),
				'html'  => '',
			),
			'top' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 0,
				'desc'  => __( 'top.', 'lakshmi-features' ),
			),
			'right' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 15,
				'desc'  => __( 'right', 'lakshmi-features' ),
			),
			'bottom' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 0,
				'desc'  => __( 'bottom', 'lakshmi-features' ),
			),
			'left' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 15,
				'desc'  => __( 'left', 'lakshmi-features' ),
			),
		)
	),
	'background_options' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'background' => array(
				'label'   => __( 'Background', 'lakshmi-features' ),
				'desc'    => __( 'Background type for the section.', 'lakshmi-features' ),
				'attr'    => array( 'class' => 'fw-background-selector' ),
				'type'    => 'radio',
				'choices' => array(
					'none'           => __( 'None', 'lakshmi-features' ),
					'image'          => __( 'Image', 'lakshmi-features' ),
					'color'          => __( 'Color', 'lakshmi-features' ),
					'gradient_color' => __( 'Gradient Color', 'lakshmi-features' ),
				),
				'value'   => 'none'
			),
		),
		'choices'      => array(
			'none'           => array(),
			'image'          => array(
				'bgimage'            => array(
					'type'  => 'upload',
					'label' => __( 'Background Image', 'lakshmi-features' ),
					'desc'  => __( 'Add the link of Your image.', 'lakshmi-features' )
				),
				'bgimage_bgcolor' => array(
					'label' => __('Background Color', 'lakshmi-features'),
					'desc'  => __('Select the background color.', 'lakshmi-features'),
					'type'  => 'color-picker',
				),
				'image_size' => array(
					'label' => __('Background Image Size', 'lakshmi-features'),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'inherit' => 'inherit',
						'initial' => 'initial',
						'cover' => 'cover',
						'contain' => 'contain',
					),
				),
				'image_repeat' => array(
					'label' => __('Background Image Repeat', 'lakshmi-features'),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat' => 'no-repeat',
						'repeat' => 'repeat',
						'repeat-x' => 'repeat-x',
						'repeat-y' => 'repeat-y',
					),
				),
			),
			'color'          => array(
				'background_color' => array(
					'label' => __('Background Color', 'lakshmi-features'),
					'desc'  => __('Select the background color.', 'lakshmi-features'),
					'type'  => 'color-picker',
				),
			),
			'gradient_color' => array(
				'gradient_type' => array(
					'label'   => __( 'Gradient Type', 'lakshmi-features' ),
					'desc'    => __( 'Select the gradient type.', 'lakshmi-features' ),
					'type'    => 'short-select',
					'choices' => array(
						'vertical'        => __( 'Vertical', 'lakshmi-features' ),
						'horizontal'      => __( 'Horizontal', 'lakshmi-features' ),
						'radial'          => __( 'Radial', 'lakshmi-features' ),
					),
					'value'   => 'vertical'
				),
				'gradient_bg_color_1'    => array(
					'type'  => 'color-picker',
					'label' => __( 'Gradient Color 1', 'lakshmi-features' ),
					'desc'  => __( 'Select the gradient color.', 'lakshmi-features' ),
				),
				'gradient_bg_color_2'    => array(
					'type'  => 'color-picker',
					'label' => __( 'Gradient Color 2', 'lakshmi-features' ),
					'desc'  => __( 'Select the gradient color.', 'lakshmi-features' ),
				),
			),
		),
		'show_borders' => false,
	),
	'border'       => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'on_off' => array(
				'label'        => __( 'Border', 'lakshmi-features' ),
				'type'         => 'switch',
				'desc'         => __( 'Turn on if You want to add borders.', 'lakshmi-features' ),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'lakshmi-features' ),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'lakshmi-features' ),
				),
				'value'        => 'no',
			),
		),
		'choices' => array(
			'yes' => array(
				'border_top'       => array(
					'type'  => 'text',
					'label' => __( 'Border Top', 'lakshmi-features' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'lakshmi-features' )
				),
				'border_bottom'       => array(
					'type'  => 'text',
					'label' => __( 'Border Bottom', 'lakshmi-features' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'lakshmi-features' )
				),
				'border_left'       => array(
					'type'  => 'text',
					'label' => __( 'Border Left', 'lakshmi-features' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'lakshmi-features' )
				),
				'border_right'       => array(
					'type'  => 'text',
					'label' => __( 'Border Right', 'lakshmi-features' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'lakshmi-features' )
				),
			),
		),
	),
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'lakshmi-features' ),
		'desc'  => __( 'Set the align.', 'lakshmi-features' ),
		'value' => '',
		'choices' => array(
			'' => '',
			'left' => __('left', 'lakshmi-features'),
			'right' => __('right', 'lakshmi-features'),
			'center' => __('center', 'lakshmi-features'),
		),
	),
	'max_width'       => array(
		'type'  => 'text',
		'label' => __( 'Content Max Width', 'lakshmi-features' ),
		'value' => '',
		'desc'  => __( 'Add max-width css for the content, if You don`t want to fill the whole column.', 'lakshmi-features' )
	),
	'content_position' => array(
		'label' => __('Content Position', 'lakshmi-features'),
		'type' => 'short-select',
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'lakshmi-features'),
			'left' => __('left', 'lakshmi-features'),
			'right' => __('right', 'lakshmi-features'),
		),
		'desc'  => __( 'The position of the content. (Only if max-width value added.)', 'lakshmi-features' )
	),
	'customclass'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Class', 'lakshmi-features' ),
		'desc'  => __( 'Add custom class, if You need.', 'lakshmi-features' )
	),
	'responsive_behaviour_text'                      => array(
		'label' => __( 'Responsive Behaviour', 'lakshmi-features' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'hide_on_desktop'                    => array(
		'label'        => __( 'Hide on Desktop', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is above 1199px.', 'lakshmi-features' ),
	),
	'hide_on_smaller'                    => array(
		'label'        => __( 'Hide on Smaller Screen', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 1199px and 992px.', 'lakshmi-features' ),
	),
	'width_on_smaller'                    => array(
		'label'        => __( '1/1 Width on Smaller Screen', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'no',
		'desc'         => __( '100% width if media screen is between 1199px and 992px.', 'lakshmi-features' ),
	),
	'hide_on_tablet'                    => array(
		'label'        => __( 'Hide on Tablet', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 991px and 768px.', 'lakshmi-features' ),
	),
	'width_on_tablet'                    => array(
		'label'        => __( '1/1 Width on Tablet', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'no',
		'desc'         => __( '100% width if media screen is between 991px and 768px.', 'lakshmi-features' ),
	),
	'hide_on_mobile'                    => array(
		'label'        => __( 'Hide on Mobile', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is under 767px.', 'lakshmi-features' ),
	),
);