<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post categories

$post_categories = array();
$category_terms = get_categories();
foreach ( $category_terms as $category_term ) {
$post_categories[$category_term->slug] = $category_term->slug;}
$category_tags_tmp = array_unshift($post_categories, "All");

$options = array(
	'fullwidth'	=> array(
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
		'desc'         => __( 'Choose yes if You want Full Width. Only works on one column page.', 'lakshmi-features' ),
	),
	'category' => array(
		'type' => 'select',
		'label' => __('Category', 'lakshmi-features'),
		'value'	  => '1',
		'desc' => __('Select a category or leave it blank for all posts.', 'lakshmi-features'),
		'choices' => $post_categories
	),
	'column'  => array(
		'label'   => __( 'Columns', 'lakshmi-features' ),
		'desc'    => __( 'Number of columns on big screens.', 'lakshmi-features' ),
		'type'    => 'select',
		'value'	  => '3',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4'
		)
	),
	'delay'   => array(
		'label' => __( 'Delay', 'lakshmi-features' ),
		'desc'  => __( 'The delay for autoplay in sec. (default: false)', 'lakshmi-features' ),
		'type'  => 'text',
	),
	'pagination'  => array(
		'label'   => __( 'Pagination', 'lakshmi-features' ),
		'type'    => 'select',
		'value'	  => 'true',
		'choices' => array(
			'true' => __( 'True', 'lakshmi-features' ),
			'false' => __( 'False', 'lakshmi-features' ),
		)
	),
	'navigation'  => array(
		'label'   => __( 'Navigation', 'lakshmi-features' ),
		'type'    => 'select',
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __( 'Normal', 'lakshmi-features' ),
			'normal-2' => __( 'Normal 2', 'lakshmi-features' ),
			'big' => __( 'Big', 'lakshmi-features' ),
			'false' => __( 'False', 'lakshmi-features' ),
		)
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