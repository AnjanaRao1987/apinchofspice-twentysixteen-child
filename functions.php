<?php

//This action is necessary to load parent style first 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function create_custom_post_type_recipe(){
		$labels = array(
		'name' => 'Recipes',
		'singular_name' => 'Recipe',
		'add_new' => 'New Recipe',
		'add_new_item' => 'Add Recipe',
		'edit_item' => 'Edit Recipe',
		'new_item' => 'New Recipe',
		'view_item' => 'View Recipe',
		'search_items' => 'Search Recipe',
		'not_found' => 'No Recipes found',
		'not_found_in_trash' => 'No Recipes found in Trash',
		'parent_item_colon' => '',
	);
	$args = array(
		'label' => __('Recipes'),
		'labels' => $labels, // from array above
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-index-card', // from this list
		'hierarchical' => false,
		'rewrite' => array( "slug" => "Recipes" ), // defines URL base
		'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
		'show_in_nav_menus' => true,
		'taxonomies' => array( 'event_category', 'post_tag','category'),
		'has_archive' => true
	);
	register_post_type('Recipes', $args); 
}
add_action('init','create_custom_post_type_recipe');

?>



