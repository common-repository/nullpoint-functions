<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/quote-carousel';

wp_enqueue_style(
    'nullpoint-quote-carousel-shortcode',
    $uri . '/static/css/styles.css'
);