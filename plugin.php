<?php
/*
Plugin Name: Custom Post Type: Locations
Plugin URI:
Description: Post type, shortcode, and ACF fields for "Location" post type.
Version: 1.0
Author: Michael W. Delaney
Author URI:
License: MIT
*/

namespace MWD\CPT\Locations;

/**
 * Set up autoloader
 */
require __DIR__ . '/vendor/autoload.php';

/**
* Define Constants
*/
define( 'LOCATIONS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'LOCATIONS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

use Init;
$locations_init = new \MWD\CPT\Locations\Init();

use Shortcodes;
$locations_shorcodes = new \MWD\CPT\Locations\Shortcodes();

use Fields;
$locations_fields = new \MWD\CPT\Locations\Fields();

function template($slug, $load = null) {
		$t = new \MWD\CPT\Locations\Templates;
		$t->get_template_part( $slug, $load );
}

function template_data($data, $name) {
		$d = new \MWD\CPT\Locations\Templates;
		$d->set_template_data( $data, $name );
}
