<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post categories

$post_categories = array();
$category_terms = get_categories();
foreach ( $category_terms as $category_term ) {
$post_categories[$category_term->slug] = $category_term->slug;}
$category_tags_tmp = array_unshift($post_categories, "All");

$single_posts = array();
$post_slugs_args = array(
	'posts_per_page'   => 1000,
);
$post_slugs = get_posts( $post_slugs_args );
foreach ( $post_slugs as $post_slug ) {
$single_posts[$post_slug->ID] = $post_slug->post_title;}

$options = array(
	'infos' => array(
		'type'  => 'checkboxes',
		'value' => array(
			'date' => true,
			'author' => true,
			'categories' => true,
			'comments' => true,
			'tags' => true,
		),
		'label' => __('Info Types', 'nullpoint-functions'),
		'desc'  => __('Select the info types for posts.', 'nullpoint-functions'),
		'choices' => array(
			'date' => __('Date', 'nullpoint-functions'),
			'author' => __('Author', 'nullpoint-functions'),
			'categories' => __('Categories', 'nullpoint-functions'),
			'comments' => __('Comments', 'nullpoint-functions'),
			'tags' => __('Tags', 'nullpoint-functions'),
		),
		'inline' => true,
	),
	'order_by' => array(
		'type' => 'select',
		'label' => __('Order By', 'nullpoint-functions'),
		'value'	  => 'date',
		'choices' => array(
			'date' => __('Date', 'nullpoint-functions'),
			'modified' => __('Modified', 'nullpoint-functions'),
			'ID' => __('ID', 'nullpoint-functions'),
			'author' => __('Author', 'nullpoint-functions'),
			'title' => __('Title', 'nullpoint-functions'),
			'rand' => __('Random', 'nullpoint-functions'),
			'comment_count' => __('Comment count', 'nullpoint-functions'),
		),
	),
	'order' => array(
		'type' => 'select',
		'label' => __('Sort Order', 'nullpoint-functions'),
		'value'	  => 'DESC',
		'choices' => array(
			'DESC' => __('Descending', 'nullpoint-functions'),
			'ASC' => __('Ascending', 'nullpoint-functions'),
		),
	),
	'number' => array(
		'label' => __('Number of Posts', 'nullpoint-functions'),
		'type' => 'text',
		'value' => '',
		'desc' => __('Add a number or leave it blank for all posts.', 'nullpoint-functions'),
	),
	'category' => array(
		'type' => 'select',
		'label' => __('Category', 'nullpoint-functions'),
		'value'	  => '1',
		'desc' => __('Select a category or leave it blank for all posts.', 'nullpoint-functions'),
		'choices' => $post_categories
	),
	'only_posts' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Select Posts', 'nullpoint-functions'),
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
				'desc' => __('Turn on, if You want to select the posts.', 'nullpoint-functions'),
			)
		),
		'choices' => array(
			'on' => array(
				'posts' => array(
					'type'  => 'select-multiple',
					'label' => __('Single Posts', 'nullpoint-functions'),
					'desc'  => __('Select the posts.', 'nullpoint-functions'),
					'choices' => $single_posts,
					'inline' => true,
				),
			),
		),
		'show_borders' => false,
	),
);