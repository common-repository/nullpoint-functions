<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_style('fw-ext-builder-frontend-grid');

$options = array(
	'paddings'      => array(
		'type'    => 'group',
		'options' => array(
			'padding_label'     => array(
				'type'  => 'html',
				'value' => '',
				'label' => __( 'Padding', 'nullpoint-functions' ),
				'html'  => '',
			),
			'top' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 0,
				'desc'  => __( 'top.', 'nullpoint-functions' ),
			),
			'right' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 15,
				'desc'  => __( 'right', 'nullpoint-functions' ),
			),
			'bottom' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 0,
				'desc'  => __( 'bottom', 'nullpoint-functions' ),
			),
			'left' => array(
				'label' => false,
				'type'  => 'short-text',
				'value' => 15,
				'desc'  => __( 'left', 'nullpoint-functions' ),
			),
		)
	),
	'background_options' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'background' => array(
				'label'   => __( 'Background', 'nullpoint-functions' ),
				'desc'    => __( 'Background type for the section.', 'nullpoint-functions' ),
				'attr'    => array( 'class' => 'fw-background-selector' ),
				'type'    => 'radio',
				'choices' => array(
					'none'           => __( 'None', 'nullpoint-functions' ),
					'image'          => __( 'Image', 'nullpoint-functions' ),
					'color'          => __( 'Color', 'nullpoint-functions' ),
					'gradient_color' => __( 'Gradient Color', 'nullpoint-functions' ),
				),
				'value'   => 'none'
			),
		),
		'choices'      => array(
			'none'           => array(),
			'image'          => array(
				'bgimage'            => array(
					'type'  => 'upload',
					'label' => __( 'Background Image', 'nullpoint-functions' ),
					'desc'  => __( 'Add the link of Your image.', 'nullpoint-functions' )
				),
				'bgimage_bgcolor' => array(
					'label' => __('Background Color', 'nullpoint-functions'),
					'desc'  => __('Select the background color.', 'nullpoint-functions'),
					'type'  => 'color-picker',
				),
				'image_size' => array(
					'label' => __('Background Image Size', 'nullpoint-functions'),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'inherit' => __('inherit', 'nullpoint-functions'),
						'initial' => __('initial', 'nullpoint-functions'),
						'cover' => __('cover', 'nullpoint-functions'),
						'contain' => __('contain', 'nullpoint-functions'),
					),
				),
				'image_repeat' => array(
					'label' => __('Background Image Repeat', 'nullpoint-functions'),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat'=> __('no-repeat', 'nullpoint-functions'),
						'repeat'   => __('repeat', 'nullpoint-functions'),
						'repeat-x' => __('repeat-x', 'nullpoint-functions'),
						'repeat-y' => __('repeat-y', 'nullpoint-functions'),
					),
				),
			),
			'color'          => array(
				'background_color' => array(
					'label' => __('Background Color', 'nullpoint-functions'),
					'desc'  => __('Select the background color.', 'nullpoint-functions'),
					'type'  => 'color-picker',
				),
			),
			'gradient_color' => array(
				'gradient_type' => array(
					'label'   => __( 'Gradient Type', 'nullpoint-functions' ),
					'desc'    => __( 'Select the gradient type.', 'nullpoint-functions' ),
					'type'    => 'short-select',
					'choices' => array(
						'vertical'        => __( 'Vertical', 'nullpoint-functions' ),
						'horizontal'      => __( 'Horizontal', 'nullpoint-functions' ),
						'radial'          => __( 'Radial', 'nullpoint-functions' ),
					),
					'value'   => 'vertical'
				),
				'gradient_bg_color_1'    => array(
					'type'  => 'color-picker',
					'label' => __( 'Gradient Color 1', 'nullpoint-functions' ),
					'desc'  => __( 'Select the gradient color.', 'nullpoint-functions' ),
				),
				'gradient_bg_color_2'    => array(
					'type'  => 'color-picker',
					'label' => __( 'Gradient Color 2', 'nullpoint-functions' ),
					'desc'  => __( 'Select the gradient color.', 'nullpoint-functions' ),
				),
			),
		),
		'show_borders' => false,
	),
	'border'       => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'on_off' => array(
				'label'        => __( 'Border', 'nullpoint-functions' ),
				'type'         => 'switch',
				'desc'         => __( 'Turn on if You want to add borders.', 'nullpoint-functions' ),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'nullpoint-functions' ),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'nullpoint-functions' ),
				),
				'value'        => 'no',
			),
		),
		'choices' => array(
			'yes' => array(
				'border_top'       => array(
					'type'  => 'text',
					'label' => __( 'Border Top', 'nullpoint-functions' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'nullpoint-functions' )
				),
				'border_bottom'       => array(
					'type'  => 'text',
					'label' => __( 'Border Bottom', 'nullpoint-functions' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'nullpoint-functions' )
				),
				'border_left'       => array(
					'type'  => 'text',
					'label' => __( 'Border Left', 'nullpoint-functions' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'nullpoint-functions' )
				),
				'border_right'       => array(
					'type'  => 'text',
					'label' => __( 'Border Right', 'nullpoint-functions' ),
					'desc'  => __( 'Add custom css for border.(Ex: 5px solid red)', 'nullpoint-functions' )
				),
			),
		),
	),
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'nullpoint-functions' ),
		'desc'  => __( 'Set the align.', 'nullpoint-functions' ),
		'value' => '',
		'choices' => array(
			'' => '',
			'left' => __('left', 'nullpoint-functions'),
			'right' => __('right', 'nullpoint-functions'),
			'center' => __('center', 'nullpoint-functions'),
		),
	),
	'max_width'       => array(
		'type'  => 'text',
		'label' => __( 'Content Max Width', 'nullpoint-functions' ),
		'value' => '',
		'desc'  => __( 'Add max-width css for the content, if You don`t want to fill the whole column.', 'nullpoint-functions' )
	),
	'content_position' => array(
		'label' => __('Content Position', 'nullpoint-functions'),
		'type' => 'short-select',
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'nullpoint-functions'),
			'left' => __('left', 'nullpoint-functions'),
			'right' => __('right', 'nullpoint-functions'),
		),
		'desc'  => __( 'The position of the content. (Only if max-width value added.)', 'nullpoint-functions' )
	),
	'customclass'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Class', 'nullpoint-functions' ),
		'desc'  => __( 'Add custom class, if You need.', 'nullpoint-functions' )
	),
	'responsive_behaviour_text'                      => array(
		'label' => __( 'Responsive Behaviour', 'nullpoint-functions' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'hide_on_desktop'                    => array(
		'label'        => __( 'Hide on Desktop', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is above 1199px.', 'nullpoint-functions' ),
	),
	'hide_on_smaller'                    => array(
		'label'        => __( 'Hide on Smaller Screen', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 1199px and 992px.', 'nullpoint-functions' ),
	),
	'width_on_smaller'                    => array(
		'label'        => __( '1/1 Width on Smaller Screen', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( '100% width if media screen is between 1199px and 992px.', 'nullpoint-functions' ),
	),
	'hide_on_tablet'                    => array(
		'label'        => __( 'Hide on Tablet', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 991px and 768px.', 'nullpoint-functions' ),
	),
	'width_on_tablet'                    => array(
		'label'        => __( '1/1 Width on Tablet', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( '100% width if media screen is between 991px and 768px.', 'nullpoint-functions' ),
	),
	'hide_on_mobile'                    => array(
		'label'        => __( 'Hide on Mobile', 'nullpoint-functions' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'nullpoint-functions' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'nullpoint-functions' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is under 767px.', 'nullpoint-functions' ),
	),
);