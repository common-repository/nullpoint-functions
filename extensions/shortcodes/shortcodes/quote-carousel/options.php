<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'column'  => array(
		'label'   => __( 'Columns', 'nullpoint-functions' ),
		'desc'    => __( 'Number of columns on big screens.', 'nullpoint-functions' ),
		'type'    => 'select',
		'value'	  => '1',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3'
		)
	),
	'delay'   => array(
		'label' => __( 'Delay', 'nullpoint-functions' ),
		'desc'  => __( 'The delay for autoplay in sec. (default: false)', 'nullpoint-functions' ),
		'type'  => 'text',
	),
	'pagination'  => array(
		'label'   => __( 'Pagination', 'nullpoint-functions' ),
		'type'    => 'select',
		'value'	  => 'true',
		'choices' => array(
			'true' => __( 'True', 'nullpoint-functions' ),
			'false' => __( 'False', 'nullpoint-functions' ),
		)
	),
	'navigation'  => array(
		'label'   => __( 'Navigation', 'nullpoint-functions' ),
		'type'    => 'select',
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __( 'Normal', 'nullpoint-functions' ),
			'normal-2' => __( 'Normal 2', 'nullpoint-functions' ),
			'big' => __( 'Big', 'nullpoint-functions' ),
			'false' => __( 'False', 'nullpoint-functions' ),
		)
	),
	'quotes' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Quotes', 'nullpoint-functions' ),
		'popup-title'   => __( 'Add/Edit Quote', 'nullpoint-functions' ),
		'desc'          => __( 'Create your quotes', 'nullpoint-functions' ),
		'template'      => '{{=quote_author}}',
		'popup-options' => array(
			'quote_author' => array(
				'type'  => 'text',
				'label' => __('Author', 'nullpoint-functions'),
				'desc'  => __( 'Add the author.', 'nullpoint-functions' )
			),
			'quote_author_position' => array(
				'type'  => 'text',
				'label' => __('Author Role', 'nullpoint-functions'),
				'desc'  => __( 'Add some text.', 'nullpoint-functions' )
			),
			'quote_image'            => array(
				'type'  => 'upload',
				'label' => __( 'Author image', 'nullpoint-functions' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'nullpoint-functions' )
			),
			'quote_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'nullpoint-functions')
			)
		),
	)
);