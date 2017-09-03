<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'flexslider' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Sliders', 'lakshmi-features' ),
		'popup-title'   => __( 'Add/Edit Slide', 'lakshmi-features' ),
		'desc'          => __( 'Create your slides', 'lakshmi-features' ),
		'template'      => '{{=slide_image}}',
		'popup-options' => array(
			'slide_image'            => array(
				'type'  => 'upload',
				'label' => __( 'Image', 'lakshmi-features' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'lakshmi-features' )
			),
		),
	)
);