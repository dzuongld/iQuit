<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'column'  => array(
		'label'   => __( 'Columns', 'lakshmi-features' ),
		'desc'    => __( 'Number of columns on big screens.', 'lakshmi-features' ),
		'type'    => 'select',
		'value'	  => '1',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3'
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
	'quotes' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Quotes', 'lakshmi-features' ),
		'popup-title'   => __( 'Add/Edit Quote', 'lakshmi-features' ),
		'desc'          => __( 'Create your quotes', 'lakshmi-features' ),
		'template'      => '{{=quote_author}}',
		'popup-options' => array(
			'quote_author' => array(
				'type'  => 'text',
				'label' => __('Author', 'lakshmi-features'),
				'desc'  => __( 'Add the author.', 'lakshmi-features' )
			),
			'quote_author_position' => array(
				'type'  => 'text',
				'label' => __('Author Role', 'lakshmi-features'),
				'desc'  => __( 'Add some text.', 'lakshmi-features' )
			),
			'quote_image'            => array(
				'type'  => 'upload',
				'label' => __( 'Author image', 'lakshmi-features' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'lakshmi-features' )
			),
			'quote_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'lakshmi-features')
			)
		),
	)
);