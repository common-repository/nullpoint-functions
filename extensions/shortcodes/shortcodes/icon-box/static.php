<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/icon-box';

wp_enqueue_style(
    'nullpoint-icon-box-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'nullpoint-icon-box-shortcode-script',
    $uri . '/static/js/iconbox.js'
);