<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'nullpoint-functions' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'nullpoint-functions' )
	),
	'link_type'   => array(
		'type'  => 'select',
		'label' => __( 'Link type', 'nullpoint-functions' ),
		'desc'  => __( 'Select the link type.', 'nullpoint-functions' ),
		'value' => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'nullpoint-functions'),
			'lightbox' => __('Lightbox', 'nullpoint-functions'),
		),
	),
	'link'       => array(
		'type'  => 'text',
		'label' => __( 'Link', 'nullpoint-functions' ),
		'desc'  => __( 'Link for the image.', 'nullpoint-functions' )
	),
	'name'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'nullpoint-functions' ),
		'desc'  => __( 'Add the content.', 'nullpoint-functions' )
	),
	'content'       => array(
		'type'  => 'textarea',
		'label' => __( 'Description', 'nullpoint-functions' ),
		'desc'  => __( 'Add the content.', 'nullpoint-functions' )
	),
);