<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/blogger-post';

wp_enqueue_style(
    'nullpoint-blogger-post-shortcode',
    $uri . '/static/css/styles.css'
);