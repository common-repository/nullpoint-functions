<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/separator';

wp_enqueue_style(
    'nullpoint-separator-shortcode',
    $uri . '/static/css/styles.css'
);
