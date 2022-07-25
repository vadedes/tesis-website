<?php

function tesis_files(){
    wp_enqueue_script('tesis-imp-scripts', get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('tesis-webflow-scripts', get_theme_file_uri('/build/webflow.js'), array('jquery'), 1.0, true);
    wp_enqueue_style('gilroy-extra-bold', get_theme_file_uri('/fonts/Gilroy-ExtraBold.ttf'));
    wp_enqueue_style('gilroy-semi-bold', get_theme_file_uri('/fonts/Gilroy-SemiBold.ttf'));
    
    wp_enqueue_style('tesis_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('tesis_biosciences_normalize', get_theme_file_uri('/build/normalize.css'));
    wp_enqueue_style('tesis_biosciences_webflow', get_theme_file_uri('/build/tesis-biosciences.webflow.css'));
    wp_enqueue_style('webflow_styles', get_theme_file_uri('/build/webflow.css'));
}

add_action('wp_enqueue_scripts', 'tesis_files');