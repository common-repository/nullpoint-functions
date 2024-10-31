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
	'display_image'	=> array(
		'label'        => __( 'Display Image', 'nullpoint-functions' ),
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
		'desc'         => __( 'Yes or no.', 'nullpoint-functions' ),				
	),		
	'unique_image'	=> array(
		'label'       => __( 'Unique Image', 'nullpoint-functions' ),
		'desc'        => __( 'Upload an image or leave it blank for the default featured image.',
			'nullpoint-functions' ),
		'type'        => 'upload',
		'images_only' => true,
	),	
	'display_title'	=> array(
		'label'        => __( 'Display Title', 'nullpoint-functions' ),
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
		'desc'         => __( 'Yes or no.', 'nullpoint-functions' ),				
	),
	'title_size'	=> array(
		'label'   => __( 'Title Size', 'nullpoint-functions' ),
		'type'    => 'short-select',
		'value'   => 'h2',
		'desc'    => __( 'Select the size of the title.',
			'nullpoint-functions' ),
		'choices' => array(
			'1' => 'h1',
			'2' => 'h2',
			'3' => 'h3',
			'4' => 'h4',
			'5' => 'h5',
			'6' => 'h6',
		),
	),		
	'uppercase_title'	=> array(
		'label'        => __( 'Title Uppercase', 'nullpoint-functions' ),
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
		'desc'         => __( 'Yes or no.', 'nullpoint-functions' ),				
	),
	'display_excerpt'	=> array(
		'label'        => __( 'Display Excerpt', 'nullpoint-functions' ),
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
		'desc'         => __( 'Yes or no.', 'nullpoint-functions' ),				
	),	
	'excerpt_length'	=> array(
		'label'       => __( 'Excerpt Lenght', 'nullpoint-functions' ),
		'desc'        => __( 'Add the number of the characters.', 'nullpoint-functions' ),
		'type'       => 'slider',
		'value'      => 100,
		'properties' => array(
			'min' => 10,
			'max' => 500,
			'sep' => 1,
		),
	),	
	'excerpt_size'	=> array(
		'label' => __( 'Excerpt Font Size', 'nullpoint-functions' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add a font-size css or leave it blank for the default.', 'nullpoint-functions' ),
	),	
	'excerpt_underline'	=> array(
		'label'       => __( 'Excerpt Underline', 'nullpoint-functions' ),
		'desc'        => __( 'The size of the underline.', 'nullpoint-functions' ),
		'type'       => 'slider',
		'value'      => 0,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'sep' => 1,
		),
	),	
	'side_border'	=> array(
		'label'       => __( 'Side Border', 'nullpoint-functions' ),
		'desc'        => __( 'Side border size for the post.', 'nullpoint-functions' ),
		'type'       => 'slider',
		'value'      => 0,
		'properties' => array(
			'min' => 0,
			'max' => 20,
			'sep' => 1,
		),
	),
	'unique_color' => array(
		'label' => __('Unique Color', 'nullpoint-functions'),
		'type' => 'rgba-color-picker',
		'value' => '',
		'desc' => __('You can add unique color for the title and the borders.', 'nullpoint-functions'),
	),
);