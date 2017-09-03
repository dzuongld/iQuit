<?php if (!defined('FW')) die('Forbidden');
/*
 * options.php - extra options shown after default options on add and edit slider page.
*/
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
		'desc'         => __( 'Choose yes if You want Full Width. If You choose yes, it will only appears on one column page.', 'lakshmi-features' ),
	),
	'navigation' => array(
		'label' => __('Navigation', 'lakshmi-features'),
		'type' => 'short-select',
		'value' => 'none',
		'desc' => __('Select navigation type for the slider.', 'lakshmi-features'),
		'choices' => array(
			'none' => 'none',
			'bullet' => 'bullet',
			'arrow' => 'arrow',
			'both' => 'both',
		),
	),
	'effect' => array(
		'label' => __('Effect', 'lakshmi-features'),
		'type' => 'short-select',
		'value' => 'fade',
		'desc' => __('Select the transition effect.', 'lakshmi-features'),
		'choices' => array(
			'fade' => __('fade', 'lakshmi-features'),
			'fold' => __('fold', 'lakshmi-features'),
			'sliceDown' => __('sliceDown', 'lakshmi-features'),
			'sliceDownLeft' => __('sliceDownLeft', 'lakshmi-features'),
			'sliceUp' => __('sliceUp', 'lakshmi-features'),
			'sliceUpLeft' => __('sliceUpLeft', 'lakshmi-features'),
			'sliceUpDown' => __('sliceUpDown', 'lakshmi-features'),
			'sliceUpDownLeft' => __('sliceUpDownLeft', 'lakshmi-features'),
			'random' => __('random', 'lakshmi-features'),
		),
	),
	'delay'   => array(
		'label' => __( 'Delay', 'lakshmi-features' ),
		'desc'  => __( 'The delay for autoplay in milisec. (default: 8000)', 'lakshmi-features' ),
		'type'  => 'text',
	),
	'hide_on_desktop'                    => array(
		'label'        => __( 'Hide on Desktop', 'lakshmi-features' ),
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
		'desc'         => __( 'Hide if media screen is above 1199px.', 'lakshmi-features' ),
	),
	'hide_on_smaller'                    => array(
		'label'        => __( 'Hide on Smaller Screen', 'lakshmi-features' ),
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
		'desc'         => __( 'Hide if media screen is between 1199px and 992px.', 'lakshmi-features' ),
	),
	'hide_on_tablet'                    => array(
		'label'        => __( 'Hide on Tablet', 'lakshmi-features' ),
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
		'desc'         => __( 'Hide if media screen is between 991px and 768px.', 'lakshmi-features' ),
	),
	'hide_on_mobile'                    => array(
		'label'        => __( 'Hide on Mobile', 'lakshmi-features' ),
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
		'desc'         => __( 'Hide if media screen is under 767px.', 'lakshmi-features' ),
	),
);