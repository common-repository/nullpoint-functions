<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$post_id = get_the_ID(); 
$npt_basic_post_layer_select = get_post_meta( $post_id, 'nullpoint_basic_post_layer_select', true ) ;
$npt_basic_layer_select      = get_theme_mod( 'nullpoint_basic_layer_select', '1-col' );
if ($npt_basic_post_layer_select == '2-col-l' || $npt_basic_post_layer_select == '2-col-r') {
	$atts['fullwidth'] = 'no';
} elseif ($npt_basic_layer_select == '2-col-l' || $npt_basic_layer_select == '2-col-r') {
	$atts['fullwidth'] = 'no';
}

$npt_section_bgcolor = '';
if ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['bgimage_bgcolor'] != '' ) {
	$npt_section_bgcolor = 'background-color: '.$atts['background_options']['image']['bgimage_bgcolor'];
} elseif ( $atts['background_options']['background'] == 'color' && $atts['background_options']['color']['background_color'] != '' ) {
	$npt_section_bgcolor = 'background-color: '.$atts['background_options']['color']['background_color'];
} elseif ( $atts['background_options']['background'] == 'gradient_color' ) {
	if ($atts['background_options']['gradient_color']['gradient_type'] == 'vertical') {
		$npt_section_bgcolor = 'background: '.'linear-gradient('.$atts['background_options']['gradient_color']['gradient_bg_color_1'].', '.$atts['background_options']['gradient_color']['gradient_bg_color_2'].')';
	} elseif ($atts['background_options']['gradient_color']['gradient_type'] == 'horizontal') {
		$npt_section_bgcolor = 'background: '.'linear-gradient(to right,'.$atts['background_options']['gradient_color']['gradient_bg_color_1'].', '.$atts['background_options']['gradient_color']['gradient_bg_color_2'].')';
	} elseif ($atts['background_options']['gradient_color']['gradient_type'] == 'radial') {
		$npt_section_bgcolor = 'background: '.'radial-gradient('.$atts['background_options']['gradient_color']['gradient_bg_color_1'].', '.$atts['background_options']['gradient_color']['gradient_bg_color_2'].')';
	}
}

$random_section_number = rand(1000,9999);
?>
<div id="nullpoint-section-<?php echo esc_attr($random_section_number); ?>" class="shortcode-section<?php if ( $atts['fullwidth'] == 'yes' ) { ?> nullpoint-fullwidth-section<?php } if ( $atts['hide_on_desktop'] == 'yes' ) { ?> npt-hide-on-desktop<?php } if ( $atts['hide_on_smaller'] == 'yes' ) { ?> npt-hide-on-smaller<?php } if ( $atts['hide_on_tablet'] == 'yes' ) { ?> npt-hide-on-tablet<?php } if ( $atts['hide_on_mobile'] == 'yes' ) { ?> npt-hide-on-mobile<?php } if (!empty($atts['overlap'])) { ?> npt-section-overlap<?php } ?> <?php echo esc_attr($atts['customclass']); ?>" style=" <?php if ($npt_section_bgcolor != '') { ?><?php echo esc_attr($npt_section_bgcolor); ?>;<?php } ?><?php if (!empty($atts['color'])) { ?> color: <?php echo esc_attr($atts['color']); ?>;<?php } ?><?php if ($atts['border']['on_off'] == 'yes') { if (!empty($atts['border']['yes']['border_top'])) { echo ' border-top: '.esc_attr($atts['border']['yes']['border_top']).';';} if (!empty($atts['border']['yes']['border_bottom'])) { echo ' border-bottom: '.esc_attr($atts['border']['yes']['border_bottom']).';';} if (!empty($atts['border']['yes']['border_left'])) { echo ' border-left: '.esc_attr($atts['border']['yes']['border_left']).';';} if (!empty($atts['border']['yes']['border_right'])) { echo ' border-right: '.esc_attr($atts['border']['yes']['border_right']).';';} } if (!empty($atts['overlap'])) { echo ' margin-bottom: -'.$atts['overlap'].'px;';}?>">
    <div<?php if (!empty($atts['customid'])) { ?> id="<?php echo esc_attr($atts['customid']); ?>"<?php } ?> class="section-layer-holder<?php if ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['parallax'] == 'yes' ) { ?> parallax-section<?php } ?><?php if ( $atts['background_options']['image']['image_position'] == 'right' || $atts['background_options']['image']['image_position'] == 'left') { ?> section-dynamic-width<?php } ?>"<?php if ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['image_position'] != 'left' && $atts['background_options']['image']['image_position'] != 'right' ) { ?> style="background-image: url(<?php echo esc_url($atts['background_options']['image']['bgimage']['url']); ?>);<?php if ( $atts['background_options']['image']['image_position'] == 'pattern' ) { ?> background-size: inherit;<?php } ?>"<?php } ?>>
		<?php if ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['image_position'] != 'right' && $atts['background_options']['image']['image_position'] != 'left' && $atts['background_options']['image']['layer'] != 0) { ?><div class="section-layer-<?php echo esc_attr($random_section_number); ?> section-layer" style="background: <?php echo esc_attr($atts['background_options']['image']['layer_color']); ?>; opacity: .<?php echo esc_attr($atts['background_options']['image']['layer']); ?>;"></div><?php } ?>
        <?php if ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['image_position'] == 'right' ) { ?>
		<div class="section-image-right"<?php if ( isset($atts['background_options']['image']['bgimage']['url'])) { ?> style="background-image: url(<?php echo esc_url($atts['background_options']['image']['bgimage']['url']); ?>);"<?php } ?>>
        	<?php if ( $atts['background_options']['image']['layer'] != 0 ) { ?><div class="section-layer" style="background: <?php echo esc_attr($atts['background_options']['image']['layer_color']); ?>; opacity: .<?php echo esc_attr($atts['background_options']['image']['layer']); ?>;"></div><?php } ?>
        </div>
        <?php } elseif ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['image_position'] == 'left') { ?>
		<div class="section-image-left"<?php if ( isset($atts['background_options']['image']['bgimage']['url'])) { ?> style="background-image: url(<?php echo esc_url($atts['background_options']['image']['bgimage']['url']); ?>);"<?php } ?>>
        	<?php if ( $atts['background_options']['image']['layer'] != 0 ) { ?><div class="section-layer" style="background: <?php echo esc_attr($atts['background_options']['image']['layer_color']); ?>; opacity: .<?php echo esc_attr($atts['background_options']['image']['layer']); ?>;"></div><?php } ?>
        </div>
        <?php } ?>
		<div class="section-content<?php if ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['image_position'] == 'right' ) { ?> section-content-left<?php } elseif ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['image_position'] == 'left' ) { ?> section-content-right<?php } ?>" style="padding: <?php echo esc_attr($atts['padding']); ?>px 0; text-align: <?php echo esc_attr($atts['align']); ?>;">
        	<?php if ( $atts['container'] != 'no' ) { ?><div class="container"><?php } ?><?php echo do_shortcode( $content ); ?><?php if ( $atts['container'] != 'no' ) { ?></div><?php } ?>
            <div class="clearfix"></div>
        </div>
	</div>
</div>