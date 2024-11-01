<?php
function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    wp_enqueue_style( 
		'theme-button-style',
		get_parent_theme_file_uri( 'assets/css/button.css' )
	);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function register_layout_category( $categories ) {
	
	$categories[] = array(
		'slug'  => 'custom-layout-category',
		'title' => 'IsaacWorks'
	);

	return $categories;
}

if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
	add_filter( 'block_categories_all', 'register_layout_category' );
} else {
	add_filter( 'block_categories', 'register_layout_category' );
}