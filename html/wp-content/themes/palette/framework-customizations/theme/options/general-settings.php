<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title' => __('General', 'palette'),
		'type' => 'tab',
		'options' => array(
			'lsi_theme_layout' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'value' => array(
					'type' => 'fullwidth', ),
				'picker' => array(
					'type' => array(
						'label' => __('Theme Layout', 'palette'),
						'type' => 'radio',
						'choices' => array(
							'fullwidth' => __('Fullwidth', 'palette'),
							'boxed' => __('Boxed', 'palette'),
							'sidepadding' => __('Side Padding', 'palette')
						),
					)
				),
				'choices' => array(
					'boxed' => array(
						'lsi_boxed_width'     => array(
							'label'      => __( 'Box Width', 'palette'),
							'type'       => 'slider',
							'value'      => 1200,
							'properties' => array(
								'min' => 1200,
								'max' => 1920,
								'sep' => 1,
							),
							'desc'       => __( 'The width of the box.', 'palette'),
						),
						'lsi_boxed_margin_top' => array(
							'label' => __('Margin Top', 'palette'),
							'type' => 'slider',
							'value' => 0,
							'desc' => __('Margin at the top of the box. (px)', 'palette'),
						),
						'lsi_boxed_margin_bottom' => array(
							'label' => __('Margin Bottom', 'palette'),
							'type' => 'slider',
							'value' => 0,
							'desc' => __('Margin at the bottom of the box. (px)', 'palette'),
						),
						'lsi_boxed_background_color' => array(
							'label' => __('Body Background Color', 'palette'),
							'type' => 'rgba-color-picker',
							'value' => '#000000',
							'desc' => __('Pick a color for the background.', 'palette'),
						),
						'lsi_boxed_background_image' => array(
							'label' => __('Body Background Image', 'palette'),
							'desc' => __('Upload an image for the background.', 'palette'),
							'type' => 'upload',
						),
						'lsi_boxed_image_size' => array(
							'label' => __('Body Background Image Size', 'palette'),
							'type' => 'short-select',
							'value' => 'inherit',
							'choices' => array(
								'inherit' => __( 'inherit', 'palette'),
								'initial' => __( 'initial', 'palette'),
								'cover' => __( 'cover', 'palette'),
								'contain' => __( 'contain', 'palette'),
							),
						),
						'lsi_boxed_image_repeat' => array(
							'label' => __('Body Background Image Repeat', 'palette'),
							'type' => 'short-select',
							'value' => 'no-repeat',
							'choices' => array(
								'no-repeat' => __( 'no-repeat', 'palette'),
								'repeat' => __( 'repeat', 'palette'),
								'repeat-x' => __( 'repeat-x', 'palette'),
								'repeat-y' => __( 'repeat-y', 'palette'),
							),
						),
						'lsi_boxed_image_fixed' => array(
							'label'        => __( 'Fixed Body Background Image', 'palette'),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __( 'Yes', 'palette')
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => __( 'No', 'palette')
							),
							'value'        => 'no',
						),
					),
					'sidepadding' => array(
						'lsi_sidepadding'     => array(
							'label'      => __( 'Padding Size', 'palette' ),
							'type'       => 'slider',
							'value'      => 10,
							'properties' => array(
								'min' => 0,
								'max' => 150,
								'sep' => 1,
							),
							'desc'       => __( 'Padding in px.', 'palette' ),
						),
						'lsi_sidepadding_background_color' => array(
							'label' => __('Body Background Color', 'palette'),
							'type' => 'rgba-color-picker',
							'value' => '#18f5b6',
							'desc' => __('Pick a color for the background.', 'palette'),
						),
						'lsi_sidepadding_background_image' => array(
							'label' => __('Body Background Image', 'palette'),
							'desc' => __('Upload an image for the background.', 'palette'),
							'type' => 'upload',
						),
						'lsi_sidepadding_image_size' => array(
							'label' => __('Body Background Image Size', 'palette'),
							'type' => 'short-select',
							'value' => 'inherit',
							'choices' => array(
								'inherit' => __( 'inherit', 'palette'),
								'initial' => __( 'initial', 'palette'),
								'cover' => __( 'cover', 'palette'),
								'contain' => __( 'contain', 'palette'),
							),
						),
						'lsi_sidepadding_image_repeat' => array(
							'label' => __('Body Background Image Repeat', 'palette'),
							'type' => 'short-select',
							'value' => 'no-repeat',
							'choices' => array(
								'no-repeat' => __( 'no-repeat', 'palette'),
								'repeat' => __( 'repeat', 'palette'),
								'repeat-x' => __( 'repeat-x', 'palette'),
								'repeat-y' => __( 'repeat-y', 'palette'),
							),
						),
						'lsi_sidepadding_image_fixed' => array(
							'label'        => __( 'Fixed Body Background Image', 'palette' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __( 'Yes', 'palette' )
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => __( 'No', 'palette' )
							),
							'value'        => 'no',
						),
					),
				),
				'show_borders' => false,
			),
			'lsi_page_background_color' => array(
				'label' => __('Page Background Color', 'palette'),
				'type' => 'rgba-color-picker',
				'value' => '#18f5b6',
				'desc' => __('Pick a color for page background',
					'palette'),
			),
			'lsi_page_background_image' => array(
				'label' => __('Page Background Image', 'palette'),
				'desc' => __('Upload an image for page background.', 'palette'),
				'type' => 'upload',
			),
			'lsi_page_image_size' => array(
				'label' => __('Page Background Image Size', 'palette'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'palette'),
					'initial' => __( 'initial', 'palette'),
					'cover'   => __( 'cover', 'palette'),
					'contain' => __( 'contain', 'palette'),
				),
			),
			'lsi_page_image_repeat' => array(
				'label' => __('Page Background Image Repeat', 'palette'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat'=> __( 'no-repeat', 'palette'),
					'repeat'   => __( 'repeat', 'palette'),
					'repeat-x' => __( 'repeat-x', 'palette'),
					'repeat-y' => __( 'repeat-y', 'palette'),
				),
			),
			'lsi_enable_responsive'                    => array(
				'label'        => __( 'Enable Responsive', 'palette'),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'palette')
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'palette')
				),
				'value'        => 'yes',
				'desc'         => __( 'Enable the responsive behaviour of the theme.', 'palette'),
			),
			'lsi_read_more_text' => array(
				'label' => __('Read More', 'palette'),
				'desc' => __('Default "Read more" text on buttons.', 'palette'),
				'type' => 'text',
				'value' => 'Read more'
			),
			'lsi_404_page'          => array(
				'label'   => __( 'Unique 404 Page', 'palette'),
				'desc'    => __( 'If You need unique design, select the 404 error page', 'palette'),
				'value'   => '',
				'type'    => 'select',
				'choices' => lakshmi_lite_all_pages(),
			),
			'lsi_gmap_key' => array(
				'label' => __( 'Google Maps', 'palette' ),
				'type'  => 'text',
				'desc' => sprintf( __( 'Create an account in %1$sGoogle Console%2$s and add the API Key.', 'palette' ), '<a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">', '</a>' )
			),
			'lsi_custom_css'          => array(
				'label'   => __( 'Custom CSS', 'palette' ),
				'desc'    => __( 'Add Your custom CSS here', 'palette' ),
				'value'   => '',
				'type'    => 'textarea',
			),
		)
	)
);