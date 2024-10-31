<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'size'  => array(
		'label'   => __( 'Size', 'nullpoint-functions' ),
		'desc'    => __( 'Select the size of the separator.', 'nullpoint-functions' ),
		'type'    => 'select',
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'nullpoint-functions'),
			'small' => __('Small', 'nullpoint-functions')
		)
	),
	'color'              => array(
		'label' => __( 'Color', 'nullpoint-functions' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code.', 'nullpoint-functions' ),
	),
	'margin' => array(
		'label' => __( 'Margin', 'nullpoint-functions' ),
		'type'  => 'slider',
		'value' => 10,
		'desc'  => __( 'Add the size of the margin (px).', 'nullpoint-functions' ),
	),
	'icon'  		=> array(
		'label' => __( 'Icon', 'nullpoint-functions' ),
		'desc'  => __( 'Select an icon.', 'nullpoint-functions' ),
		'type' => 'icon',
		'value' => 'fa fa-magic',
	),
);