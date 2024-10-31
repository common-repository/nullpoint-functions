<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'height' => array(
		'label' => __( 'Height', 'nullpoint-functions' ),
		'type'  => 'slider',
		'value' => 30,
		'desc'  => __( 'Spacer`s height (px).', 'nullpoint-functions' ),
	),
);