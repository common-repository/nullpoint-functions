<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'         => esc_html__( 'Layout Elements', 'nullpoint-functions' ),
		'title'       => esc_html__( 'Section', 'nullpoint-functions' ),
		'description' => esc_html__( 'Add a Section', 'nullpoint-functions' ),
		'popup_size'  => 'large',
		'type'        => 'section' // WARNING: Do not edit this
	)
);