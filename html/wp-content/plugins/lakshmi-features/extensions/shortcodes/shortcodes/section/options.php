<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'fullwidth'                    => array(
		'label'        => __( 'Full Width', 'lakshmi-features' ),
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
		'desc'         => __( 'Set if You want Full Width. Only suggested on one column page.', 'lakshmi-features' ),
	),
	'container'                    => array(
		'label'        => __( 'Container', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'yes',
		'desc'         => __( 'If You don`t need container for the content, switch it off.', 'lakshmi-features' ),
	),
	'padding' => array(
		'label' => __( 'Padding', 'lakshmi-features' ),
		'type'  => 'slider',
		'value' => 0,
		'desc'  => __( 'Add the size of the padding at the bottom and the top. (px)', 'lakshmi-features' ),
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
				'image_position'   => array(
					'type'  => 'select',
					'label' => __( 'Image Position', 'lakshmi-features' ),
					'desc'  => __( 'The position of the image.', 'lakshmi-features' ),
					'value' => 'background',
					'choices' => array(
						'background' => __('Background', 'lakshmi-features'),
						'pattern' => __('Pattern', 'lakshmi-features'),
						'left' => __('Left', 'lakshmi-features'),
						'right' => __('Right', 'lakshmi-features')
					),
				),
				'parallax'                    => array(
					'label'        => __( 'Fixed', 'lakshmi-features' ),
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
					'desc'         => __( 'Set if You want fixed image.', 'lakshmi-features' ),
				),
				'layer' => array(
					'label' => __( 'Layer Opacity', 'lakshmi-features' ),
					'type'  => 'slider',
					'value' => 0,
					'desc'  => __( 'Add a number for the layer opacity (0-99). This will appear over the image.', 'lakshmi-features' ),
				),
				'layer_color' => array(
					'label' => __('Layer Color', 'lakshmi-features'),
					'desc'  => __('Select the color.', 'lakshmi-features'),
					'type'  => 'color-picker',
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
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'lakshmi-features' ),
		'desc'  => __( 'Set the align.', 'lakshmi-features' ),
		'value' => 'left',
		'choices' => array(
			'left' => __('left', 'lakshmi-features'),
			'right' => __('right', 'lakshmi-features'),
			'center' => __('center', 'lakshmi-features'),
		),
	),
	'color' => array(
		'label' => __('Font Color', 'lakshmi-features'),
		'desc'  => __('Select the color', 'lakshmi-features'),
		'type'  => 'color-picker',
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
	'overlap'       => array(
		'type'  => 'text',
		'label' => __( 'Overlap', 'lakshmi-features' ),
		'desc'  => __( 'Add a number value for the overlap.', 'lakshmi-features' )
	),
	'customid'       => array(
		'type'  => 'text',
		'label' => __( 'Section ID', 'lakshmi-features' ),
		'desc'  => __( 'Add a custom id. You can use it for linking.', 'lakshmi-features' )
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
