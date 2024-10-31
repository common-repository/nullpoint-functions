<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/subtext';

wp_enqueue_style(
    'nullpoint-subtext-shortcode',
    $uri . '/static/css/styles.css'
);
