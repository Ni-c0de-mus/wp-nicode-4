<?php

function load_nicode_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_register_style('nicode_css', get_template_directory_uri() . '/css/nicode.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('nicode_css');
}

add_action('wp_enqueue_scripts', 'load_nicode_css');

function load_nicode_js() {

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_register_script('nicode_js', get_template_directory_uri() . '/js/nicode.js', false, false, true);
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('nicode_js');
}

add_action('wp_enqueue_scripts', 'load_nicode_js');
?>
