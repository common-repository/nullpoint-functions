<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/section';

wp_enqueue_style(
    'nullpoint-section-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'nullpoint-section-shortcode-script',
    $uri . '/static/js/section.js'
);