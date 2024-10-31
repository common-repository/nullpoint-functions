<?php
/**
 * Plugin Name: NullPoint Functions
 * Plugin URI:  http://webzakt.com/themes/nullpoint-multipurpose-wordpress-theme/
 * Description: Plugin with Shortcodes for NullPoint theme.
 * Version: 1.2.2
 * Author: Webzakt
 * Author URI: http://www.webzakt.com
 */

class NullPoint_Features {

    function __construct()
    {
    	define( 'NULLPOINT_VERSION', '1.0' );

    	// Plugin folder path
    	if ( ! defined( 'NULLPOINT_PLUGIN_DIR' ) ) {
    		define( 'NULLPOINT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
    	}

    	// Plugin folder URL
    	if ( ! defined( 'NULLPOINT_PLUGIN_URL' ) ) {
    		define( 'NULLPOINT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
    	}
		
		function nullpoint_features_filter_plugin_awesome_extensions($locations) {
			$locations[ dirname(__FILE__) . '/extensions' ]
			=
			plugin_dir_url( __FILE__ ) . 'extensions';
		
			return $locations;
		}
		add_filter('fw_extensions_locations', 'nullpoint_features_filter_plugin_awesome_extensions');
	}

}
new NullPoint_Features();

/*********Unyson Slider**************/
if ( ! function_exists( 'fw_theme_nullpoint_slider_population_method_custom_options' ) ) :
	/**
	 * Filter for disable standard slider fields for easy slider
	 *
	 * @param array $arr - array of slider options
	 */
	function fw_theme_nullpoint_slider_population_method_custom_options( $arr ) {
		unset(
			$arr['wrapper-population-method-custom']['options']['custom-slides']['slides_options']['desc']
		);

		return $arr;
	}

	add_filter( 'fw_ext_nullpoint_slider_population_method_custom_options', 'fw_theme_nullpoint_slider_population_method_custom_options' );
endif;

if ( ! function_exists( 'nullpoint_filter_active_slider' ) ) :
	function nullpoint_filter_active_slider( $sliders ) {
		$sliders = array_diff( $sliders, array( 'bx-slider', 'nivo-slider', 'owl-carousel' ) );

		return $sliders;
	}

	add_filter( 'fw_ext_slider_activated', 'nullpoint_filter_active_slider' );
endif;

/*********Demos**************/
/**
 * @param FW_Ext_Backups_Demo[] $demos
 * @return FW_Ext_Backups_Demo[]
 */
function _nullpoint_fw_ext_backups_demos($demos) {
    $demos_array = array(
        'default-demo' => array(
            'title' => __('Default', 'nullpoint-pro'),
            'screenshot' => NULLPOINT_PLUGIN_URL .'img/default-screenshot.png',
            'preview_link' => 'http://webzakt.com/nullpoint/',
        ),
    );

    $download_url = 'http://webzakt.com/demos/nullpoint/1.3.2/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', '_nullpoint_fw_ext_backups_demos');