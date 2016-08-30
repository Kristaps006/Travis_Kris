<?php
/**
 * Register and load any scripts your themes frontend requires.
 */
add_action('wp_enqueue_scripts', function () {

});

/**
 * Register and load any stylesheets your themes frontend requires.
 */
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . "/css/bootstrap.min.css");

    wp_enqueue_style( 'frontend-css', get_template_directory_uri() . "/css/frontend.css");

});