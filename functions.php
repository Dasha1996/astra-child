<?php
/**
 * Astra Child Theme functions and definitions child test
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

//enque sass
/*function child_enqueue_styles_sass() {

	wp_enqueue_style( 'astra-child-theme-sass', get_stylesheet_directory_uri() . '/dist/css/styles.css', array(), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}*/

//add_action( 'wp_enqueue_scripts', 'child_enqueue_styles_sass', 15 );

function astrachild_load_scripts() {
    //handle, path, dependency, version for caching
    //filemtime has to be get_template_directory
    //use the teme version number for file version
    //wp_get_theme() -> get('Version')
    //wp_register_style
    wp_enqueue_style( 'astra-child-theme-sass', get_stylesheet_directory_uri() . '/dist/css/styles.css', array(), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
    wp_enqueue_script('span-js', get_stylesheet_directory_uri() . '/js/span-viewport.js', array('jquery'), '1.1', true);
    wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/js/slider.js', array('jquery'), '1.1', true);
}

add_action('wp_enqueue_scripts', 'astrachild_load_scripts');