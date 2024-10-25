<?php
function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    wp_enqueue_style( 
		'theme-button-style',
		get_parent_theme_file_uri( 'assets/css/button.css' )
	);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_styles');