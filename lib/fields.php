<?php

namespace MWD\CPT\Locations;

class Fields {

	function __construct() {
		//Initialize shortcodes
		add_action( 'acf/init', array( $this, 'locations_fields' ), 0 );
		add_filter('acf/load_value/name=embed_this_location', array( $this, 'populate_shortcode_meta'), 10, 3);
		add_filter( 'acf/input/meta_box_priority', array( $this, 'km_set_acf_metabox_priority'), 10, 2 );
	}



	/**
	 * Enable all fields in the "Fields" subdirectory
	 */
	function locations_fields() {
		foreach(glob(LOCATIONS_PLUGIN_DIR . 'lib/fields/*.php') as $field) {
		    include($field);
		}
	}



	/**
	 * Populate shortcode metabox with the shortcode to display this location
	 */
	function populate_shortcode_meta( $value, $post_id, $field ) {
		$return = sprintf(
				'[locations id="%s"]',
				get_the_ID()
			);
		return $return;
	}



	/**
	 * Set Advanced Custom Fields metabox priority.
	 *
	 * @param  string  $priority    The metabox priority.
	 * @param  array   $field_group The field group data.
	 * @return string  $priority    The metabox priority, modified.
	 */
	function km_set_acf_metabox_priority( $priority, $field_group ) {

		if ( 'Shortcode' === $field_group['title'] ) {
			$priority = 'high';
		}
		return $priority;
	}

}
