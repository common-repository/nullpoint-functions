<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/icon';

wp_enqueue_style(
    'nullpoint-icon-shortcode',
    $uri . '/static/css/styles.css'
);
