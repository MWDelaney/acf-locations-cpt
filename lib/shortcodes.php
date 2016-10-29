<?php

namespace MWD\CPT\Locations;

class Shortcodes {

	function __construct() {
    //Initialize shortcodes
    $this->add_shortcodes();
	}

	/**
	* Add 'locations' shortcode
	*
	* @uses locations Function to build the shorcode
	*/
	function add_shortcodes() {
				add_shortcode( 'locations', array($this, 'locations_shortcode'));
	}

	/**
 * Build the shortcode, call templates
 */
	function locations_shortcode($atts, $content = null) {
		$atts = shortcode_atts( array(
				"id" => false,
		), $atts );

		$args = array(
			'posts_per_page'   => -1,
			'orderby'          => 'menu_order',
			'order'            => 'ASC',
			'include'          => ($atts['id']) ? $atts['id']: '',
			'post_type'        => 'location',
		);
		$locations_array = get_posts( $args );

		$data = array( 'posts' => $locations_array );
		\MWD\CPT\Locations\template_data( $data, 'context' );

		ob_start();
		do_action('mwd_before_locations');
		\MWD\CPT\Locations\template( 'locations' );
		do_action('mwd_after_locations');
		return ob_get_clean();
	}

}
