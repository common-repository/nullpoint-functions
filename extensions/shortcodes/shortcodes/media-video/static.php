<?php if (!defined('FW')) die('Forbidden');

$uri = NULLPOINT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/media-video';

wp_enqueue_style(
    'nullpoint-media-video-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'nullpoint-media-video-shortcode-script',
    $uri . '/static/js/video.js'
);