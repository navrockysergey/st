<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

add_action('wp_enqueue_scripts', 'wpdocs_override_stylesheets', PHP_INT_MAX);

function wpdocs_override_stylesheets() {
    wp_enqueue_style( 'st-style', get_stylesheet_directory_uri() . '/css/style.css', array());
    wp_enqueue_script( 'st-js', get_stylesheet_directory_uri(). '/scripts/scripts.js');
}