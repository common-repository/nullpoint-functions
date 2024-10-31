<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Insert Video URL', 'nullpoint-functions' ),
		'desc'  => __( 'Insert Video URL to embed this video. (Vimeo or Youtube)', 'nullpoint-functions' )
	),
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'nullpoint-functions' ),
		'desc'  => __( 'Add a cover image or leave it blank.', 'nullpoint-functions' )
	),
	'border'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Border', 'nullpoint-functions' ),
		'desc'  => __( 'Add style or leave it blank.', 'nullpoint-functions' )
	),
);
