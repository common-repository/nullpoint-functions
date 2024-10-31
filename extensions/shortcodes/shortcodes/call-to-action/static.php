<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/call-to-action';

wp_enqueue_style(
    'nullpoint-call-to-action-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'nullpoint-call-to-action-shortcode-script',
    $uri . '/static/js/call-to-action.js'
);