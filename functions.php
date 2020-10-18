<?php
function aca_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style('aca-style', get_stylesheet_uri(), array(), $theme_version);
	wp_enqueue_style('aca-style-min', get_stylesheet_directory_uri() . '/assets/css/main.min.css', array(), $theme_version);
}
add_action('wp_enqueue_scripts', 'aca_register_styles');