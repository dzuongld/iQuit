<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Insert Video URL', 'lakshmi-features' ),
		'desc'  => __( 'Insert Video URL to embed this video. (Vimeo or Youtube)', 'lakshmi-features' )
	),
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'lakshmi-features' ),
		'desc'  => __( 'Add a cover image or leave it blank.', 'lakshmi-features' )
	),
	'border'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Border', 'lakshmi-features' ),
		'desc'  => __( 'Add style or leave it blank.', 'lakshmi-features' )
	),
);
