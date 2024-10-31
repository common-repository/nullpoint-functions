<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/spacer';

wp_enqueue_style(
    'nullpoint-spacer-shortcode',
    $uri . '/static/css/styles.css'
);
