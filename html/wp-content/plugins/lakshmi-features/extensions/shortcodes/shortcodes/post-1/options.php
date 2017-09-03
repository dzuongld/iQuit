<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post titles

$post_title = array();
$args=array('order'=>'ASC','posts_per_page'	=>	1000,);
$posts = get_posts( $args );
if ( $posts ) {
foreach ( $posts as $post ) {
   $post_title[$post->post_title] = $post->post_title;
}
}

$options = array(
	'title'		=> array(
		'label'   => __( 'Title', 'lakshmi-features' ),
		'type'    => 'select',
		'desc'    => __( 'Select from the posts.', 'lakshmi-features' ),
		'choices' => $post_title
	),
	'unique_design_text'                      => array(
		'label' => __( 'Unique Design', 'lakshmi-features' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'lsi_s_cta_unique' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Unique Design', 'lakshmi-features'),
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
				'lsi_s_cta_padding' => array(
					'type' => 'text',
					'label' => __('Item Padding', 'lakshmi-features'),
					'desc' => __('Add the padding css for the items.', 'lakshmi-features'),
					'value' => '10px',
				),
				'lsi_s_cta_line' => array(
					'label' => __('Line Animation', 'lakshmi-features'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'lakshmi-features'),
						'frame' => __('Frame', 'lakshmi-features'),
					),
				),
				'lsi_s_cta_img_an' => array(
					'label' => __('Image Animation', 'lakshmi-features'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'lakshmi-features'),
						'zoom' => __('Zoom', 'lakshmi-features'),
					),
				),
			),

		),
		'show_borders' => false,
	),	
);