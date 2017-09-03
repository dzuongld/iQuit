<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'lakshmi-features' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'lakshmi-features' )
	),
	'link_type'   => array(
		'type'  => 'select',
		'label' => __( 'Link type', 'lakshmi-features' ),
		'desc'  => __( 'Select the link type.', 'lakshmi-features' ),
		'value' => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'lakshmi-features'),
			'lightbox' => __('Lightbox', 'lakshmi-features'),
		),
	),
	'link'       => array(
		'type'  => 'text',
		'label' => __( 'Link', 'lakshmi-features' ),
		'desc'  => __( 'Link for the image.', 'lakshmi-features' )
	),
	'name'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'lakshmi-features' ),
		'desc'  => __( 'Add the content.', 'lakshmi-features' )
	),
	'content'       => array(
		'type'  => 'textarea',
		'label' => __( 'Description', 'lakshmi-features' ),
		'desc'  => __( 'Add the content.', 'lakshmi-features' )
	),
);