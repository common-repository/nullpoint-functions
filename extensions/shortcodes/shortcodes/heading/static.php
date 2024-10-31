<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/heading';

wp_enqueue_style(
    'nullpoint-heading-shortcode',
    $uri . '/static/css/styles.css'
);
