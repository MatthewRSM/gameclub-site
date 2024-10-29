<?php
/**
 * Clubstyle - Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Clubstyle - Child
 * @since Clubstyle - Child 1.0
 */

function clubstyle_child_enqueue_scripts() {
    wp_enqueue_style('clubstyle', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'clubstyle_child_enqueue_scripts');