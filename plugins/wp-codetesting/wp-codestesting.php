<?php
/*
Plugin Name: Applied testing 
Description: For custom short code at the footer
Version:1.0.0
Author: Abdullah Sarfraz
Author URI: http://positivawebsite.local/
*/


define("WP_CODESTESTING_PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
// upper line provide the path up to our plugin folder

// adding short code
add_shortcode("wpb","wpb_callback");

function wpb_callback() {
    return "this is simple plugin short code  that we have created";
}

add_shortcode("wpb-file","wpb_file_callback");

function wpb_file_callback() {
    include_once WP_CODESTESTING_PLUGIN_DIR_PATH . '/views/wp-codestesting-panel.php';
}

add_shortcode("wpb-phone","wpb_parameterized_callback");

// Nubmber's Links Short code Callback Function
function wpb_parameterized_callback($attributes) {
    // print_r($attributes);

    echo $attributes['tel'];

}

// Text's Links Short Code 
add_shortcode("wpb-text", "wpb_text_callback");

function  wpb_text_callback($attributes) {
    echo $attributes['text'];
}

