<?php if (!defined('FW')) die('Forbidden');
/*
 * options.php - extra options shown after default options on add and edit slider page.
*/

					
$options = array(
	'npt_ta' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Text Area', 'nullpoint-functions'),
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
				'npt_ta_align' => array(
					'label' => __('Align', 'nullpoint-functions'),
					'type' => 'switch',
					'right-choice' => array(
						'value' => 'right',
						'label' => __('Right', 'nullpoint-functions')
					),
					'left-choice' => array(
						'value' => 'left',
						'label' => __('Left', 'nullpoint-functions')
					),
					'value' => 'left',
				),
				'npt_ta_pos_top' => array(
					'label' => __('Position from the top', 'nullpoint-functions'),
					'type' => 'text',
					'value' => '25%'
				),
				'npt_ta_pos_side' => array(
					'label' => __('Position from the side edge', 'nullpoint-functions'),
					'type' => 'text',
					'value' => '1%'
				),
				'npt_ta_subtitle' => array(
					'label' => __('Subtitle', 'nullpoint-functions'),
					'type' => 'text',
					'value' => ''
				),
				'npt_ta_text' => array(
					'label' => __('Text', 'nullpoint-functions'),
					'type' => 'textarea',
					'value' => ''
				),
				'npt_ta_button_1' => array(
					'label' => __('Button 1 Text', 'nullpoint-functions'),
					'type' => 'text',
					'value' => ''
				),
				'npt_ta_b1_url' => array(
					'label' => __('Button 1 URL', 'nullpoint-functions'),
					'type' => 'text',
					'value' => ''
				),
				'npt_ta_button_2' => array(
					'label' => __('Button 2 Text', 'nullpoint-functions'),
					'type' => 'text',
					'value' => ''
				),
				'npt_ta_b2_url' => array(
					'label' => __('Button 2 URL', 'nullpoint-functions'),
					'type' => 'text',
					'value' => ''
				),
			),

		),
		'show_borders' => false,
	),
	'npt_pis' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Parallax Image', 'nullpoint-functions' ),
		'popup-title'   => __( 'Parallax Image options.', 'nullpoint-functions' ),
		'desc'          => __( 'Add parallax images to Your slide.', 'nullpoint-functions' ),
		'popup-options' => array(
			'npt_pi_image' => array(
				'label' => __('Image', 'nullpoint-functions'),
				'desc' => __('Upload the parallax image.', 'nullpoint-functions'),
				'type' => 'upload',
			),
			'npt_pi_top' => array(
				'label' => __('Position Top', 'nullpoint-functions'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'nullpoint-functions'),
			),
			'npt_pi_right' => array(
				'label' => __('Position Right', 'nullpoint-functions'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'nullpoint-functions'),
			),
			'npt_pi_bottom' => array(
				'label' => __('Position Bottom', 'nullpoint-functions'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'nullpoint-functions'),
			),
			'npt_pi_left' => array(
				'label' => __('Position Left', 'nullpoint-functions'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'nullpoint-functions'),
			),
			'npt_pi_name' => array(
				'label' => __('Name of the image', 'nullpoint-functions'),
				'type' => 'text',
				'value' => '',
			),
		),
	),
);