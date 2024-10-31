<?php if (!defined('FW')) die('Forbidden');
/*
 * options.php - extra options shown after default options on add and edit slider page.
*/
$options = array(
	'fullwidth'	=> array(
		'label'        => __( 'Full Width', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Choose yes if You want Full Width. If You choose yes, it will only appears on one column page.', 'nullpoint-functions' ),
	),
	'navigation' => array(
		'label' => __('Navigation', 'nullpoint-functions'),
		'type' => 'short-select',
		'value' => 'none',
		'desc' => __('Select navigation type for the slider.', 'nullpoint-functions'),
		'choices' => array(
			'none' => 'none',
			'bullet' => 'bullet',
			'arrow' => 'arrow',
			'both' => 'both',
		),
	),
	'effect' => array(
		'label' => __('Effect', 'nullpoint-functions'),
		'type' => 'short-select',
		'value' => 'fade',
		'desc' => __('Select the transition effect.', 'nullpoint-functions'),
		'choices' => array(
			'fade' => __('fade', 'nullpoint-functions'),
			'fold' => __('fold', 'nullpoint-functions'),
			'sliceDown' => __('sliceDown', 'nullpoint-functions'),
			'sliceDownLeft' => __('sliceDownLeft', 'nullpoint-functions'),
			'sliceUp' => __('sliceUp', 'nullpoint-functions'),
			'sliceUpLeft' => __('sliceUpLeft', 'nullpoint-functions'),
			'sliceUpDown' => __('sliceUpDown', 'nullpoint-functions'),
			'sliceUpDownLeft' => __('sliceUpDownLeft', 'nullpoint-functions'),
			'random' => __('random', 'nullpoint-functions'),
		),
	),
	'delay'   => array(
		'label' => __( 'Delay', 'nullpoint-functions' ),
		'desc'  => __( 'The delay for autoplay in milisec. (default: 8000)', 'nullpoint-functions' ),
		'type'  => 'text',
	),
	'hide_on_desktop'                    => array(
		'label'        => __( 'Hide on Desktop', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is above 1199px.', 'nullpoint-functions' ),
	),
	'hide_on_smaller'                    => array(
		'label'        => __( 'Hide on Smaller Screen', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 1199px and 992px.', 'nullpoint-functions' ),
	),
	'hide_on_tablet'                    => array(
		'label'        => __( 'Hide on Tablet', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 991px and 768px.', 'nullpoint-functions' ),
	),
	'hide_on_mobile'                    => array(
		'label'        => __( 'Hide on Mobile', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is under 767px.', 'nullpoint-functions' ),
	),
);