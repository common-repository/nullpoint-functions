<?php if (!defined('FW')) die( 'Forbidden' ); 

if ( $atts['style'] != '2' ) {
?>
<div class="npt-blockquote-1">
    <h3 class="npt-blockquote-1-author"><?php echo esc_html($atts['author']) ?></h3>
    <div class="npt-blockquote-1-content"><?php echo esc_html($atts['content']) ?></div>
    <div class="clearfix"></div>
</div>
<?php } else { ?>	
<div class="npt-blockquote-2-holder">
    <div class="npt-blockquote-2">
        <div class="npt-blockquote-2-content"><?php echo esc_html($atts['content']) ?></div>
        <h4 class="npt-blockquote-2-author"><?php echo esc_html($atts['author']) ?></h4>
    </div>
</div>
<?php } ?>