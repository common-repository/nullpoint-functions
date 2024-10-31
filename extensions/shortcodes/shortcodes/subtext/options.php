<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Align', 'nullpoint-functions' ),
		'desc'  => __( 'Set the align.', 'nullpoint-functions' ),
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'nullpoint-functions'),
			'left' => __('left', 'nullpoint-functions'),
			'right' => __('right', 'nullpoint-functions'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'nullpoint-functions' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'nullpoint-functions' ),
	),
	'content'                  => array(
		'label' => __( 'Text', 'nullpoint-functions' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'nullpoint-functions' ),
	),
);