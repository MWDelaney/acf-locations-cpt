<?php
use PostTypes\PostType;

// Post type labels
$names = [
    'name' => 'location',
    'singular' => 'Location',
    'plural' => 'Locations',
    'slug' => 'books'
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
