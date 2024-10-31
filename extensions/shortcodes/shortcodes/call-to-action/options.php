<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'fullwidth'	=> array(
		'label'        => __( 'Full Width', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'yes',
		'desc'         => __( 'Choose yes if You want Full Width. Only works on one column page.', 'nullpoint-functions' ),
	),
	'column'  => array(
		'label'   => __( 'Columns', 'nullpoint-functions' ),
		'desc'    => __( 'Number of columns on big screens.', 'nullpoint-functions' ),
		'type'    => 'select',
		'value'	  => '3',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4'
		)
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
		'value'	  => 'dark',
		'choices' => array(
			'normal' => __( 'Normal', 'nullpoint-functions' ),
			'normal-2' => __( 'Normal 2', 'nullpoint-functions' ),
			'big' => __( 'Big', 'nullpoint-functions' ),
			'false' => __( 'False', 'nullpoint-functions' ),
		)
	),
	'delay'   => array(
		'label' => __( 'Delay', 'nullpoint-functions' ),
		'desc'  => __( 'The delay for autoplay in sec. (default: false)', 'nullpoint-functions' ),
		'type'  => 'text',
	),
	'cta' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Columns', 'nullpoint-functions' ),
		'popup-title'   => __( 'Add/Edit Column', 'nullpoint-functions' ),
		'desc'          => __( 'Create your columns', 'nullpoint-functions' ),
		'template'      => '{{=name}}',
		'popup-options' => array(
			'name'       => array(
				'type'  => 'text',
				'label' => __( 'Title', 'nullpoint-functions' ),
				'desc'  => __( 'Add a title.', 'nullpoint-functions' )
			),
			'icon'  		=> array(
				'label' => __( 'Icon', 'nullpoint-functions' ),
				'desc'  => __( 'Select an icon.', 'nullpoint-functions' ),
				'type'  => 'icon',
				'value' => 'fa fa-magic',
			),
			'link'       => array(
				'type'  => 'text',
				'label' => __( 'Link', 'nullpoint-functions' ),
				'desc'  => __( 'Add a link for the area.', 'nullpoint-functions' )
			),
			'head'       => array(
				'type'  => 'text',
				'label' => __( 'Hover header', 'nullpoint-functions' ),
				'desc'  => __( 'Add a title.', 'nullpoint-functions' )
			),
			'desc'       => array(
				'type'  => 'textarea',
				'label' => __( 'Hover description', 'nullpoint-functions' ),
				'desc'  => __( 'Add a description.', 'nullpoint-functions' )
			),
			'img'            => array(
				'type'  => 'upload',
				'label' => __( 'Column image', 'nullpoint-functions' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'nullpoint-functions' )
			),
		),
	),
	'unique_design_text'                      => array(
		'label' => __( 'Unique Design', 'nullpoint-functions' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'npt_s_cta_unique' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Unique Design', 'nullpoint-functions'),
				'type' => 'switch',
				'right-choice' => array(
					'value' => 'off',
					'label' => __('Off', 'nullpoint-functions')
				),
				'left-choice' => array(
					'value' => 'on',
					'label' => __('On', 'nullpoint-functions')
				),
				'value' => 'off',
				'desc' => __('Turn on or off.', 'nullpoint-functions'),
			)
		),
		'choices' => array(
			'on' => array(
				'npt_s_cta_padding' => array(
					'type' => 'text',
					'label' => __('Item Padding', 'nullpoint-functions'),
					'desc' => __('Add the padding css for the items.', 'nullpoint-functions'),
					'value' => '10px',
				),
				'npt_s_cta_line' => array(
					'label' => __('Line Animation', 'nullpoint-functions'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'nullpoint-functions'),
						'frame' => __('Frame', 'nullpoint-functions'),
					),
				),
				'npt_s_cta_img_an' => array(
					'label' => __('Image Animation', 'nullpoint-functions'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'nullpoint-functions'),
						'zoom' => __('Zoom', 'nullpoint-functions'),
					),
				),
			),

		),
		'show_borders' => false,
	),			
);