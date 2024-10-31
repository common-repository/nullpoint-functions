<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'flexslider' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Sliders', 'nullpoint-functions' ),
		'popup-title'   => __( 'Add/Edit Slide', 'nullpoint-functions' ),
		'desc'          => __( 'Create your slides', 'nullpoint-functions' ),
		'template'      => '{{=slide_image}}',
		'popup-options' => array(
			'slide_image'            => array(
				'type'  => 'upload',
				'label' => __( 'Image', 'nullpoint-functions' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'nullpoint-functions' )
			),
		),
	)
);