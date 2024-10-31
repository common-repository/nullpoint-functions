<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post titles

$post_title = array();
$args=array('order'=>'ASC','posts_per_page'	=>	1000,);
$posts = get_posts( $args );
if ( $posts ) {
foreach ( $posts as $post ) {
   $post_title[$post->post_title] = $post->post_title;
}
}

$options = array(
	'title'		=> array(
		'label'   => __( 'Title', 'nullpoint-functions' ),
		'type'    => 'select',
		'desc'    => __( 'Select from the posts.', 'nullpoint-functions' ),
		'choices' => $post_title
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