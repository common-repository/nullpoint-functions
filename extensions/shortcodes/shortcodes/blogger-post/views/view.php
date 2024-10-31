<?php if (!defined('FW')) die( 'Forbidden' );

$atts['title'] = trim($atts['title']);
		
$bloggerpost = array(
	'posts_per_page' => 1,
	'name' => '' . sanitize_title($atts['title']) . ''
);

$bloggerpost = new WP_Query( $bloggerpost ); 
while ($bloggerpost->have_posts()) : $bloggerpost->the_post(); 

$post_id = get_the_ID();
$permalink = get_permalink();
$title = get_the_title() ;
$excerpt = get_the_excerpt();
?>
<div id="npt-blogger-post"<?php if ($atts['side_border'] != 0 ) { ?> class="npt-blogger-post-side-border" style="border-left: <?php echo esc_attr($atts['side_border']); ?>px solid;<?php if ($atts['unique_color'] != '' ) { ?> border-color: <?php echo esc_attr($atts['unique_color']); ?> !important;<?php } ?>"<?php } ?>>
<?php 
if ($atts['display_image'] == 'yes' ) {
	if (has_post_thumbnail( $bloggerpost->ID ) ){  
	$image = wp_get_attachment_url( get_post_thumbnail_id($bloggerpost->ID) ) ;
	if (isset($atts['unique_image']['url'])) {
	$unique_image = $atts['unique_image']['url'] ;
	if ($unique_image != '') $image = $unique_image; 
	} ?> 
	<div class="npt-blogger-post-image-holder">
        <a href="<?php echo esc_url($permalink); ?>">
        	<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" />
        </a>
	</div>
<?php 
	}
} ?>
	<div class="npt-blogger-post-text-holder">
    	<?php if ($atts['display_title'] == 'yes' ) { ?>
    	<a href="<?php echo esc_url($permalink); ?>">
    		<h<?php echo esc_attr($atts['title_size']); ?> class="npt-blogger-post-title<?php if ($atts['uppercase_title'] == 'yes' ) { ?> npt-blogger-post-title-uppercase<?php } ?>"<?php if ($atts['unique_color'] != '' ) { ?> style="color: <?php echo esc_attr($atts['unique_color']); ?>;"<?php } ?>><?php echo esc_html($title); ?></h><?php echo esc_attr($atts['title_size']); ?>>
        </a>
        <?php } ?>
        <?php if ($atts['display_excerpt'] == 'yes' ) { ?>
        <p<?php if ($atts['excerpt_size'] != '' ) { ?> style="font-size: <?php echo esc_attr($atts['excerpt_size']); ?>"<?php } ?>><span class="npt-blogger-post-excerpt" style="border-bottom: <?php echo esc_attr($atts['excerpt_underline']); ?>px solid;<?php if ($atts['unique_color'] != '' ) { ?> border-color: <?php echo esc_attr($atts['unique_color']); ?> !important;<?php } ?>"><?php echo wp_kses_post(substr($excerpt, 0,$atts['excerpt_length'])); ?></span></p>
        <?php } ?>
    </div>
</div>
<?php 							  
endwhile;
wp_reset_query(); ?>