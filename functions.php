<?php
/**
 * Dracula Publisher 2 - functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Dracula_Publisher_2
 */

/**
 * Enqueue scripts and styles.
 */
function dracula_publisher_2_scripts() {
	// enqueue parent styles
	wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css' );
	// enqueue font styles
	wp_enqueue_style( 'font-styles-muli', get_stylesheet_directory_uri() . '/assets/fonts/typeface-muli/index.css', array(), null );
	wp_enqueue_style( 'font-styles-ovo', get_stylesheet_directory_uri() . '/assets/fonts/typeface-ovo/index.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'dracula_publisher_2_scripts' );
