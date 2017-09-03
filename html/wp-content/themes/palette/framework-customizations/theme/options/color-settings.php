<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'color' => array(
		'title'   => __( 'Colors', 'palette'),
		'type'    => 'tab',
		'options' => array(
			'lsi_header_colors_text'                      => array(
				'label' => __( 'Header Style', 'palette'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the header as You want.', 'palette'),
				'html'  => '',
			),
			'lsi_header_background_color' => array(
				'label' => __('Header Background Color', 'palette'),
				'type' => 'rgba-color-picker',
				'value' => 'rgba(24,245,182,0.5)',
				'desc' => __('Pick a color for header background.', 'palette'),
			),
			'lsi_footer_colors_text'                      => array(
				'label' => __( 'Footer Style', 'palette'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the footer as You want.', 'palette'),
				'html'  => '',
			),
			'lsi_fw_background_color' => array(
				'label' => __('Footer Widgets Background Color', 'palette'),
				'type' => 'rgba-color-picker',
				'value' => '#2e282a',
				'desc' => __('Pick a color for the background.', 'palette'),
			),
			'lsi_fwil_bc' => array(
				'label' => __('Footer Layer Color', 'palette'),
				'type' => 'rgba-color-picker',
				'value' => 'rgba(46,40,42,0.75)',
				'desc' => __('Pick a color for the background.', 'palette'),
			),
			'lsi_bf_bg' => array(
				'label' => __('Bottom Footer Background Color', 'palette'),
				'type' => 'rgba-color-picker',
				'value' => '#2e282a',
				'desc' => __('Pick a color for bottom footer background.',
					'palette'),
			),
		),
	),
);

