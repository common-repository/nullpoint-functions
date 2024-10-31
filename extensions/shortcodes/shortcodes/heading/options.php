<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'nullpoint-functions' ),
		'desc'  => __( 'Add the content.', 'nullpoint-functions' )
	),
	'h'   => array(
		'type'  => 'select',
		'label' => __( 'Size', 'nullpoint-functions' ),
		'desc'  => __( 'Select the font size.', 'nullpoint-functions' ),
		'value' => '2',
		'choices' => array(
			'1' => __('h1', 'nullpoint-functions'),
			'2' => __('h2', 'nullpoint-functions'),
			'3' => __('h3', 'nullpoint-functions'),
			'4' => __('h4', 'nullpoint-functions'),
			'5' => __('h5', 'nullpoint-functions'),
			'6' => __('h6', 'nullpoint-functions'),
		),
	),
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
	'font_style'   => array(
		'type'  => 'select',
		'label' => __( 'Font Style', 'nullpoint-functions' ),
		'desc'  => __( 'Select one from the preselected font styles.', 'nullpoint-functions' ),
		'value' => '1',
		'choices' => array(
			'1' => __('primary', 'nullpoint-functions'),
			'2' => __('secondary', 'nullpoint-functions'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'nullpoint-functions' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'nullpoint-functions' ),
	),
	'allow_icon' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Icon', 'nullpoint-functions'),
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
				'desc' => __('Turn on if You want to display icon next to the title.', 'nullpoint-functions'),
			)
		),
		'choices' => array(
			'on' => array(
				'icon'  		=> array(
					'label' => __( 'Icon', 'nullpoint-functions' ),
					'desc'  => __( 'Select an icon.', 'nullpoint-functions' ),
					'type' => 'icon',
					'value' => 'fa fa-magic',
				),
			),

		),
		'show_borders' => false,
	),
	'border' => array(
		'label' => __('Underline', 'nullpoint-functions'),
		'type' => 'slider',
		'desc'  => __( 'Select the size of the bottom border.', 'nullpoint-functions' ),
		'value' => 0,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'sep' => 1,
		),
	),
	'fw_border'              => array(
		'label' => __( 'Fullwidth Underline', 'nullpoint-functions' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code, If You want fullwidth underline.', 'nullpoint-functions' ),
	),
);