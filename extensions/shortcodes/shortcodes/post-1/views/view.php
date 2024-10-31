<?php if (!defined('FW')) die( 'Forbidden' ); 

$npt_s_cta_padding = '';
$npt_s_cta_line = 'frame';
$npt_s_cta_img_an = 'zoom';
$npt_s_cta_colors = 'off';

if ($atts['npt_s_cta_unique']['on_off'] == 'on') {
	$npt_s_cta_padding = ' style=padding:'.$atts['npt_s_cta_unique']['on']['npt_s_cta_padding'].' !important;';
	$npt_s_cta_line = $atts['npt_s_cta_unique']['on']['npt_s_cta_line'];
	$npt_s_cta_img_an = $atts['npt_s_cta_unique']['on']['npt_s_cta_img_an'];
}

$atts['title'] = trim($atts['title']);
		
$postmiracle_2 = array(
	'posts_per_page' => 1,
	'name' => '' . sanitize_title($atts['title']) . '');

$postmiracle_2 = new WP_Query( $postmiracle_2 ); 
while ($postmiracle_2->have_posts()) : $postmiracle_2->the_post(); 

$permalink = get_permalink();
$title = get_the_title() ;
$excerpt = substr(get_the_excerpt(), 0,150);
$post_id = get_the_ID();
$taglist = get_the_tag_list( '<span class="tag-list">', '</span><span class="tag-list"> ', '</span>' ) ;
$month = get_the_time('M') ;
$day = get_the_time('d') ;
$tag = get_the_tags();
$image = '';
if (has_post_thumbnail( $postmiracle_2->ID ) ){
$image = get_post_thumbnail_id($postmiracle_2->ID);
$image = wp_get_attachment_image_src($image,'medium');
$image = $image[0];
}
?>
<div class="npt-post-sc npt-post-sc-single npt-cta-col npt-cta-col-<?php echo esc_attr($npt_s_cta_line); ?>-line npt-cta-col-<?php echo esc_attr($npt_s_cta_img_an); ?>-img-an<?php if ($npt_s_cta_colors == 'on') { ?> npt-cta-colors<?php } ?>"<?php echo esc_attr($npt_s_cta_padding); ?>>
    <div class="npt-post-1-content npt-cta-content">
    	<div class="npt-cta-content-bg"<?php if (has_post_thumbnail( $postmiracle_2->ID ) ){ ?> style="background-image: url(<?php echo esc_url($image); ?>);"<?php } ?>></div>
        <div class="npt-cta-layer"></div>
        <div class="npt-cta-layer-2"></div>
        <div class="npt-cta-cover">
            <div class="npt-post-1-date">
                <div class="npt-post-date-ch">
                    <div class="npt-post-date-c">
                        <h4><?php echo esc_html($day); ?></h4>
                        <h4><?php echo esc_html($month); ?></h4>
                    </div>
                </div>
            </div>
            <div class="npt-post-1-title">
                <h2><?php echo esc_html($title); ?></h2>
            </div>
        </div>
        <div class="npt-cta-hover">
			<div class="npt-cta-hover-content">
                <h3><?php echo wp_kses_post($taglist); ?></h3>
                <p><?php echo wp_kses_post($excerpt); ?>...</p>
                <a href="<?php echo esc_url($permalink); ?>" title="<?php echo esc_attr($title); ?>">
                    <h4 class="npt-post-1-more"><?php nullpoint_read_more_text(); ?></h4>
                </a>
            </div>
        </div>
    </div>
</div>
<?php 							  
endwhile;
wp_reset_query(); ?>