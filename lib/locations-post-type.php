<?php
use PostTypes\PostType;

// Post type labels
$names = [
    'name' => 'location',
    'singular' => 'Location',
    'plural' => 'Locations',
    'slug' => 'locations'
];

// Post type options
$options = [
	'supports' => array( 'title', 'thumbnail', 'page-attributes' ),
	'has_archive' => false,
	'exclude_from_search' => true,
	'publicly_queryable' => false,
	'capability_type' => 'page',
];

// Register post type
$locations = new PostType($names, $options);

// Set post type dashicon
$locations->icon('dashicons-location-alt');

// Set post type translation domain
$locations->translation('cpt-locations');

/**
 * Change the post type labels
 */
function change_post_type_labels() {
  global $wp_post_types;

  // Get the post labels
  $postLabels = $wp_post_types['location']->labels;
  $postLabels->featured_image = 'Location Photo';
	$postLabels->set_featured_image = 'Set location photo';
	$postLabels->remove_featured_image = 'Remove location photo';
	$postLabels->use_featured_image = 'Use as location photo';
}
add_action( 'init', 'change_post_type_labels' );
