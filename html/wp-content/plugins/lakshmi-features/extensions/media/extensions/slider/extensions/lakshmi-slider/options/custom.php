<?php if (!defined('FW')) die('Forbidden');
/*
 * options.php - extra options shown after default options on add and edit slider page.
*/
					
$options = array(
	'lsi_ta' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Text Area', 'lakshmi-features'),
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
				'desc' => __('Turn on or off.', 'lakshmi-features'),
			)
		),
		'choices' => array(
			'on' => array(
				'lsi_ta_align' => array(
					'label' => __('Align', 'lakshmi-features'),
					'type' => 'switch',
					'right-choice' => array(
						'value' => 'right',
						'label' => __('Right', 'lakshmi-features')
					),
					'left-choice' => array(
						'value' => 'left',
						'label' => __('Left', 'lakshmi-features')
					),
					'value' => 'left',
				),
				'lsi_ta_pos_top' => array(
					'label' => __('Position from the top', 'lakshmi-features'),
					'type' => 'text',
					'value' => '25%'
				),
				'lsi_ta_pos_side' => array(
					'label' => __('Position from the side edge', 'lakshmi-features'),
					'type' => 'text',
					'value' => '1%'
				),
				'lsi_ta_subtitle' => array(
					'label' => __('Subtitle', 'lakshmi-features'),
					'type' => 'text',
					'value' => ''
				),
				'lsi_ta_text' => array(
					'label' => __('Text', 'lakshmi-features'),
					'type' => 'textarea',
					'value' => ''
				),
				'lsi_ta_button_1' => array(
					'label' => __('Button 1 Text', 'lakshmi-features'),
					'type' => 'text',
					'value' => ''
				),
				'lsi_ta_b1_url' => array(
					'label' => __('Button 1 URL', 'lakshmi-features'),
					'type' => 'text',
					'value' => ''
				),
				'lsi_ta_button_2' => array(
					'label' => __('Button 2 Text', 'lakshmi-features'),
					'type' => 'text',
					'value' => ''
				),
				'lsi_ta_b2_url' => array(
					'label' => __('Button 2 URL', 'lakshmi-features'),
					'type' => 'text',
					'value' => ''
				),
			),

		),
		'show_borders' => false,
	),
	'lsi_pis' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Parallax Image', 'lakshmi-features' ),
		'popup-title'   => __( 'Parallax Image options.', 'lakshmi-features' ),
		'desc'          => __( 'Add parallax images to Your slide.', 'lakshmi-features' ),
		'popup-options' => array(
			'lsi_pi_image' => array(
				'label' => __('Image', 'lakshmi-features'),
				'desc' => __('Upload the parallax image.', 'lakshmi-features'),
				'type' => 'upload',
			),
			'lsi_pi_top' => array(
				'label' => __('Position Top', 'lakshmi-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'lakshmi-features'),
			),
			'lsi_pi_right' => array(
				'label' => __('Position Right', 'lakshmi-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'lakshmi-features'),
			),
			'lsi_pi_bottom' => array(
				'label' => __('Position Bottom', 'lakshmi-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'lakshmi-features'),
			),
			'lsi_pi_left' => array(
				'label' => __('Position Left', 'lakshmi-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'lakshmi-features'),
			),
			'lsi_pi_name' => array(
				'label' => __('Name of the image', 'lakshmi-features'),
				'type' => 'text',
				'value' => '',
			),
		),
	),
);