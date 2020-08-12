<?php

// function load_stylesheets() {
//     wp_register_style('normalize', get_template_directory_uri() , 'css/normalize.css', array(), 1, 'all');
//     wp_enqueue_style('normalize');

//     wp_register_style('style', get_template_directory_uri() , 'css/style.css', array(), 1, 'all');
//     wp_enqueue_style('style');

//     wp_register_style('venobox', get_template_directory_uri() , 'css/venobox.css', array(), 1, 'all');
//     wp_enqueue_style('venobox');
// }

// add_action('wp_enqueue_scripts', 'load_stylesheets');

function gt_setup() {
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), $media = 'all');
}

add_action('wp_enqueue_scripts', 'gt_setup');