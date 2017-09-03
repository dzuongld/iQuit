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
	'display_image'	=> array(
		'label'        => __( 'Display Image', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'yes',
		'desc'         => __( 'Yes or no.', 'lakshmi-features' ),				
	),		
	'unique_image'	=> array(
		'label'       => __( 'Unique Image', 'lakshmi-features' ),
		'desc'        => __( 'Upload an image or leave it blank for the default featured image.',
			'lakshmi-features' ),
		'type'        => 'upload',
		'images_only' => true,
	),	
	'display_title'	=> array(
		'label'        => __( 'Display Title', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'yes',
		'desc'         => __( 'Yes or no.', 'lakshmi-features' ),				
	),
	'title_size'	=> array(
		'label'   => __( 'Title Size', 'lakshmi-features' ),
		'type'    => 'short-select',
		'value'   => 'h2',
		'desc'    => __( 'Select the size of the title.',
			'lakshmi-features' ),
		'choices' => array(
			'1' => 'h1',
			'2' => 'h2',
			'3' => 'h3',
			'4' => 'h4',
			'5' => 'h5',
			'6' => 'h6',
		),
	),		
	'uppercase_title'	=> array(
		'label'        => __( 'Title Uppercase', 'lakshmi-features' ),
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
		'desc'         => __( 'Yes or no.', 'lakshmi-features' ),				
	),
	'display_excerpt'	=> array(
		'label'        => __( 'Display Excerpt', 'lakshmi-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'lakshmi-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'lakshmi-features' )
		),
		'value'        => 'yes',
		'desc'         => __( 'Yes or no.', 'lakshmi-features' ),				
	),	
	'excerpt_length'	=> array(
		'label'       => __( 'Excerpt Lenght', 'lakshmi-features' ),
		'desc'        => __( 'Add the number of the characters.', 'lakshmi-features' ),
		'type'       => 'slider',
		'value'      => 100,
		'properties' => array(
			'min' => 10,
			'max' => 500,
			'sep' => 1,
		),
	),	
	'excerpt_size'	=> array(
		'label' => __( 'Excerpt Font Size', 'lakshmi-features' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add a font-size css or leave it blank for the default.', 'lakshmi-features' ),
	),	
	'excerpt_underline'	=> array(
		'label'       => __( 'Excerpt Underline', 'lakshmi-features' ),
		'desc'        => __( 'The size of the underline.', 'lakshmi-features' ),
		'type'       => 'slider',
		'value'      => 0,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'sep' => 1,
		),
	),	
	'side_border'	=> array(
		'label'       => __( 'Side Border', 'lakshmi-features' ),
		'desc'        => __( 'Side border size for the post.', 'lakshmi-features' ),
		'type'       => 'slider',
		'value'      => 0,
		'properties' => array(
			'min' => 0,
			'max' => 20,
			'sep' => 1,
		),
	),
	'unique_color' => array(
		'label' => __('Unique Color', 'lakshmi-features'),
		'type' => 'rgba-color-picker',
		'value' => '',
		'desc' => __('You can add unique color for the title and the borders.', 'lakshmi-features'),
	),
);