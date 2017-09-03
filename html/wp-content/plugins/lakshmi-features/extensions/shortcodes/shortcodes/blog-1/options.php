<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post categories

$post_categories = array();
$category_terms = get_categories();
foreach ( $category_terms as $category_term ) {
$post_categories[$category_term->slug] = $category_term->slug;}
$category_tags_tmp = array_unshift($post_categories, "All");

$single_posts = array();
$post_slugs_args = array(
	'posts_per_page'   => 1000,
);
$post_slugs = get_posts( $post_slugs_args );
foreach ( $post_slugs as $post_slug ) {
$single_posts[$post_slug->ID] = $post_slug->post_title;}

$options = array(
	'infos' => array(
		'type'  => 'checkboxes',
		'value' => array(
			'date' => true,
			'author' => true,
			'categories' => true,
			'comments' => true,
			'tags' => true,
		),
		'label' => __('Info Types', 'lakshmi-features'),
		'desc'  => __('Select the info types for posts.', 'lakshmi-features'),
		'choices' => array(
			'date' => __('Date', 'lakshmi-features'),
			'author' => __('Author', 'lakshmi-features'),
			'categories' => __('Categories', 'lakshmi-features'),
			'comments' => __('Comments', 'lakshmi-features'),
			'tags' => __('Tags', 'lakshmi-features'),
		),
		'inline' => true,
	),
	'order_by' => array(
		'type' => 'select',
		'label' => __('Order By', 'lakshmi-features'),
		'value'	  => 'date',
		'choices' => array(
			'date' => __('Date', 'lakshmi-features'),
			'modified' => __('Modified', 'lakshmi-features'),
			'ID' => __('ID', 'lakshmi-features'),
			'author' => __('Author', 'lakshmi-features'),
			'title' => __('Title', 'lakshmi-features'),
			'rand' => __('Random', 'lakshmi-features'),
			'comment_count' => __('Comment count', 'lakshmi-features'),
		),
	),
	'order' => array(
		'type' => 'select',
		'label' => __('Sort Order', 'lakshmi-features'),
		'value'	  => 'DESC',
		'choices' => array(
			'DESC' => __('Descending', 'lakshmi-features'),
			'ASC' => __('Ascending', 'lakshmi-features'),
		),
	),
	'number' => array(
		'label' => __('Number of Posts', 'lakshmi-features'),
		'type' => 'text',
		'value' => '',
		'desc' => __('Add a number or leave it blank for all posts.', 'lakshmi-features'),
	),
	'category' => array(
		'type' => 'select',
		'label' => __('Category', 'lakshmi-features'),
		'value'	  => '1',
		'desc' => __('Select a category or leave it blank for all posts.', 'lakshmi-features'),
		'choices' => $post_categories
	),
	'only_posts' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Select Posts', 'lakshmi-features'),
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
				'desc' => __('Turn on, if You want to select the posts.', 'lakshmi-features'),
			)
		),
		'choices' => array(
			'on' => array(
				'posts' => array(
					'type'  => 'select-multiple',
					'label' => __('Single Posts', 'lakshmi-features'),
					'desc'  => __('Select the posts.', 'lakshmi-features'),
					'choices' => $single_posts,
					'inline' => true,
				),
			),
		),
		'show_borders' => false,
	),
);