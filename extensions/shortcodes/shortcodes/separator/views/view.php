<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 
$general_color_2 = '#ffffff';		

$atts['color'] = trim($atts['color']);
if ( $atts['color'] == '' ) $atts['color'] = $general_color_2 ;

if ( $atts['icon'] =='' ) $atts['icon'] = 'fa fa-nullpoint-fire' ;

if ( $atts['size'] != 'small' ) $atts['size'] = 'normal' ;
?>

<div class="clearfix"></div>
<div class="npt-separator-<?php echo esc_attr($atts['size']); ?>" style="color: <?php echo esc_attr($atts['color']); ?>; margin: <?php echo esc_attr($atts['margin']); ?>px 0;">
    <div class="npt-separator-icon-holder">
        <i class="npt-separator-icon <?php echo esc_attr($atts['icon']); ?>"></i>
    </div>
</div>
<div class="clearfix"></div>