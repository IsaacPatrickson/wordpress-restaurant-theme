<?php
function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    wp_enqueue_style( 
		'theme-button-style',
		get_parent_theme_file_uri( 'assets/css/button.css' )
	);
}

function enqueue_theme_scripts() {
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');