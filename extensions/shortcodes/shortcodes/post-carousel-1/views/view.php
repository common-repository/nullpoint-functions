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

$atts['category'] = trim($atts['category']);

$atts['column'] = trim($atts['column']);
if ( $atts['column'] != '1'  && $atts['column'] != '2' && $atts['column'] != '4' ) $atts['column'] = '3';
$lesscolumn = $atts['column'];
if ( $atts['column']==4 ) $lesscolumn = 3;

$fullwidth = $atts['fullwidth'];
$post_id = get_the_ID();  
$npt_basic_post_layer_select = get_post_meta( $post_id, 'nullpoint_basic_post_layer_select', true ) ;
$npt_basic_layer_select      = get_theme_mod( 'nullpoint_basic_layer_select', '1-col' );

if ($npt_basic_post_layer_select == '2-col-l' || $npt_basic_post_layer_select == '2-col-r') {
	$fullwidth = 'no';
} elseif ($npt_basic_layer_select == '2-col-l' || $npt_basic_layer_select == '2-col-r') {
	$fullwidth = 'no';
}

$random_carousel_1_number = rand(1000,9999);
?>
<div id="npt-owl-news-h"<?php if ( $fullwidth == 'yes') { ?> class="npt-fullwidth-h"<?php } ?>>
	<div id="npt-owl-news" class="owl-carousel carousel owl row npt-owl-news-<?php echo esc_attr($random_carousel_1_number); ?> npt-owl-pagination-<?php echo esc_attr($atts['pagination']); ?> npt-owl-navigation-<?php echo esc_attr($atts['navigation']); ?><?php if ( $fullwidth == 'yes') { ?> npt-fullwidth<?php } ?>">
	<?php 
	$slider = array(
    'category_name' => '' . sanitize_title($atts['category']) . '',
    'order'    => 'DESC',
	'posts_per_page'	=>	1000,);
    $slider = new WP_Query( $slider ); 

    while ($slider->have_posts()) : $slider->the_post(); 
    
	$permalink = get_permalink();
	$title = get_the_title() ;
	$excerpt = substr(get_the_excerpt(), 0,150);
	$post_id = get_the_ID();
	$taglist = get_the_tag_list( '<span class="tag-list">', '</span><span class="tag-list"> ', '</span>' ) ;
	$month = get_the_time('M') ;
	$day = get_the_time('d') ;
	$tag = get_the_tags();
	$image = '';
	if (has_post_thumbnail( $slider->ID ) ){
	$image = get_post_thumbnail_id($slider->ID);
	$image = wp_get_attachment_image_src($image,'medium');
	$image = $image[0];
	}
	?>
        <div class="npt-post-sc npt-cta-col npt-cta-col-<?php echo esc_attr($npt_s_cta_line); ?>-line npt-cta-col-<?php echo esc_attr($npt_s_cta_img_an); ?>-img-an<?php if ($npt_s_cta_colors == 'on') { ?> npt-cta-colors<?php } ?>"<?php echo esc_attr($npt_s_cta_padding); ?>>
            <div class="npt-post-1-content npt-cta-content">
            	<div class="npt-cta-content-bg"<?php if (has_post_thumbnail( $slider->ID ) ){ ?> style="background-image: url(<?php echo esc_url($image); ?>);"<?php } ?>></div>
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
	<?php endwhile; ?>
    </div>
</div>
<script type="text/javascript"> 
	jQuery(document).ready(function($){
		$(document).ready(function() {
	
		  var owl = $(".npt-owl-news-<?php echo esc_attr($random_carousel_1_number); ?>");
	
		  owl.owlCarousel({
			  
		  navigation : true, // Show next and prev buttons
		  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		  pagination : true,
	 
		  items : <?php echo esc_attr($atts['column']); ?>, 
		  itemsDesktop : [5000,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktop : [1170,<?php echo esc_attr($lesscolumn); ?>],
		  itemsDesktopSmall : [900,1], 
		  itemsTablet: [600,1], 
		  itemsMobile : [400,1],
		  <?php if ( $atts['delay'] != 'false' && $atts['delay'] != '') { ?> 			  
		  autoPlay : <?php echo esc_attr($atts['delay']); ?>000,
		  <?php } else { ?>
		  autoPlay : false,
		  <?php } ?>		
		  });
		});
	 });
</script>
<?php wp_reset_query(); ?>	