<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 

$npt_s_cta_padding = '';
$npt_s_cta_line = 'frame';
$npt_s_cta_img_an = 'zoom';
$npt_s_cta_colors = 'off';

if ($atts['npt_s_cta_unique']['on_off'] == 'on') {
	$npt_s_cta_padding = ' style=padding:'.$atts['npt_s_cta_unique']['on']['npt_s_cta_padding'].' !important;';
	$npt_s_cta_line = $atts['npt_s_cta_unique']['on']['npt_s_cta_line'];
	$npt_s_cta_img_an = $atts['npt_s_cta_unique']['on']['npt_s_cta_img_an'];
}

$atts['column'] = trim($atts['column']);
if ( $atts['column'] != '1'  && $atts['column'] != '2' && $atts['column'] != '4' ) $atts['column'] = '3';
$lesscolumn = $atts['column'];
if ( $atts['column']==4 ) $lesscolumn = 3;

$random_cta_number = rand(1000,9999);

$fullwidth = $atts['fullwidth'];
$post_id = get_the_ID();  
$npt_basic_post_layer_select = get_post_meta( $post_id, 'nullpoint_basic_post_layer_select', true ) ;
$npt_basic_layer_select      = get_theme_mod( 'nullpoint_basic_layer_select', '1-col' );

if ($npt_basic_post_layer_select == '2-col-l' || $npt_basic_post_layer_select == '2-col-r') {
	$fullwidth = 'no';
} elseif ($npt_basic_layer_select == '2-col-l' || $npt_basic_layer_select == '2-col-r') {
	$fullwidth = 'no';
}

?>
<div class="npt-cta-h<?php if ( $fullwidth == 'yes') { ?> npt-fullwidth-h<?php } ?>">
    <div id="npt-cta" class="owl-carousel carousel owl row npt-cta-<?php echo esc_attr($random_cta_number); ?> npt-owl-pagination-<?php echo esc_attr($atts['pagination']); ?> npt-owl-navigation-<?php echo esc_attr($atts['navigation']); ?><?php if ( $fullwidth == 'yes') { ?> npt-fullwidth<?php } ?>">
    <?php foreach ($atts['cta'] as $key => $cta) : ?>
		<div class="npt-cta-col npt-cta-col-<?php echo esc_attr($npt_s_cta_line); ?>-line npt-cta-col-<?php echo esc_attr($npt_s_cta_img_an); ?>-img-an<?php if ($npt_s_cta_colors == 'on') { ?> npt-cta-colors<?php } ?>"<?php echo esc_attr($npt_s_cta_padding); ?>>
        	<?php if (!empty($cta['link'])): ?>
        	<a href="<?php echo esc_url($cta['link']); ?>">
            <?php endif; ?>
                <div class="npt-cta-content">
                	<div class="npt-cta-content-bg"<?php if ($cta['img'] != '') { ?> style="background-image: url(<?php echo esc_url($cta['img']['url']); ?>);"<?php } ?>></div>
                    <div class="npt-cta-layer"></div>
                    <div class="npt-cta-layer-2"></div>
                    <div class="npt-cta-cover">
                        <i class="<?php echo esc_attr($cta['icon']); ?>"></i>
                        <h2><?php echo esc_html($cta['name']); ?></h2>
                    </div>
                    <div class="npt-cta-hover">
                            <h3><?php echo esc_html($cta['head']); ?></h3>
                            <p><?php echo esc_html($cta['desc']); ?></p>
                            <?php if (!empty($cta['link'])): ?>
                            <h4 class="npt-cta-more"><?php nullpoint_read_more_text(); ?></h4>
                            <?php endif; ?>
                    </div>
                </div>
            <?php if (!empty($cta['link'])): ?>
            </a>
            <?php endif; ?>
        </div>
	<?php endforeach; ?>
    </div>
    <div class="clearfix"></div>
</div>
<script type="text/javascript"> 
	jQuery(document).ready(function($){
		$(document).ready(function() {
	
		  var owl = $(".npt-cta-<?php echo esc_attr($random_cta_number); ?>");
	
		  owl.owlCarousel({
			  
		  navigation : true, // Show next and prev buttons
		  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		  pagination : true,
	 
		  items : <?php echo esc_attr($atts['column']); ?>, 
		  itemsDesktop : [5000,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktop : [1170,<?php echo esc_attr($lesscolumn); ?>],
		  itemsDesktopSmall : [900,<?php echo esc_attr($lesscolumn); ?>], 
		  itemsTablet: [767,1], 
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