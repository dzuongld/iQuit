<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header' => array(
		'title' => __('Header', 'palette'),
		'type' => 'tab',
		'options' => array(
			'lsi_header_layout'	=> array(
				'label'   => __( 'Header Layout', 'palette'),
				'type'    => 'radio',
				'value'   => 'logo-menu-buttons',
				'desc'    => __( 'Choose one of the header layouts.', 'palette'),
				'choices' => array(
					'logo-menu-buttons' => __( 'Logo - Menu - Buttons', 'palette'),
					'logo-rightmenu-buttons' => __( 'Logo - Right Menu - Buttons', 'palette'),
					'toplogo-centermenu-centerbuttons' => __( 'Top Logo - Center Menu - Buttons', 'palette' ),
					'toplogowa-menu-buttons' => __( 'Top Logo With Ad - Menu - Buttons', 'palette'),
				),
			),
			'lsi_header_style_text'                      => array(
				'label' => __( 'Header Style', 'palette'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the header as You want.', 'palette'),
				'html'  => '',
			),
			'lsi_header_background_image' => array(
				'label' => __('Header Background Image', 'palette'),
				'desc' => __('Upload an image for header background.', 'palette'),
				'type' => 'upload',
			),
			'lsi_header_image_size' => array(
				'label' => __('Header Background Image Size', 'palette'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'palette'),
					'initial' => __( 'initial', 'palette'),
					'cover'   => __( 'cover', 'palette'),
					'contain' => __( 'contain', 'palette'),
				),
			),
			'lsi_header_image_repeat' => array(
				'label' => __('Header Background Image Repeat', 'palette'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat'=> __( 'no-repeat', 'palette'),
					'repeat'   => __( 'repeat', 'palette'),
					'repeat-x' => __( 'repeat-x', 'palette'),
					'repeat-y' => __( 'repeat-y', 'palette'),
				),
			),
			'lsi_logo_style_text'                      => array(
				'label' => __( 'Logo Style', 'palette'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the logo area as You want.', 'palette'),
				'html'  => '',
			),
			'lsi_logo_type' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'value' => array(
					'logo' => 'text', ),
				'picker' => array(
					'logo' => array(
						'label' => __('Logo Type', 'palette'),
						'type' => 'radio',
						'choices' => array(
							'text' => __('Text-based Logo', 'palette'),
							'image' => __('Image Logo', 'palette')
						),
						'desc' => __('Select one from the logo types and add the content.',
							'palette'),
					)
				),
				'choices' => array(
					'image' => array(
						'lsi_logo_image' => array(
							'label' => __('Logo Image', 'palette'),
							'desc' => __('Upload the logo image.', 'palette'),
							'type' => 'upload',
						),
					),
				),
				'show_borders' => false,
			),
			'lsi_logo_padding' => array(
				'label' => __('Logo Padding', 'palette'),
				'desc' => __('Padding CSS value for the logo area (top, right, bottom, left).', 'palette'),
				'type' => 'text',
				'value' => '12px 40px 20px 0'
			),
			'lsi_tagline' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Display Tagline', 'palette'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'off',
							'label' => __('Off', 'palette')
						),
						'left-choice' => array(
							'value' => 'on',
							'label' => __('On', 'palette')
						),
						'value' => 'off',
						'desc' => __('Display tagline under the logo.', 'palette'),
					)
				),
				'show_borders' => false,
			),
			'lsi_logo_advert' => array(
				'label' => __('Header Banner Ad (728 X 90)', 'palette'),
				'desc' => __('Adsense, Buy Sell Ads or Custom Code, if You`ve choosen "Top Logo With Ad" style.', 'palette'),
				'type' => 'textarea',
				'value' => ''
			),
			'lsi_menu_item_text'                      => array(
				'label' => __( 'Menu Item', 'palette'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_menu_item_mr' => array(
				'label' => __('Menu Item Margin Right', 'palette'),
				'type' => 'slider',
				'value' => 5,
			),
			'lsi_menu_item_pt' => array(
				'label' => __('Menu Item Padding Top', 'palette'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_menu_item_pr' => array(
				'label' => __('Menu Item Padding Right', 'palette'),
				'type' => 'slider',
				'value' => 8,
			),
			'lsi_menu_item_pb' => array(
				'label' => __('Menu Item Padding Bottom', 'palette'),
				'type' => 'slider',
				'value' => 25,
			),
			'lsi_menu_item_pl' => array(
				'label' => __('Menu Item Padding Left', 'palette'),
				'type' => 'slider',
				'value' => 8,
			),
			'lsi_menu_item_hover_effect' => array(
				'label' => __('Menu Item Hover Effect', 'palette'),
				'type' => 'select',
				'value' => 'line-through',
				'choices' => array(
					'none'       => __('none', 'palette'),
					'line-animation' => __('line-animation', 'palette'),
					'line-through' => __('line-through', 'palette'),
					'overline'  => __('overline', 'palette'),
					'underline'  => __('underline', 'palette'),
				),
			),
			'lsi_menu_item_transition' => array(
				'type' => 'text',
				'label' => __('Item Transition Speed', 'palette'),
				'value' => '0.2',
				'desc' => __('Add the speed of the hover effect in sec.', 'palette'),
			),
			'lsi_submenu_item_text'                      => array(
				'label' => __( 'Submenu Item', 'palette'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_submenu_allow_icon'                    => array(
				'label'        => __( 'Submenu Indicator', 'palette'),
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
				'desc'         => __( 'Allow submenu indicator icon.', 'palette'),
			),
			'lsi_submenu_width' => array(
				'label' => __('Submenu width', 'palette'),
				'type' => 'slider',
				'value' => 12,
				'desc' => __('Add the width of the submenu.', 'palette'),
			),
			'lsi_submenu_item_pt' => array(
				'label' => __('Submenu Item Padding Top', 'palette'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pr' => array(
				'label' => __('Submenu Item Padding Right', 'palette'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pb' => array(
				'label' => __('Submenu Item Padding Bottom', 'palette'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pl' => array(
				'label' => __('Submenu Item Padding Left', 'palette'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_hover_effect' => array(
				'label' => __('Item Hover Effect', 'palette'),
				'type' => 'select',
				'value' => 'none',
				'choices' => array(
					'none'       => __('none', 'palette'),
					'line-through' => __('line-through', 'palette'),
					'overline'  => __('overline', 'palette'),
					'underline'  => __('underline', 'palette'),
				),
			),
			'lsi_header_buttons_text'                      => array(
				'label' => __( 'Header Buttons', 'palette'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_header_buttons' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Allow Buttons', 'palette'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'off',
							'label' => __('Off', 'palette')
						),
						'left-choice' => array(
							'value' => 'on',
							'label' => __('On', 'palette')
						),
						'value' => 'on',
						'desc' => __('Turn on or off.', 'palette'),
					)
				),
				'choices' => array(
					'on' => array(
						'lsi_hb_padding' => array(
							'label' => __('Buttons Area Padding', 'palette'),
							'desc' => __('Buttons area padding (top, right, bottom, left).', 'palette'),
							'type' => 'text',
							'value' => '10px 0 20px 10px'
						),
						'lsi_hb_ivp' => array(
							'label' => __('Buttons Inner Vertical Padding', 'palette'),
							'type' => 'slider',
							'value' => 5,
						),
						'lsi_hb_ihp' => array(
							'label' => __('Buttons Inner Horizontal Padding', 'palette'),
							'type' => 'slider',
							'value' => 10,
						),
						'lsi_hb_search'                    => array(
							'label'        => __( 'Search Button', 'palette'),
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
							'desc'         => __( 'Allow search field on header.', 'palette'),
						),
						'lsi_text' => array(
							'type' => 'text',
							'label' => __('Extra Button Text', 'palette'),
							'value' => '',
							'desc' => __('Leave blank, if You don`t need extra button.', 'palette'),
						),
						'lsi_link' => array(
							'type' => 'text',
							'label' => __('Extra Button Link', 'palette'),
							'desc' => __('Add the link of the extra button.', 'palette'),
						),
					),

				),
				'show_borders' => false,
			),
			'lsi_mobil_menu_text'                      => array(
				'label' => __( 'Mobil Menu', 'palette'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
				'desc' => __('Setup the mobil menu as You want.', 'palette'),
			),
			'lsi_mm_start' => array(
				'type'  => 'slider',
				'value' => 967,
				'properties' => array(
					'min' => 300,
					'max' => 1920,
					'step' => 1, // Set slider step. Always > 0. Could be fractional.
				),
				'label' => __('Mobil Menu Under', 'palette'),
				'desc'  => __('Add the device width (in px) where You want to change the basic menu to mobile menu.', 'palette'),
			),
			'lsi_mm' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Display Mobil Menu', 'palette'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'off',
							'label' => __('Off', 'palette')
						),
						'left-choice' => array(
							'value' => 'on',
							'label' => __('On', 'palette')
						),
						'value' => 'on',
						'desc' => __('Turn on or off.', 'palette'),
					)
				),
				'choices' => array(
					'on' => array(
						'lsi_mm_vp' => array(
							'label' => __('Mobil Menu Item Padding', 'palette'),
							'type' => 'slider',
							'value' => 5,
							'description' => __('Vertical padding for the items in px.', 'palette')
						),					),

				),
				'show_borders' => false,
			),
			'lsi_mm_transparent_header'                    => array(
				'label'        => __( 'Transparent Header on Mobile', 'palette'),
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
				'desc'         => __( 'Allow transparent header on mobile', 'palette'),
			),
			'lsi_transparent_header_text'                      => array(
				'label' => __( 'Transparent Header', 'palette'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the transparent header as You want.', 'palette'),
				'html'  => '',
			),
			'lsi_th_allow'                    => array(
				'label'        => __( 'Transparent Header For Pages', 'palette'),
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
				'desc'         => __( 'Allow transparent header for all pages.', 'palette'),
			),
		)
	)
);