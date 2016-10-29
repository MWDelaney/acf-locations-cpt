<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_58139dd354777',
	'title' => 'Shortcode',
	'fields' => array (
		array (
			'key' => 'location_metabox_embed_shortcode',
			'label' => 'Embed this Location',
			'name' => 'embed_this_location',
			'type' => 'text',
			'instructions' => 'Copy this shortcode to embed this location in a page or post',
			'required' => 0,
			'conditional_logic' => 0,
			'readonly' => 1,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'location',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
