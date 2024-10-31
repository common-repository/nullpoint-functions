<?php if (!defined('FW')) die('Forbidden');

$fullwidth_slider = 'allow';
$post_id = get_the_ID();  
$npt_basic_post_layer_select = get_post_meta( $post_id, 'nullpoint_basic_post_layer_select', true ) ;
$npt_basic_layer_select      = get_theme_mod( 'nullpoint_basic_layer_select', '1-col' );

if ($npt_basic_post_layer_select == '2-col-l' || $npt_basic_post_layer_select == '2-col-r') {
	$fullwidth_slider = 'disable';
} elseif ($npt_basic_layer_select == '2-col-l' || $npt_basic_layer_select == '2-col-r') {
	$fullwidth_slider = 'disable';
}

if ($data['settings']['extra']['delay'] == '' ) { 
	$data['settings']['extra']['delay'] = '8000';
}

if (!($data['settings']['extra']['fullwidth'] == 'yes' && $fullwidth_slider == 'disable')) :

$random_slider_number = rand(1000,9999);
$npt_blank_uri = NULLPOINT_PLUGIN_URL . '/extensions/media/extensions/slider/extensions/nullpoint-slider/static/images/blank.png';
?>

<?php if (isset($data['slides'])): ?>
	<!--Slider-->
	<section id="npt-slider-section" class="wrap-nivoslider theme-default nullpoint-custom-slider npt-snav-<?php echo esc_attr($data['settings']['extra']['navigation']); ?><?php if ($data['settings']['extra']['fullwidth'] == 'yes') { ?> nullpoint-fullwidth-slider<?php } ?><?php if ( $data['settings']['extra']['hide_on_desktop'] == 'yes' ) { ?> npt-hide-on-desktop<?php } if ( $data['settings']['extra']['hide_on_smaller'] == 'yes' ) { ?> npt-hide-on-smaller<?php } if ( $data['settings']['extra']['hide_on_tablet'] == 'yes' ) { ?> npt-hide-on-tablet<?php } if ( $data['settings']['extra']['hide_on_mobile'] == 'yes' ) { ?> npt-hide-on-mobile<?php } ?>" style="display: none;">
    	<div class="nullpoint-slider-holder">
            <div class="nivoSlider nivoSlider-<?php echo esc_attr($random_slider_number) ; ?>">
                <?php foreach ($data['slides'] as $id => $slide): ?>
                <img  width="<?php echo esc_attr($dimensions['width']); ?>"
                      height="<?php echo esc_attr($dimensions['height']); ?>"
                      src="<?php echo esc_attr(fw_resize($slide['src'], $dimensions['width'], $dimensions['height'], true)); ?>"
                      alt="<?php echo esc_attr($slide['title']); ?>"
                      title="#nivo-<?php echo esc_attr($id); ?>" />
                <?php endforeach; ?>
            </div>
            <?php foreach ($data['slides'] as $id => $slide): ?>
            <div id="nivo-<?php echo esc_attr($id) ?>" class="nivo-html-caption">
                <div class="npt-slider-caption-holder container">
                    <?php if($slide['extra']['npt_ta']['on_off'] == 'on') { ?>
                    <div id="npt-slider-tah" class="npt-slider-ta-<?php echo esc_html($slide['extra']['npt_ta']['on']['npt_ta_align']) ?>"<?php if(($slide['extra']['npt_ta']['on']['npt_ta_pos_top'] != '') || ($slide['extra']['npt_ta']['on']['npt_ta_pos_side'] != '')) { ?> style="top:<?php echo esc_attr($slide['extra']['npt_ta']['on']['npt_ta_pos_top']) ?>; <?php if($slide['extra']['npt_ta']['on']['npt_ta_align'] != 'right') { ?>left:<?php echo esc_attr($slide['extra']['npt_ta']['on']['npt_ta_pos_side']) ?>;<?php } else { ?>right:<?php echo esc_attr($slide['extra']['npt_ta']['on']['npt_ta_pos_side']) ?>;<?php } ?>"<?php } ?>>
                    	<div id="npt-slider-ta">
                        	<p class="npt-sta-title"><?php echo wp_kses_post($slide['title']) ?></p>
                            <?php if($slide['extra']['npt_ta']['on']['npt_ta_subtitle'] != '') { ?><p class="npt-sta-subtitle"><?php echo wp_kses_post($slide['extra']['npt_ta']['on']['npt_ta_subtitle']) ?></p><?php } ?>
                            <?php if($slide['extra']['npt_ta']['on']['npt_ta_text'] != '') { ?><p class="npt-sta-text"><?php echo wp_kses_post($slide['extra']['npt_ta']['on']['npt_ta_text']) ?></p><?php } ?>
                            <?php if(($slide['extra']['npt_ta']['on']['npt_ta_button_1'] != '') || ($slide['extra']['npt_ta']['on']['npt_ta_button_2'] != '')) { ?>
                            <div class="npt-sta-buttons">
                            	<?php if($slide['extra']['npt_ta']['on']['npt_ta_button_1'] != '') { ?>
                                <a href="<?php echo esc_url($slide['extra']['npt_ta']['on']['npt_ta_b1_url']) ?>">
                            	<div class="npt-sta-button-1">
                                	<?php echo wp_kses_post($slide['extra']['npt_ta']['on']['npt_ta_button_1']) ?>
                                </div>
                                </a>
                                <?php } ?>
                                <?php if($slide['extra']['npt_ta']['on']['npt_ta_button_2'] != '') { ?>
                                <a href="<?php echo esc_url($slide['extra']['npt_ta']['on']['npt_ta_b2_url']) ?>">
                                <div class="npt-sta-button-2">
                                	<?php echo wp_kses_post($slide['extra']['npt_ta']['on']['npt_ta_button_2']) ?>
                                </div>
                                </a>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $i = 0;
					foreach ($slide['extra']['npt_pis'] as $key => $npt_pis) : 
					$random_number = rand(1000,9999); ?>
                    <div id="npt-slider-pi" class="npt-slider-pi-<?php echo esc_attr($random_number); ?>-<?php echo esc_attr($i); ?>">
                    	<div id="npt-slider-pi-img"<?php if(($npt_pis['npt_pi_top'] != '') || ($npt_pis['npt_pi_right'] != '') || ($npt_pis['npt_pi_bottom'] != '') || ($npt_pis['npt_pi_left'] != '')) { ?> style=" <?php if($npt_pis['npt_pi_top'] != '') { ?> top:<?php echo esc_attr($npt_pis['npt_pi_top']) ?>;<?php } ?><?php if($npt_pis['npt_pi_right'] != '') { ?> right:<?php echo esc_attr($npt_pis['npt_pi_right']) ?>;<?php } ?><?php if($npt_pis['npt_pi_bottom'] != '') { ?> bottom:<?php echo esc_attr($npt_pis['npt_pi_bottom']) ?>;<?php } ?><?php if($npt_pis['npt_pi_left'] != '') { ?> left:<?php echo esc_attr($npt_pis['npt_pi_left']) ?>;<?php } ?>"<?php } ?>>
                        	<div class="npt-slider-pi-img-i">
                            	<div id="npt-slider-pi-img-animation">
                    				<img src="<?php echo esc_url($npt_pis['npt_pi_image']['url']);?>" alt="<?php echo esc_attr($npt_pis['npt_pi_name']); ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
	</section>
    <script type="text/javascript"> 
		jQuery(function($) {
			$('.nivoSlider-<?php echo esc_attr($random_slider_number) ; ?>').nivoSlider({
				effect:'<?php echo esc_attr($data['settings']['extra']['effect']); ?>',
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				pauseTime: <?php echo esc_attr($data['settings']['extra']['delay']); ?>,
			});
		});
	</script>
	<!--/Slider-->
<?php endif; ?>
<?php endif; ?>