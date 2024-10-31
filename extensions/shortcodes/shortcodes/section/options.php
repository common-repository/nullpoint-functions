<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'fullwidth'                    => array(
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
		'value'        => 'no',
		'desc'         => __( 'Set if You want Full Width. Only suggested on one column page.', 'nullpoint-functions' ),
	),
	'container'                    => array(
		'label'        => __( 'Container', 'nullpoint-functions' ),
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
		'desc'         => __( 'If You don`t need container for the content, switch it off.', 'nullpoint-functions' ),
	),
	'padding' => array(
		'label' => __( 'Padding', 'nullpoint-functions' ),
		'type'  => 'slider',
		'value' => 0,
		'desc'  => __( 'Add the size of the padding at the bottom and the top. (px)', 'nullpoint-functions' ),
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
				'image_position'   => array(
					'type'  => 'select',
					'label' => __( 'Image Position', 'nullpoint-functions' ),
					'desc'  => __( 'The position of the image.', 'nullpoint-functions' ),
					'value' => 'background',
					'choices' => array(
						'background' => __('Background', 'nullpoint-functions'),
						'pattern' => __('Pattern', 'nullpoint-functions'),
						'left' => __('Left', 'nullpoint-functions'),
						'right' => __('Right', 'nullpoint-functions')
					),
				),
				'parallax'                    => array(
					'label'        => __( 'Fixed', 'nullpoint-functions' ),
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
					'desc'         => __( 'Set if You want fixed image.', 'nullpoint-functions' ),
				),
				'layer' => array(
					'label' => __( 'Layer Opacity', 'nullpoint-functions' ),
					'type'  => 'slider',
					'value' => 0,
					'desc'  => __( 'Add a number for the layer opacity (0-99). This will appear over the image.', 'nullpoint-functions' ),
				),
				'layer_color' => array(
					'label' => __('Layer Color', 'nullpoint-functions'),
					'desc'  => __('Select the color.', 'nullpoint-functions'),
					'type'  => 'color-picker',
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
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'nullpoint-functions' ),
		'desc'  => __( 'Set the align.', 'nullpoint-functions' ),
		'value' => 'left',
		'choices' => array(
			'left' => __('left', 'nullpoint-functions'),
			'right' => __('right', 'nullpoint-functions'),
			'center' => __('center', 'nullpoint-functions'),
		),
	),
	'color' => array(
		'label' => __('Font Color', 'nullpoint-functions'),
		'desc'  => __('Select the color', 'nullpoint-functions'),
		'type'  => 'color-picker',
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
	'overlap'       => array(
		'type'  => 'text',
		'label' => __( 'Overlap', 'nullpoint-functions' ),
		'desc'  => __( 'Add a number value for the overlap.', 'nullpoint-functions' )
	),
	'customid'       => array(
		'type'  => 'text',
		'label' => __( 'Section ID', 'nullpoint-functions' ),
		'desc'  => __( 'Add a custom id. You can use it for linking.', 'nullpoint-functions' )
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
