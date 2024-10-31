<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/image-box';

wp_enqueue_style(
    'nullpoint-image-box-shortcode',
    $uri . '/static/css/styles.css'
);
