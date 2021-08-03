<?php
define('ACA_INCLUDE_PATH', get_stylesheet_directory() . '/inc/');
define('ACA_FONTAWESOME_VERSION', '5.15.1');

include_once ACA_INCLUDE_PATH . 'custom-post-types.php';
include_once ACA_INCLUDE_PATH . 'acf-setup.php';

if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( !function_exists('aca_theme_setup') ) {
    function aca_theme_setup() {

        /**
         * Navigation menus
         */
        register_nav_menus([
            'primary' => __('Primary Menu'),
            'secondary' => __('Secondary Menu'),
            'footer' => __('Footer Menu'),
            'footer-secondary' => __('Footer Menu (Secondary)'),
        ]);

        /**
         * Custom logo
         */
        add_theme_support('custom-logo', [
            'height'               => 105,
            'width'                => 294,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        ]);

		add_theme_support('post-thumbnails', [
			'post',
			'product',
			'recipe'
		]);
    }
}
add_action( 'after_setup_theme', 'aca_theme_setup' );

function aca_theme_styles_and_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    /**
     * Stylesheets
     */
	wp_enqueue_style('aca-style', get_stylesheet_uri(), array(), $theme_version);
    wp_enqueue_style( 'aca-theme-style', get_template_directory_uri() . '/assets/css/main.min.css', [], $theme_version );
    wp_register_style('fontawesome-style', get_stylesheet_directory_uri() . '/inc/fontawesome/css/all.min.css', [], ACA_FONTAWESOME_VERSION);
    wp_enqueue_style('fontawesome-style');

    /**
     * Javascripts
     */
    wp_enqueue_script( 'aca-theme-click-menu', get_template_directory_uri() . '/assets/js/click-menu.js', [], $theme_version );
    wp_enqueue_script( 'aca-theme-motion-text', get_template_directory_uri() . '/assets/js/motion-text.js', [], $theme_version );
    wp_register_script('fontawesome-script', get_stylesheet_directory_uri() . '/inc/fontawesome/js/all.min.js', [], ACA_FONTAWESOME_VERSION);
    wp_enqueue_script('fontawesome-script');
}
add_action( 'wp_enqueue_scripts', 'aca_theme_styles_and_scripts' );

function aca_theme_add_arrow_to_parent_menu($output, $item, $depth, $args) {
    /**
     * <svg aria-hidden="true" width="16" height="16"><use xlink:href="#arrow" /></svg>
     */
    if(0<=$depth){
        if(in_array('menu-item-has-children', $item->classes)){
            $output = str_replace('</a>', '<svg aria-hidden="true" width="16" height="16"><use xlink:href="#arrow" /></svg></a>', $output);
        }
    }

    return $output;
}
add_filter( 'walker_nav_menu_start_el', 'aca_theme_add_arrow_to_parent_menu', 10, 4 );

require_once get_template_directory() . '/inc/admin.php';
