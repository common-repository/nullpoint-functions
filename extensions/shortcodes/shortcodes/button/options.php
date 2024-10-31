<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'  => array(
		'label' => __( 'Button Label', 'nullpoint-functions' ),
		'desc'  => __( 'This is the text that appears on your button.', 'nullpoint-functions' ),
		'type'  => 'text',
	),
	'link'   => array(
		'label' => __( 'Button Link', 'nullpoint-functions' ),
		'desc'  => __( 'Where should your button link to.', 'nullpoint-functions' ),
		'type'  => 'text',
		'value' => '#'
	),
	'color'  => array(
		'label'   => __( 'Color Type', 'nullpoint-functions' ),
		'desc'    => __( 'Select the color type.', 'nullpoint-functions' ),
		'type'    => 'select',
		'choices' => array(
			'basic' => __('basic', 'nullpoint-functions'),
			'inverse' => __('basic 2', 'nullpoint-functions'),
			'bw' => __('black & white', 'nullpoint-functions'),
			'custom' => __('custom', 'nullpoint-functions'),
		)
	),
	'custom_color'              => array(
		'label' => __( 'Custom Background Color', 'nullpoint-functions' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for custom button.', 'nullpoint-functions' ),
	),
	'custom_font_color'              => array(
		'label' => __( 'Unique Font Color', 'nullpoint-functions' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for the button.', 'nullpoint-functions' ),
	),
	'size'  => array(
		'label'   => __( 'Size', 'nullpoint-functions' ),
		'desc'    => __( 'Select the size.', 'nullpoint-functions' ),
		'type'    => 'select',
		'choices' => array(
			'' => '',
			'small' => __('small', 'nullpoint-functions'),
			'normal' => __('normal', 'nullpoint-functions'),
			'big' => __('big', 'nullpoint-functions'),
			'bigger' => __('bigger', 'nullpoint-functions'),
		)
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'nullpoint-functions' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window.', 'nullpoint-functions' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'nullpoint-functions'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'nullpoint-functions'),
		),
	),
	'icon_position'  => array(
		'label'   => __( 'Enable Icon', 'nullpoint-functions' ),
		'desc'    => __( 'Left or right.', 'nullpoint-functions' ),
		'type'    => 'select',
		'value'	  => 'none',
		'choices' => array(
			'none' => __('none', 'nullpoint-functions'),
			'right' => __('right', 'nullpoint-functions'),
			'left' => __('left', 'nullpoint-functions'),
		)
	),
	'icon' => array(
		'label' => __('Icon', 'nullpoint-functions'),
		'type' => 'icon',
		'value' => 'fa fa-magic',
		'desc' => __('Select the icon.', 'nullpoint-functions'),
	),
	'border_radius'   => array(
		'label' => __( 'Border Radius', 'nullpoint-functions' ),
		'desc'  => __( 'Add css code or leave it blank.', 'nullpoint-functions' ),
		'type'  => 'text',
		'value' => ''
	),
);