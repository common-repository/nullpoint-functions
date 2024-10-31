<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'author'   => array(
		'label' => __( 'Author', 'nullpoint-functions' ),
		'desc'  => __( 'Add the author.', 'nullpoint-functions' ),
		'type'  => 'text',
	),
	'style'  => array(
		'label'   => __( 'Style', 'nullpoint-functions' ),
		'desc'    => __( 'Select one from the styles.', 'nullpoint-functions' ),
		'type'    => 'select',
		'value'	  => '1',
		'choices' => array(
			'1' => __('1', 'nullpoint-functions'),
			'2' => __('2', 'nullpoint-functions'),
		)
	),
	'content'  => array(
		'label' => __( 'Content', 'nullpoint-functions' ),
		'desc'  => __( 'Add the content.', 'nullpoint-functions' ),
		'type'  => 'textarea',
	),
);