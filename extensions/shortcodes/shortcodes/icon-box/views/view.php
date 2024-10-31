<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
 
?>
<div class="npt-iconbox">
    <div class="npt-iconbox-content">
        <div class="icon">
            <i class="<?php echo esc_attr($atts['icon']); ?>"></i>
        </div>
        <h4 class="name"><i class="<?php echo esc_attr($atts['icon']); ?>"></i> <?php echo esc_html($atts['title']); ?></h4>
        <div class="desc">
            <p><?php echo wp_kses_post($atts['content']); ?></p>
        </div>
        <?php if (!empty($atts['link'])): ?>
        <a class="npt-btn npt-btn-basic has_icon npt-btn-small" href="#">
            <div class="npt-btn-overlay"></div>
            <div class="npt-btn-content"><?php nullpoint_read_more_text(); ?><i class="fa fa-angle-right right-icon"></i></div> 
        </a>
        <?php endif; ?>
    </div>
</div>