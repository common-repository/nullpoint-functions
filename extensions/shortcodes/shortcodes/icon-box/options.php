<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'                  => array(
		'label' => __( 'Title', 'nullpoint-functions' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add the title.', 'nullpoint-functions' ),
	),
	'icon' => array(
		'label' => __('Icon', 'nullpoint-functions'),
		'type' => 'icon',
		'value' => 'fa fa-magic',
		'desc' => __('Select the icon.', 'nullpoint-functions'),
	),
	'link'                  => array(
		'label' => __( 'Link', 'nullpoint-functions' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add a link or leave it blank.', 'nullpoint-functions' ),
	),
	'content'                  => array(
		'label' => __( 'Content', 'nullpoint-functions' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'nullpoint-functions' ),
	),
);